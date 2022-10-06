<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
use App\Course;
use App\Payment;
use App\Subject;
use App\Chapter;
use App\Topic;
use App\Content;
use App\Test;
use App\Slider;
use App\Question_bank;
use App\Live_session;
use URL;
use App\Chat;
use DB;
use \Cache;
use Carbon\Carbon;

class StudentApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $list=Student::where('phone_number',$request->phone_number)->first();
        if($list!=null)
        {
            return response()->json(['message' => 'Student Already Exist','status' =>'401'], 401);
        }
        else
        {
        $input=$request->all();
        if($request->image == "")
		    {
				$input['image']="no-image.png";
		    }else
		    {
		        $file = $request->file('image');
                $fileName= $file->getClientOriginalName();
                $fileName=str_replace(" ","_",$fileName);
                $file->move(public_path('uploads/student'),$fileName);
                $input['image']=$fileName;
		    }
        $student =Student::create($input);
        
        $course=Student::select('students.*','courses.*')->leftjoin('courses','students.courses','courses.id')->where('students.id',$student->id)->first();

        
        $student1['student_id']=$student->id;
        $student1['student_name']=$student->name;
        $student1['student_image']=URL::to('public/uploads/student/'. $student->image);
        $student1['student_phone_number']=$student->phone_number;
        $student1['student_dob']=$student->dob;
        $student1['student_paid']=$student->paid;
        $student1['student_session']=$student->student_session;
        $student1['student_status']=$student->status;
        $student1['course_id']=$student->courses;
        $student1['course_name']=$course->name;
        $student1['course_fee']=$course->fee;
        $student1['course_discounted_fee']=$course->discounted_fee;
        $student1['course_session_start']=$course->session_start;
        $student1['course_session_end']=$course->session_end;
        $student1['course_paid']=$course->course_status;
        
        $title='Registration';
        $content='Your are Successfully Register to '.$course->name;
        $recipients=[$student->fcm_token];
        fcm()->to($recipients)->priority('normal')->timeToLive(0)->notification([
            'title'=>$title,
            'body'=>$content,
            ])->send();
        
        
        return response()->json(['message' => 'User Retrive Sucessfully','data'=>$student1,'status' =>'200'], 200);
    
        }    
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
    public function update(Request $request,Student $student)
    {
       
        $input=$request->all();
         $file=$request->file('image');
        if($file) {
            $filename= $file->getClientOriginalName();
            $filename = str_replace(' ', '_', $filename);
            $file->move(public_path('uploads/student'), $filename);
            $input['image'] = $filename;    
        }
        $data=$student->update($input);
        
        $student=Student::where('id',$student->id)->first();
        $course=Student::select('students.*','courses.*')->leftjoin('courses','students.courses','courses.id')->where('students.id',$student->id)->first();
        $student1['student_id']=$student->id;
        $student1['student_name']=$student->name;
        $student1['student_image']=URL::to('public/uploads/student/'. $student->image);
        $student1['student_phone_number']=$student->phone_number;
        $student1['student_dob']=$student->dob;
        $student1['student_paid']=$student->paid;
        $student1['student_session']=$student->student_session;
        $student1['student_status']=$student->status;
        $student1['course_id']=$student->courses;
        $student1['course_name']=$course->name;
        $student1['course_fee']=$course->fee;
        $student1['course_discounted_fee']=$course->discounted_fee;
        $student1['course_session_start']=$course->session_start;
        $student1['course_session_end']=$course->session_end;
        $student1['course_paid']=$course->course_status;
        $student1['student_email']=$course->email;
        $student1['student_address']=$course->address;
        $student1['student_alt_phn']=$course->alt_phn;
        $student1['student_gender']=$course->gender;
        return response()->json(['message' => 'Student updated','data'=>$student1,'status' =>'200'], 200);
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
    
    public function userExits(Request $request)
    {
        $list=Student::where('phone_number',$request->phone_number)->first();
        
        if($list!=null)
        {
            return response()->json(['message' => 'Student Already Exist','status' =>'200'], 200);
        }
        else
        {
           return response()->json(['message' => 'Student Not Exist','status' =>'401'], 401);
        }
    }
    
    public function getCourses()
    {
        $list=Course::where('status','enable')->get();
        return response()->json(['message' => 'All Course','data'=>$list,'status' =>'200'], 200);
    }
    
    public function studentLogin(Request $request)
    {
        $list=Student::select('students.id as student_id','students.name as student_name','students.phone_number as student_phone_number','students.image as student_image','students.dob as student_dob','students.paid as student_paid','students.student_session as student_session','students.status as student_status','students.email as student_email','students.address as student_address','students.alt_phn as student_alt_phn','students.gender as student_gender','courses.id as course_id','courses.name as course_name','courses.fee as course_fee','courses.discounted_fee as course_discounted_fee','courses.session_start as course_session_start','courses.session_end as course_session_end','courses.course_status as course_paid','courses.status as course_status')->leftJoin('courses','students.courses','courses.id')->where('students.phone_number',$request->phone_number)->first();
        if($list->student_email=="")
            {
                $list->student_email="";
            }
            if($list->student_address=="")
            {
                $list->student_address="";
            }
           if($list->student_gender=="")
            {
                $list->student_gender="";
            }
            if($list->student_alt_phn=="")
            {
                $list->student_alt_phn="";
            }
        if($list==null)
        {
            return response()->json(['message' => 'Student Not Exist','status' =>'401'], 401);
        }

        if($list->student_session < date("Y-m-d"))
        {
            $list->student_image=URL::to('public/uploads/student/'. $list->student_image);
            
            return response()->json(['message' => 'Student Course Expired.','data'=>$list,'status' =>'402'], 402);
        }
        else
        {
            $list->student_image=URL::to('public/uploads/student/'. $list->student_image);
            
            
           return response()->json(['message' => 'Student Data','data'=>$list,'status' =>'200'], 200);
        }
        
    }
    
    public function payment(Request $request)
    {
        $input=$request->all();
        $data=Payment::create($input);
        
        $student=Student::where('id',$data->student_id)->first();
        
        $course=Course::where('id',$data->course_id)->first();
        
         $title='Payment';
        $content='Your Successfully Pay For '.$course->name. ' and Your Transcation id '.$data->transaction_id;
        $recipients=[$student->fcm_token];
        fcm()->to($recipients)->priority('normal')->timeToLive(0)->notification([
            'title'=>$title,
            'body'=>$content,
            ])->send();
        return response()->json(['message' => 'Payment Store Successfully','data'=>$data,'status' =>'200'], 200);
    }
    
    public function getSubject(Request $request)
    {
        $check=Student::where('id',$request->student_id)->first();
        if($check->student_session < date("Y-m-d"))
        {
            return response()->json(['message' => 'Student Course Expired.','status' =>'402'], 402);
        }
        $data=Subject::where('course_id',$request->course_id)->where('status','enable')->get();
        
        $total=count($data);
        
        for($i=0;$i<$total;$i++)
        {
            $data[$i]['image']=URL::to('public/uploads/subject/'. $data[$i]['image']);
        }
        return response()->json(['message' => 'Subject Retrive Successfully','data'=>$data,'status' =>'200'], 200);
    }
    
    public function getChapter(Request $request)
    {
        $list=Chapter::where('subject_id',$request->subject_id)->where('status','enable')->get();
        
        $total=count($list);
        
        for($i=0;$i<$total;$i++)
        {
            $data=Topic::where('chapter_id',$list[$i]['id'])->where('status','enable')->get();
            $total1=count($data);
            for($j=0;$j<$total1;$j++)
            {
                $data[$j]['image']=URL::to('public/uploads/topic/'. $data[$j]['image']);
            }
            $list[$i]['topic']=$data;
             $list[$i]['image']=URL::to('public/uploads/chapter/'. $list[$i]['image']);
        }
        
         return response()->json(['message' => 'Subject Retrive Successfully','data'=>$list,'status' =>'200'], 200);
    }
    
    public function getContent($student_id,$topic_id)
    {
        $stu=Student::where('id',$student_id)->first();
       
        $pdf=Content::where('topic_id',$topic_id)->where('content_type','pdf')->get();
        
        $total=count($pdf);
        for($i=0;$i<$total;$i++)
        {
            $pdf[$i]['pdf']=URL::to('public/uploads/content/'. $pdf[$i]['pdf']);
        }
        
       
        
        $video=Content::where('topic_id',$topic_id)->where('content_type','video')->get();
        
        $total_vi=count($video);
     
        for($i=0;$i<$total_vi;$i++)
        {
            $url1=$video[$i]['url'];
            $url=$url1.'/config';
            
            
        // Initialize a CURL session.
        $ch = curl_init(); 
  
        // Return Page contents.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  
        //grab URL and pass it to the variable.
        curl_setopt($ch, CURLOPT_URL, $url);
  
        $result = curl_exec($ch);
            
        $var=   json_decode($result); 
        
        $var1=$var->request;
        
        $th=$var->video;
        
        $thu=$th->thumbs;
        
        $aw=960;
        
      // echo'<pre>';print_r ($thu->$aw);die;
        
        $var2=$var1->files;
        $video[$i]['url']=$var2->progressive[2]->url;
         $video[$i]['thumb']=$thu->$aw;
        
        }
     
        return response()->json(['message' => 'Content Retrive Successfully','pdf'=>$pdf,'video'=>$video,'student_status'=>$stu->paid,'status' =>'200'], 200);
    }
    
    public function getTest($student_id,$topic_id)
    {
        $stu=Student::where('id',$student_id)->first();
       
        $list=Test::where('topic_id',$topic_id)->groupBy('content_id')->get(['content_id','test_name','test_image','test_status']);
        $total=count($list);
        for($i=0;$i<$total;$i++)
        {
            $list[$i]['test_image']=URL::to('public/uploads/test/'. $list[$i]['test_image']);
        }
        
         return response()->json(['message' => 'Test Retrive Successfully','data'=>$list,'student_status'=>$stu->paid,'status' =>'200'], 200);
    }
    
    public function getQuestion($content_id)
    {
        $list=Test::where('content_id',$content_id)->get();
        $total=count($list);
        for($i=0;$i<$total;$i++)
        {
            $list[$i]['question_image']=URL::to('public/uploads/test/'. $list[$i]['question_image']);
             $list[$i]['option_a_image']=URL::to('public/uploads/test/'. $list[$i]['option_a_image']);
             $list[$i]['option_b_image']=URL::to('public/uploads/test/'. $list[$i]['option_b_image']);
             $list[$i]['option_c_image']=URL::to('public/uploads/test/'. $list[$i]['option_c_image']);
             $list[$i]['option_d_image']=URL::to('public/uploads/test/'. $list[$i]['option_d_image']);
             $list[$i]['answer_explanation_image']=URL::to('public/uploads/test/'. $list[$i]['answer_explanation_image']);
             
        }
        return response()->json(['message' => 'Question Retrive Successfully','data'=>$list,'status' =>'200'], 200);
    }
    
    public function slider()
    {
        $list=Slider::where('status','enable')->get();
        
        $total=count($list);
        for($i=0;$i<$total;$i++)
        {
            $list[$i]['image']=URL::to('public/uploads/slider/'. $list[$i]['image']);
        }
        return response()->json(['message' => 'Slider Retrive Successfully','data'=>$list,'status' =>'200'], 200);
    }
    
    public function question_bank(Request $request)
    {
        
        $stu=Student::where('id',$request->stu_id)->first();
        if($stu->paid=='paid')
        {
        $list=Question_bank::where('course_id',$stu->courses)->where('subject_id',$request->subject_id)->get();
         return response()->json(['message' => 'Question Retrive Successfully','data'=>$list,'student_staus'=>$stu->paid,'status' =>'200'], 200);
        }
        else
        {
            return response()->json(['message' => 'Student Not Paid','status' =>'401'], 401);
        }
            
    }
    
    public function live_session(Request $request)
    {
        $list=Student::where('id',$request->stu_id)->first();
        
        $data=Live_session::where('course_id',$list->courses)->get();
        
        $total=count($data);
        for($i=0;$i<$total;$i++)
        {
            $data[$i]['image']=URL::to('public/uploads/live_session/'. $data[$i]['image']);
        }
        return response()->json(['student_status'=>$list->paid,'data'=>$data,'message' => 'Live Session Retrive Sucessfully','status' =>'200'], 200);
    }
    
     public function saveChat(Request $request)
    {
       $input['sender']=$request->student_id;
       $input['recipient']='admin';
       $input['student_id']=$request->student_id;
       $input['message']=$request->message;
       $input['date']=date('d/m/Y');
       date_default_timezone_set('Asia/Kolkata');
       $input['time']=date("h:i");
       
       $list=Chat::create($input);
       
       //$list=Chat::where('student_id',$request->student_id)->get();
       
       return response()->json(['data'=>$list,'msg'=>"Chat save",'status' =>'200'],200);
       
    }
    
    public function getChat(Request $request)
    {
       $list=Chat::where('student_id',$request->id)->paginate(15);
       
       return response()->json(['data'=>$list,'msg'=>"Chat retrive",'status' =>'200'],200);
       
    }
    
}
