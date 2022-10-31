<?php

namespace App\Http\Controllers;

use App\User;
use App\UserDetail;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

    $data=User::select('users.*','user_details.district')->leftjoin('user_details','users.id','user_details.user_id','user_details.pincode')->where('users.user_type','student');
     $city=null;
     $pincodes=null;
     $classes=array();
     $subjects=array();
     $language=null;
     if($request->city != null){

            $city = $request->city;
            $data=$data->where('user_details.district',$city);


     }


      if($request->pincode != null){

            $pincodes = $request->pincode;
            $data=$data->where('user_details.pincode',$pincodes);


     }

      if($request->class != null)
        {
           $classes=$request->class;
           $class=implode(",",$request->class);
           $data= $data->where('user_details.class', 'like', '%'.$class.'%');
        }


          if($request->subject != null)
        {
           $subjects=$request->subject;
           $subject=implode(",",$request->subject);
           $data= $data->where('user_details.subject', 'like', '%'.$subject.'%');
        }

         if($request->language != null)
        {
           $language=$request->language;
           $data= $data->where('user_details.language', $language);
        }


      $data=$data->orderBy('id', 'DESC')->get();
        //$data=User::where('user_type','student')->orderBy ('id', 'DESC')->get();

        return view('students.index',['data'=>$data,'checked'=>'checked','unchecked'=>'','city'=>$city,'pincodes'=>$pincodes,'classes'=>$classes,'subjects'=>$subjects, 'language'=>$language]);
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
        $input=$request->all();
        if($request->file('image')){
         $file=$request->file('image');
         $fileName=$request->title.'_'.$file->getClientOriginalName();
         $fileName=str_replace("","_",$fileName);
         $file->move('uploads/student',$fileName);
         $input['image']=$fileName;
         }

        User::create($input);
        return redirect('student')->with('success','Student inserted successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student, $id)
    {
      $student=User::select('users.id','users.name as user_name','users.phone_number as user_phone_number','users.email as user_email','user_details.user_id','user_details.user_id','user_details.*')->leftjoin('user_details','users.id','user_details.user_id')->where('users.id',$id)->first();
      return $student;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       User::destroy($id);
       return redirect('students')->with('danger','Student Deleted successfully');
    }

    public function update_status(Request $request)
    {
         User::where('id',$request->id)->update(['status'=>$request->stat]);
         $status=User::find($request->id);
         return response()->json(array('msg'=>$status), 200);
    }

}
