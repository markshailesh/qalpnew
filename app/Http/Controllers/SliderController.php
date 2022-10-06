<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Notification;
use App\Course;
use App\Student;
use App\Chat;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        $sliders = Slider::orderBy ('id', 'DESC')->get();
  
        return view('sliders.index',['sliders'=>$sliders,'checked'=>'checked','unchecked'=>'']);
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
        $input=new slider;
        $input->title = $request->title;
        $input->description = $request->description;
        if($request->image == "")
		    {
				$input->image="no-image.png";
		    }else
		    {
		        $file = $request->file('image');
                $fileName= $file->getClientOriginalName();
                $fileName=str_replace(" ","_",$fileName);
                $file->move(public_path('uploads/slider'),$fileName);
                $src= "public/uploads/slider/".$fileName;
			    compress($src, $src, 500);
                $input->image=$fileName;
		    }
        
        if($request->status != '')
        {
            $input->status = 'enable';
        }
        else
        {
            $input->status = 'disable';
        }
        $input ->save();

        $request->session()->flash('data','Data Inserted Successfully!');

         return redirect("sliders");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $sliders=Slider::find($id);
        return response()->json(array('msg'=>$sliders), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = Slider::where('id',$request->id)->first();
        $data->title = $request->title;
        $data->description = $request->description;
        $file=$request->file('image');
        if($file) {
            $filename= $file->getClientOriginalName();
            $filename = str_replace(' ', '_', $filename);
            $file->move(public_path('uploads/slider'), $filename);
            $data->image = $filename;    
        }
        if($request->status != '')
        {
            $data->status = 'enable';
        }
        else
        {
            $data->status = 'disable';
        }
        $data->save();
        
        $request->session()->flash('data','Data Updated Successfully!');

        return redirect("sliders");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        Slider::find($id)-> delete();
        $request->session()->flash('data','Data Deleted Successfully!');
        return redirect('sliders');
    }
    
     public function update_status(Request $request)
    {
        Slider::where('id',$request->e_id)->update(['status'=>$request->stat]);
        $status=Slider::find($request->e_id);
        return response()->json(array('msg'=>$status), 200);
    }
    
    public function indexNotification()
    {
        $data=Notification::all();
        return view('notifications.index',['data'=>$data]);
    }
    
    public function get_course()
    {
        $data=Course::all();
        
       return response()->json(array('msg'=>$data), 200);
    }
    
    public function get_year()
    {
        $data=Student::groupBy('student_session')->get(['student_session']);
        //return $data;
        // $total=count($data);
        
        // for($i=0;$i<$total;$i++)
        // {
        //      $start=substr($data[$i]['session_start'],0,4);
        //       $end=substr($data[$i]['session_end'],0,4);
        //     $data[$i]['year']=$start.'-'.$end;
        // }
        
       return response()->json(array('msg'=>$data), 200);
    }
    
    public function get_student()
    {
        $data=Student::all();
        
       return response()->json(array('msg'=>$data), 200);
    }
    
     public function fcmNotificationCourse(Request $request)
    {
        $list=Student::where('courses',$request->course)->get();
        
        $total=count($list);
        for($i=0;$i<$total;$i++)
        {
        $title=$request->title;
        $content=$request->content;
        $recipients=[$list[$i]['fcm_token']];
        fcm()->to($recipients)->priority('normal')->timeToLive(0)->notification([
            'title'=>$title,
            'body'=>$content,
            ])->send();
        }
    }
    
    public function fcmNotificationYear(Request $request)
    {
       // return $request->all();
        $list=Student::where('student_session',$request->student1)->get();
        //return $list;
        $total=count($list);
        for($i=0;$i<$total;$i++)
        {
        $title=$request->title;
        $content=$request->content;
        $recipients=[$list[$i]['fcm_token']];
        fcm()->to($recipients)->priority('normal')->timeToLive(0)->notification([
            'title'=>$title,
            'body'=>$content,
            ])->send();
        }
    }
    
    public function fcmNotificationStudent(Request $request)
    {
        //return $request->all();
        $list=Student::where('id',$request->student2)->get();
        //return $list;
        $total=count($list);
        for($i=0;$i<$total;$i++)
        {
        $title=$request->title;
        $content=$request->content;
        $recipients=[$list[$i]['fcm_token']];
        fcm()->to($recipients)->priority('normal')->timeToLive(0)->notification([
            'title'=>$title,
            'body'=>$content,
            ])->send();
        }
    }
    
    public function chat()
    {
     
     $recent=Chat::select('chats.student_id','students.id','students.name','students.phone_number','students.image')->leftjoin('students','chats.student_id','students.id')->groupBy('chats.student_id')->get(); 
     $contact=Student::get(['id','name','image','phone_number']);
     //return $contact;
     
     return view('chats.index',['recent'=>$recent,'contact'=>$contact]);
    }
    
    public function saveChat(Request $request)
    {
        
        $chat= new Chat;
       
        $chat->student_id=$request->student_id;
        $chat->sender='admin';
        $chat->recipient=$request->student_id;
        $chat->date=date("d/m/Y");
        date_default_timezone_set('Asia/Kolkata');
        $chat->time=date("h:i");
        
        $chat->message=$request->message;
        
        $chat->save();
        
        return $chat;
        
    }
    
    public function getMessage(Request $request)
    {
        $msg=Chat::select('students.id as stu_id','students.name','students.phone_number','students.image as stu_image','chats.*')->leftjoin('students','chats.student_id','students.id')->where('student_id',$request->id)->get();
        $total=count($msg);
        if($total==0)
        {
             $msg=Student::select('students.id as stu_id','students.name','students.phone_number','students.image as stu_image')->where('id',$request->id)->get();
             
             return $msg;
        }
        else
        {
        return $msg;
        }
    }
}
