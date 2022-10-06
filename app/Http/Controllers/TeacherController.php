<?php

namespace App\Http\Controllers;

use App\User;
use App\UserDetail;
use App\TeacherCertificate;
use App\TeacherResult;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     $data=User::select('users.*','user_details.district')->leftjoin('user_details','users.id','user_details.user_id','user_details.pincode')->where('users.user_type','teacher');
     $city=null;
     $pincodes=null;
     $classes=array();
     $subjects=array();
     $qualifications=null;
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
        
         if($request->qualificaton != null)
        {
           $qualifications=$request->qualificaton;
           $data= $data->where('user_details.qualification', $qualifications);
        }
        
      if($request->status != null)
        {
           $data= $data->where('users.status', $request->status);
        }
      $data=$data->orderBy('id', 'DESC')->get();
    
  
        return view('teacher.index',['data'=>$data,'checked'=>'checked','unchecked'=>'','city'=>$city,'pincodes'=>$pincodes,'classes'=>$classes,'subjects'=>$subjects,'qualifiactions_data'=>$qualifications]);
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
         $file->move('uploads/teacher',$fileName);
         $src= "uploads/teacher/".$fileName;
		 compress($src, $src, 500);
         $input['image']=$fileName;
         }

        Teacher::create($input);
        return redirect('teacher')->with('success','Teacher inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $teacher=User::select('users.id','users.name as user_name','users.phone_number as user_phone_number','users.email as user_email','user_details.user_id','user_details.user_id','user_details.*')->leftjoin('user_details','users.id','user_details.user_id')->where('users.id',$id)->first();
        
        $teacher_certificates=TeacherCertificate::where('user_id',$id)->get();
        $teacher_results=TeacherResult::where('user_id',$id)->get();
        return ['teacher'=>$teacher, 'teacher_certificates'=>$teacher_certificates,'teacher_results'=>$teacher_results];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

        public function update_status(Request $request){
 
         User::where('id',$request->id)->update(['status'=>$request->stat]);
         $status=User::find($request->id);
         return response()->json(array('msg'=>$status), 200);

        } 


        public function update_verification_status(Request $request){
 
         User::where('id',$request->id)->update(['verification'=>$request->stat1]);
         $verification=User::find($request->id);
         return response()->json(array('msg'=>$verification), 200);

        } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
     {
       User::destroy($id);
       return redirect('teacher')->with('danger','Teacher Deleted successfully');
    }
}
