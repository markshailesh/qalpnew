<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;
use App\UserDetail;
use App\TeacherCertificate;
use App\TeacherResult;
use App\Plan;
use App\Wallet;
use App\ViewNumber;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     const TEST_URL = 'https://test.payu.in';
    const PRODUCTION_URL = 'https://secure.payu.in';
     
     
    public function index()
    {
        $user_details=UserDetail::where ('user_id', Auth::user()->id)->first();
        if($user_details!=null){
            return view('frontend.dashboard', compact('user_details'));
        }
        return view('frontend.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    // Student 

    public function Update_student(Request $request, $id){
        //return $request->all();
        $user_details_data = UserDetail::where('user_id', Auth::user()->id)->first();

        if($user_details_data==null){
            $user_details = new UserDetail;
                if($request->file('profile_img')){
                $file=$request->file('profile_img');
                $fileName=$request->name.'_'.$file->getClientOriginalName();
                $fileName=str_replace("","_",$fileName);
                $file->move('uploads/teacher_document',$fileName);
                $src= "uploads/teacher_document/".$fileName;
		        compress($src, $src, 500);
                $user_details->profile_img=$fileName;
                }
            $user_details->user_id = $id;
            $user_details->dob = $request->dob;
            $user_details->gender = $request->gender;
            $user_details->country = $request->country;
            $user_details->state = $request->state;
            $user_details->district = $request->district;
            $user_details->pincode = $request->pincode;
            $user_details->full_address = $request->full_address;
            $user_details->second_phone = $request->second_phone;
            $user_details->whatsapp_no = $request->whatsapp_no;
            $user_details->school_college = $request->school_college;
            $user_details->course = $request->course;
            $user_details->subject =  implode(",",$request->subject);
            $user_details->class = $request->class;
            $user_details->class_mode = $request->class_mode;
             $user_details->board = $request->board;
            $user_details->language = $request->language;
            $user_details->fee_range = $request->fee_range;
            $user_details->vaccination = $request->vaccination;
            $user_details->massage = $request->massage;
            $user_details->save();
        }else{
            $user_details = UserDetail::where('user_id', $id)->first();
             if($request->file('profile_img')){
                $file=$request->file('profile_img');
                $fileName=$request->name.'_'.$file->getClientOriginalName();
                $fileName=str_replace("","_",$fileName);
                $file->move('uploads/teacher_document',$fileName);
                $src= "uploads/teacher_document/".$fileName;
		        compress($src, $src, 500);
                $user_details->profile_img=$fileName;
                }
            $user_details->user_id = $id;
            $user_details->dob = $request->dob;
            $user_details->gender = $request->gender;
            $user_details->country = $request->country;
            $user_details->state = $request->state;
            $user_details->district = $request->district;
            $user_details->pincode = $request->pincode;
            $user_details->full_address = $request->full_address;
            $user_details->second_phone = $request->second_phone;
            $user_details->whatsapp_no = $request->whatsapp_no;
            $user_details->school_college = $request->school_college;
            $user_details->course = $request->course;
             $user_details->subject = implode(",",$request->subject);
            $user_details->class = $request->class;
            $user_details->class_mode = $request->class_mode;
             $user_details->board = $request->board;
            $user_details->language = $request->language;
            $user_details->fee_range = $request->fee_range;
            $user_details->vaccination = $request->vaccination;
            $user_details->massage = $request->massage;
            $user_details->save();
        }

        $user = User::where('id', $id)->first();
        if($request->new_password!=null){
            if (!empty($request->new_password)) {
                $password = Hash::make($request->new_password);
            } else {
                $password = array_except($password, array('password'));
            }
            $user->password = $password;
        }
        
        $user->save();
        return redirect('dashboard')->with('success','Profile Updated successfully.');
    }

    public function Update_teacher(Request $request, $id){
        $user_details_data = UserDetail::where('user_id', Auth::user()->id)->first();

        if($user_details_data==null){

            $user_details = new UserDetail;
            if($request->profile_img){
                
                $user_details->profile_img=$request->profile_img;
                }
            $user_details->user_id = $id;
            $user_details->dob = $request->dob;
            $user_details->gender = $request->gender;
            $user_details->country = $request->country;
            $user_details->state = $request->state;
            $user_details->district = $request->district;
            $user_details->pincode = $request->pincode;
            $user_details->full_address = $request->full_address;
            $user_details->second_phone = $request->second_phone;
            $user_details->whatsapp_no = $request->whatsapp_no;
            $user_details->audhar_no = $request->audhar_no;
            $user_details->class = implode(",",$request->class);
            $user_details->course = $request->course;
            $user_details->subject =  implode(",",$request->subject);
            $user_details->language = $request->language;
            $user_details->class_mode = $request->class_mode;
            $user_details->experience = $request->experience;
            $user_details->fee_range = $request->fee_range;
            $user_details->age = $request->age;
            $user_details->qualification = $request->qualification;
            $user_details->specilization = $request->specilization;
            $user_details->vaccination = $request->vaccination;
            $user_details->about = $request->about;
            $user_details->save();
        }else{
            $user_details = UserDetail::where('user_id', $id)->first();
            

            if($request->profile_img){
                
                $user_details->profile_img=$request->profile_img;
                }
            $user_details->user_id = $id;
            $user_details->dob = $request->dob;
            $user_details->gender = $request->gender;
            $user_details->country = $request->country;
            $user_details->state = $request->state;
            $user_details->district = $request->district;
            $user_details->pincode = $request->pincode;
            $user_details->full_address = $request->full_address;
            $user_details->second_phone = $request->second_phone;
            $user_details->whatsapp_no = $request->whatsapp_no;
            $user_details->audhar_no = $request->audhar_no;
            $user_details->class = implode(",",$request->class);
            $user_details->course = $request->course;
            $user_details->subject =  implode(",",$request->subject);
            $user_details->language = $request->language;
            $user_details->class_mode = $request->class_mode;
            $user_details->experience = $request->experience;
            $user_details->fee_range = $request->fee_range;
            $user_details->age = $request->age;
            $user_details->qualification = $request->qualification;
            $user_details->specilization = $request->specilization;
            $user_details->vaccination = $request->vaccination;
            $user_details->about = $request->about;
            $user_details->save();
        }

        $user = User::where('id', $id)->first();
        $user->status="disable";
        $user->verification="unverified";
        if($request->new_password!=null){
            if (!empty($request->new_password)) {
                $password = Hash::make($request->new_password);
            } else {
                $password = array_except($password, array('password'));
            }
            $user->password = $password;
        }
        $user->save();

        if($request->result_name != [ null ]){
            foreach($request->result_name as $key=> $result){
                $teacher_result = new TeacherResult;
                $teacher_result->user_id = $id;
                $teacher_result->result_name = $result;
                if ($request->result_file[$key]){
                    
                    $teacher_result->result_file = $request->result_file[$key];
                }
                $teacher_result->save();
            }
        }
        
        if(isset($request->certificate_name) && $request->certificate_name != [ null ]){
            foreach($request->certificate_name as $key => $certificate){
                $teacher_certificate = new TeacherCertificate;
                $teacher_certificate->user_id = $id;
                $teacher_certificate->certificate_name = $certificate;
                if($request->certificate_file[$key]){
                    $teacher_certificate->certificate_file = $request->certificate_file[$key];
                }
                $teacher_certificate->save();
            }
        }

        return redirect('dashboard')->with('success','Profile Updated successfully, After Successful Verification it will go live within 24 hours.');
    }

    public function wallet(Request $request)
    {
        $input = $request->all();
        $wallet_recharge = new Wallet;
        $wallet_recharge->user_id =Auth::user()->id;
        $wallet_recharge->plan_id = $request->plan_id;
        $wallet_recharge->amount = $request->plan_price;
        $wallet_recharge->status = 'success';
        $wallet_recharge ->save();

        $user_data=User::find(Auth::user()->id);
        $user_data->balance= $user_data->balance+$request->plan_price;
        $user_data->save();
       
        return redirect()->back()->with('success','Plan Amount Inserted successfully');
    }

    public function get_plan()
    {
        $data=Plan::where('plan_user_type',Auth::user()->user_type)->orderBy('id', 'DESC')->get();
        
       return $data;
    }

        public function get_amount($id)
    {
       $data=Plan::where('id',$id)->first();
        if(!empty($data)){
       return $data;
       }else{
          return 0;
       }
    }
    
    public function TeacherNumberView($teacher_id){
        //return User::where('id', 103)->with('user_details')->first();
        $user_data=User::find(Auth::user()->id);
        if($user_data->balance >= 20){
            
            $user_data->balance= $user_data->balance-20;
            $user_data->save();
            
            $wallet_update = new Wallet;
            $wallet_update->user_id =Auth::user()->id;
            $wallet_update->transaction_id = uniqid();
            $wallet_update->amount = '20';
            $wallet_update->status = 'debit';
            $wallet_update ->save();
            
            
            $viewnumber = new ViewNumber;
            $viewnumber->viewed_user_id = $teacher_id;
            $viewnumber->viewed_by_user = Auth::user()->id;
            $viewnumber->user_type = 'student';
            $viewnumber->status = 1;
            $viewnumber->save();
            
            return redirect()->back()->with('success','Number Viewd');
        } 
        return redirect()->back()->with('danger','Low Amount , Please Recharge Your Wallet.');
    }
    
    public function StudentNumberView($student_id){
        $user_data=User::find(Auth::user()->id);
        if($user_data->balance >= 30){
            
            $user_data->balance= $user_data->balance-30;
            $user_data->save();
            
            $wallet_update = new Wallet;
            $wallet_update->user_id =Auth::user()->id;
            $wallet_update->transaction_id = uniqid();
            $wallet_update->amount = '30';
            $wallet_update->status = 'debit';
            $wallet_update ->save();
            
            
            $viewnumber = new ViewNumber;
            $viewnumber->viewed_user_id = $student_id;
            $viewnumber->viewed_by_user = Auth::user()->id;
            $viewnumber->user_type = 'teacher';
            $viewnumber->status = 1;
            $viewnumber->save();
            
            $student_view = ViewNumber::where('viewed_user_id', $student_id)->where('viewed_by_user', Auth::user()->id)->where('user_type', 'teacher')->first();
            $student_details = User::find($student_id);
            $user_wallet_history = Wallet::where('user_id', Auth::user()->id)->get();
            return response()->json(array('student_view' => $student_view, 'student_details'=>$student_details, 'user_data'=>$user_data , 'user_wallet_history'=>$user_wallet_history, 'msg'=>'Number Viewd', 'status'=>'success'), 200);
            
            //return redirect()->back()->with('success','Number Viewd');
        } 
        return response()->json(array('msg'=>'Low Amount' , 'status'=>'danger'), 200);
        //return redirect()->back()->with('danger','Low Amount , Please Recharge Your Wallet.');
    }
    
    
        public function StudentNumberViewFront($student_id){
        $user_data=User::find(Auth::user()->id);
        if($user_data->balance >= 30){
            
            $user_data->balance= $user_data->balance-30;
            $user_data->save();
            
            $wallet_update = new Wallet;
            $wallet_update->user_id =Auth::user()->id;
            $wallet_update->transaction_id = uniqid();
            $wallet_update->amount = '30';
            $wallet_update->status = 'debit';
            $wallet_update ->save();
            
            
            $viewnumber = new ViewNumber;
            $viewnumber->viewed_user_id = $student_id;
            $viewnumber->viewed_by_user = Auth::user()->id;
            $viewnumber->user_type = 'teacher';
            $viewnumber->status = 1;
            $viewnumber->save();
            
            $student_view = ViewNumber::where('viewed_user_id', $student_id)->where('viewed_by_user', Auth::user()->id)->where('user_type', 'teacher')->first();
            $student_details = User::find($student_id);
            $user_wallet_history = Wallet::where('user_id', Auth::user()->id)->get();
            //return response()->json(array('student_view' => $student_view, 'student_details'=>$student_details, 'user_data'=>$user_data , 'user_wallet_history'=>$user_wallet_history, 'msg'=>'Number Viewd', 'status'=>'success'), 200);
            
            return redirect()->back()->with('success','Number Viewd');
        } 
        //return response()->json(array('msg'=>'Low Amount' , 'status'=>'danger'), 200);
        return redirect()->back()->with('danger','Low Amount , Please Recharge Your Wallet.');
    }
    
    
    
 public function payu(Request $request)
 {
      
       $user_id=$request->user_id;
       $plan_id=$request->plan_id;
        $plan=Plan::where('id',$request->plan_id)->first();
        $amount=$plan->amount;
        $data = $request->all();
        $MERCHANT_KEY = config('payu.merchant_key');
        $SALT = config('payu.salt_key');

        $PAYU_BASE_URL = config('payu.test_mode') ? self::TEST_URL : self::PRODUCTION_URL;
        $action = '';

        $posted = array();
        if (!empty($data)) {
            foreach ($data as $key => $value) {
                $posted[$key] = $value;
            }
        }
$posted['amount'] = $amount;
        $formError = 0;

        if (empty($posted['txnid'])) {
            // Generate random transaction id
            $txnid = substr(hash('sha256', mt_rand().microtime()), 0, 20);
        } else {
            $txnid = $posted['txnid'];
        }
        $hash = '';
// Hash Sequence
        $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
        if (empty($posted['hash']) && sizeof($posted) > 0) {
            if (
                empty($posted['key'])
                || empty($posted['txnid'])
                || empty($posted['amount'])
                || empty($posted['firstname'])
                || empty($posted['email'])
                || empty($posted['phone'])
                || empty($posted['productinfo'])
                || empty($posted['surl'])
                || empty($posted['furl'])
                || empty($posted['service_provider'])
            ) {
                $formError = 1;
            } else {
//                $posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
                $hashVarsSeq = explode('|', $hashSequence);
                $hash_string = '';
                foreach ($hashVarsSeq as $hash_var) {
                    $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
                    $hash_string .= '|';
                }

                $hash_string .= $SALT;


                $hash = strtolower(hash('sha512', $hash_string));
                $action = $PAYU_BASE_URL.'/_payment';

            }
        } elseif (!empty($posted['hash'])) {
            $hash = $posted['hash'];
            $action = $PAYU_BASE_URL.'/_payment';

        }

        return view('payumoney.wallet_recharge',
            compact('hash', 'action', 'MERCHANT_KEY', 'formError', 'txnid', 'posted', 'SALT','user_id','plan_id'));
    }
    
    public function image_upload_ajax(Request $request){
        
        
        
         if($request->file('image')){
                $file=$request->file('image');
                $fileName=$request->name.'_'.$file->getClientOriginalName();
                $fileName=str_replace("","_",$fileName);
                $file->move('uploads/teacher_document',$fileName);
                $src= "uploads/teacher_document/".$fileName;
		        compress($src, $src, 500);
                return $fileName;
                }
        
        
    }
    
    

}

    


