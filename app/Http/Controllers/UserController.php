<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\UserDetail;
use App\Dashboard;
use App\PostRequirement;
use DB;
use Hash;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use App\Wallet;
use App\LeadManagement;
use Craftsys\Msg91\Facade\Msg91;

class UserController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	function __construct() {
		$this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index', 'store']]);
		$this->middleware('permission:user-create', ['only' => ['create', 'store']]);
		$this->middleware('permission:user-edit', ['only' => ['edit', 'update']]);
		$this->middleware('permission:user-delete', ['only' => ['destroy']]);
	}

	public function index(Request $request) {
		$data = User::orderBy('id', 'DESC')->paginate(5);
		return view('users.index', compact('data'))
			->with('i', ($request->input('page', 1) - 1) * 5);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$roles = Role::pluck('name', 'name')->all();
		return view('users.create', compact('roles'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
/*		$this->validate($request, [
			'name' => 'required',
			'email' => 'required|email|unique:users,email',
			'password' => 'required|same:confirm-password',
			'roles' => 'required',
		]);*/

		$input = $request->all();
		$input['password'] = Hash::make($input['password']);

		$user = User::create($input);
		$user->assignRole($request->input('roles'));

		return redirect()->route('users.index')
			->with('success', 'User created successfully');
	}


	public function other_reg(Request $request) {

		// $input = $request->all();
		// $user = new User();
        // $user->name = $request->name;
        // $user->phone_number = $request->phone_number;
        // $user->email  = $request->email;
        // $user->password  = Hash::make($request->password);
        // $user->user_type='student';
        // $user->save();
         //return $request->all();
        $user_details = new PostRequirement;
        if(!empty($request->user_id))
        {
        $user_details->user_id = $request->user_id;
        }
        $user_details->name = $request->name;
        $user_details->email  = $request->email;
        $user_details->phone_number = $request->phone_number;
        $user_details->class_mode = $request->class_mode;
        $user_details->board = $request->board;
        $user_details->class = $request->class;
        $user_details->subject = implode(",",$request->subject);
        $user_details->language = implode(",",$request->language);
        $user_details->city = $request->city;
        $user_details->pincode = $request->areapin;
        $user_details->area_location = $request->area_location;
        $user_details->fee_range = $request->fee_range;
        $user_details->massage = $request->massage;
        $user_details->save();

        $teacher_data=UserDetail::whereNotnull('qualification')->where('district',$request->city)->where('pincode',$request->areapin)->where('class', 'LIKE', '%'.$request->class.'%')->where('subject', 'LIKE', '%'.$user_details->subject.'%')->get();

        foreach($teacher_data as $teacher){
            $user_data=User::where('id', $teacher->user_id)->where('notification_status', 1)->first();
            if(!empty($user_data) && $user_data->balance >= 1){
                $user_data->balance = $user_data->balance - "0.50";
                $user_data->save();

                $wallet_update = new Wallet;
                $wallet_update->user_id = $user_data->id;
                $wallet_update->transaction_id = uniqid();
                $wallet_update->amount = '0.50';
                $wallet_update->status = 'debit';
                $wallet_update ->save();

                $lead_manage = new LeadManagement;
                $lead_manage->teacher_user_id = $teacher->user_id;
                $lead_manage->student_user_id = $user->id;
                $lead_manage->save();

                $this->send_otp_sms($user_data->phone_number, $user_data,$user,$user_details);
            }
        }
        // return "hiii";
        return redirect()->route('frontend')
			->with('success', 'Thank You!!  "Specific Tutors has been notified regarding your requirement. They will contact you soon to arrange a Free Demo.');
	}
	/**
	 * Display the specified resource.
	 *'success', 'Thank You!! We have successfully received your home tutor request. One of our team members will get in touch with you very soon. Please Login Now!!'
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$user = User::find($id);
		return view('users.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$user = User::find($id);
		$roles = Role::pluck('name', 'name')->all();
		$userRole = $user->roles->pluck('name', 'name')->all();

		return view('users.edit', compact('user', 'roles', 'userRole'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
/*		$this->validate($request, [
			'name' => 'required',
			'email' => 'required|email|unique:users,email,' . $id,
			'password' => 'same:confirm-password',
			'roles' => 'required',
		]);*/

		$input = $request->all();
		if (!empty($input['password'])) {
			$input['password'] = Hash::make($input['password']);
		} else {
			$input = array_except($input, array('password'));
		}

		$user = User::find($id);
		$user->update($input);
		DB::table('model_has_roles')->where('model_id', $id)->delete();

		$user->assignRole($request->input('roles'));

		return redirect()->route('users.index')
			->with('success', 'User updated successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		User::find($id)->delete();
		return redirect()->route('users.index')
			->with('success', 'User deleted successfully');
	}

	 public function send_otp_sms($to,$user_data,$user,$user_details){

        $response = Msg91::sms()->to(['91'.$to]) ->flow("61d6d766209e1c61bb66e777")->variable('tutor_name', $user_data->name)->variable('student_name', $user->name)->variable('class', $user_details->class)->variable('city', $user_details->district)->variable('pincode', $user_details->pincode)->variable('tution_mode', $user_details->class_mode)->variable('subject', $user_details->subject)->send();

    }


        public function update_user_notification(Request $request){
         $user=User::find(Auth::user()->id);
         $user->notification_status=$request->stat;
         $user->save();
         return response()->json(array('msg'=>$user), 200);

        }


}
