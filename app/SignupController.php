<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Hash;
use Session;
use App\UserDetail;
use Illuminate\Support\Facades\Auth;
class SignupController extends Controller
{

public function teacher_signup(Request $request) {

        $input = $request->all();
        $input['slug']=str_replace(" ","-",strtolower($request->name)).mt_rand(1231,7879);
        $otp= Session::get('mob_otp');
        if($request->otp== $otp[0]){
        $input['password']  = Hash::make($request->password);
        $input['user_type'] ="teacher";

        $user = User::create($input);

        $user->teacher_id="T2021". $user->id;
        $user->save();


         $user_details = new UserDetail;
        $user_details->user_id = $user->id;
        $user_details->save();

       $credentials = $request->only('phone_number','password');
        if (Auth::attempt($credentials)) {

                //return Auth::user()->user_type;
                return redirect()->intended('/dashboard');


        }
        else{

        return redirect("/sign_in")->withSuccess('Signup details are not valid');
    }




        }else{

                return redirect()->route('teacher_sign_up')
            ->with('success', 'Your Otp not match');
        }
    }


	public function student_signup(Request $request) {

		$input = $request->all();
		$otp= Session::get('mob_otp');
        if($request->otp== $otp[0]){
		$input['password']  = Hash::make($request->password);
        $input['user_type'] ="student";
		$user = User::create($input);
         $user_details = new UserDetail;
        $user_details->user_id = $user->id;
        $user_details->save();
        $credentials = $request->only('phone_number','password');
        if (Auth::attempt($credentials)) {

                //return Auth::user()->user_type;
                return redirect()->intended('/dashboard');


        }
        else{

        return redirect("/sign_in")->withSuccess('Signup details are not valid');
    }



		}else{

				return redirect()->route('student_sign_up')
			->with('success', 'Your Otp not match');
		}
	}

	public function sign_in(Request $request)
   {
   		$request->validate([
            'phone_number' => 'required',
        ]);
        $credentials = $request->only('phone_number','password');
        if (Auth::attempt($credentials)) {
        		//return Auth::user()->user_type;
        		return redirect()->intended('/dashboard');
        }
        else{
        return redirect("/sign_in")->withSuccess('Login details are not valid');
         }
   }

   public function signOut() {
        Session::flush();
        Auth::logout();
        return Redirect('sign_in');
    }

        public function convertSlug()
    {
       $list=User::all();
       foreach($list as $data)
       {
           $name=str_replace(" ","-",strtolower($data->name))."-".mt_rand(1231,7879);
           User::where('id',$data->id)->update(['slug'=>$name]);
       }
    }

}
