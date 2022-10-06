<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Plan;
use App\Wallet;
use App\User;
use App\Payment;
use Auth;

/**
 * Class PayuMoneyController
 */
class PayuMoneyController extends \InfyOm\Payu\PayuMoneyController
{
    public function paymentCancel(Request $request)
    {
        $data = $request->all();
        
      /*echo "<pre>";
        print_r($data);
        die;*/
        
        $payment= new Payment;
        $payment->user_id=$data["udf1"];
        $payment->payment_id=$data["mihpayid"];
        $payment->amount=$data["amount"];
        $payment->transaction_id=$data["txnid"];
        $payment->status=$data["status"];
        $payment->save();
        
        return view('frontend.pay_failed', compact('data'));
        
        // your code here
    }
    
    public function paymentSuccess(Request $request)
    {
        $input = $request->all();
        $status = $input["status"];
        $firstname = $input["firstname"];
        $amount = $input["amount"];
        $txnid = $input["txnid"];
        $posted_hash = $input["hash"];
        $key = $input["key"];
        $productinfo = $input["productinfo"];
        $email = $input["email"];
        $salt = config('payu.salt_key');
        $udf1=$input["udf1"];
        $udf2=$input["udf2"];


        if (isset($input["additionalCharges"])) {
            $additionalCharges = $input["additionalCharges"];
            $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        } else {
            $retHashSeq = $salt.'|'.$status.'|||||||||'.$udf2.'|'.$udf1.'|'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        }
        $hash = hash("sha512", $retHashSeq);
        if ($hash != $posted_hash) {
            return "Invalid Transaction. Please try again";
        } else {
            if(empty(Wallet::where('transaction_id',$input["txnid"])->where('user_id',$input["udf1"])->where('plan_id',$input["udf2"])->first())){
                $wallet_recharge=new Wallet;
                $wallet_recharge->user_id =$input["udf1"];
                $wallet_recharge->plan_id = $input["udf2"];
                $wallet_recharge->amount = $amount;
                $wallet_recharge->status = 'success';
                $wallet_recharge->transaction_id=$input["txnid"];
                $wallet_recharge ->save();

                $user_data=User::find($input["udf1"]);
                $user_data->balance= $user_data->balance+$amount;
                $user_data->save();
            
            
            /*echo "<h3>Thank You. Your order status is ".$status.".</h3>";
            echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
            echo "<h4>We have received a payment of Rs. ".$amount;*/
            
            
                $payment= new Payment;
                $payment->user_id=$input["udf1"];
                $payment->payment_id=$input["mihpayid"];
                $payment->amount=$input["amount"];
                $payment->transaction_id=$input["txnid"];
                $payment->status=$input["status"];
                $payment->save();
            
             return view('frontend.pay_reciept', compact('status', 'txnid', 'amount'));
            }
        }
    }
    
   /// End Wallet Payment
    
    
    public function paymentCancels(Request $request)
    {
        $data = $request->all();
       /* echo "<pre>";
        print_r($data);
        die;*/
        
        $payment= new Payment;
        $payment->payment_id=$data["mihpayid"];
        $payment->amount=$data["amount"];
        $payment->transaction_id=$data["txnid"];
        $payment->status=$data["status"];
        $payment->save();
        
        return view('frontend.pay_faileds', compact('data'));
        
        // your code here
    }
    
    public function paymentSucces(Request $request)
    {
        $input = $request->all();
        
        
        $status = $input["status"];
        $firstname = $input["firstname"];
        $amount = $input["amount"];
        $txnid = $input["txnid"];
        $posted_hash = $input["hash"];
        $key = $input["key"];
        $productinfo = $input["productinfo"];
        $email = $input["email"];
        $salt = config('payu.salt_key');
        
        
        
        
        if (isset($input["additionalCharges"])) {
            $additionalCharges = $input["additionalCharges"];
            $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        } else {
            $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        }
        $hash = hash("sha512", $retHashSeq);
        if ($hash != $posted_hash) {
            return "Invalid Transaction. Please try again";
        } else {
            
             return view('frontend.pay_reciepts', compact('status', 'txnid', 'amount'));
            
           
        }
    }
}
