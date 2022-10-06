<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Blog;
use App\Slider;
use App\User;
use App\UserDetail;
use App\Team;
use App\Plan;
use App\Subject;
use App\TeacherReview;
use App\StudEnquiry;
use App\NeedHelp;
use App\TeacherResult;
use App\TeacherCertificate;
use Illuminate\Support\Facades\Auth;
use Session;
class FrontController extends Controller
{

   	public function index()
    {
        $blog=Blog::where('status' , 'enable')->get();
        $tutor=User::where('status' , 'enable')->where('user_type','teacher')->orderBy('id', 'DESC')->get();
        $student=User::where('status' , 'enable')->where('user_type','student')->orderBy('id', 'DESC')->get();
        $slider=Slider::where('status' , 'enable')->orderBy('id', 'DESC')->get();
        return view('frontend.index',['tutor'=>$tutor,'blog'=>$blog,'slider'=>$slider,'student'=>$student,]);
    }

     public function about()
    {
        $team=Team::where('status' , 'enable')->orderBy('id', 'DESC')->get();
        return view('frontend.about',['team'=>$team,]);
    }

    public function post_requirements()
    {
        return view('frontend.post_requirements');
    }

    public function apply_for_job()
    {
        return view('frontend.apply_for_job');
    }
        public function how_it_works()
    {
        return view('frontend.how_it_works');
    }
        public function privacy_policy()
    {
        return view('frontend.privacy_policy');
    }
        public function refund_policy()
    {
        return view('frontend.refund_policy');
    }
        public function cancellation_policy()
    {
        return view('frontend.cancellation_policy');
    }
         public function term_and_condition()
    {
        return view('frontend.term_and_condition');
    }

     public function blog()
    {
        $blog=Blog::where('status' , 'enable')->get();
        $sers=Blog::where('status' , 'enable')->orderBy ('id', 'DESC')->limit(5)->get();
        return view('frontend.blog',['blog'=>$blog,'sers'=>$sers,]);
    }

       public function blog_details(Request $request,$id)
    {
       $blogs=Blog::where('slug' , $id)->first();
        $ser=Blog::orderBy ('slug', 'DESC')->limit(3)->get();
        //return($ser);
        return view('frontend.blog-details',['blog_details'=>$blogs,'ser'=>$ser,]);
    }

        public function search_tutor()
    {
        $tutor=User::where('status' , 'enable')->where('user_type','teacher')->orderBy('id', 'DESC')->paginate(25);
        $teach=User::where('status' , 'enable')->where('user_type','teacher')->orderBy('id', 'DESC')->get();
        $language=User::where('status' , 'enable')->where('user_type','teacher')->orderBy('id', 'DESC')->get();
        $specilization=User::where('status' , 'enable')->where('user_type','teacher')->orderBy('id', 'DESC')->get();
        $class=User::where('status' , 'enable')->where('user_type','teacher')->orderBy('id', 'DESC')->get();
        $subject=Subject::orderBy('id', 'DESC')->get();
        $pincode=User::where('status' , 'enable')->where('user_type','teacher')->orderBy('id', 'DESC')->get();
        return view('frontend.search_tutor',['tutor'=>$tutor, 'teach'=>$teach, 'language'=>$language, 'specilization'=>$specilization, 'class'=>$class, 'subject'=>$subject, 'pincode'=>$pincode,]);
    }

        public function student_details($id)
    {
        $student=User::where('id' , $id)->first( );
        $studs=User::where('status' , 'enable')->where('user_type','student')->orderBy ('id', 'DESC')->limit(5)->get();

        if (Auth::check()){
             return view('frontend.student_details',['student'=>$student, 'studs'=>$studs,]);
         }
         else{
             Session::flash('message', ' Please Register/Login to View Contact Details !');
             return view('frontend.student_details',['student'=>$student, 'studs'=>$studs,]);

         }

    }

      public function search(Request $request)
    {


        $condition_specilization=[];
        $condition_language=[];

        $search=$request->key;
        $class = $request->class;
        $subject=$request->subject;
        $specilization=$request->specilization;
        $language=$request->language;





        if($language != [null] && $language != null)
        {
            foreach($request->language as $language)
            {
                array_push($condition_language,['language'=>$language]);
            }

        }



      $tutor=User::select('users.*','user_details.name as user_name','user_details.district as district','user_details.language as language','user_details.subject as subject','user_details.specilization as specilization','user_details.class as class','user_details.pincode as pincode')->leftjoin('user_details','users.id','user_details.user_id')->where('status' , 'enable')->where('user_type','teacher')->orderBy('id', 'DESC')
         ->where(function ($query) use ($condition_language){
            foreach ($condition_language as $key=>$value)
            {
                $query->orWhere($value);
            }
            });

// $tutor=User::select('users.*')->leftjoin('user_details','users.id','user_details.user_id')->where('status' , 'enable')->where($condition)->orderBy('id', 'DESC');
        if($search != null)
        {
          $tutor= $tutor->where(function($query) use ($search){
                   $query->where('users.name', 'LIKE', '%'.$search.'%')
                   ->orWhere('users.teacher_id', 'LIKE', '%'.$search.'%')
                   ->orWhere('user_details.district', 'LIKE', '%'.$search.'%')
                    ->orWhere('user_details.pincode', 'LIKE', '%'.$search.'%');
                    });
        }
        if($subject != [null] && $subject !=null)
        {
          $subjects=implode(",",$subject);
           $tutor= $tutor->where('user_details.subject', 'like', '%'.$subjects.'%');
        }
        if($class != [null] && $class != null)
        {
          $class=implode(",",$class);
           $tutor= $tutor->where('user_details.class', 'like', '%'.$class.'%');
        }
        $tutor = $tutor->paginate(15);
        return response()->json([
            'html' =>  view('frontend.include.tutor', compact('tutor'))->render(),
         ]);
    }


   public function search_tutor_data(Request $request)
    {
      // return $request->all();
        $conditions = [];
        $search=$request->key;
        $class = $request->class;
        $subject=$request->subject;
        $language=$request->language;
        if($language != null){
            $conditions = array_merge($conditions, ['language' => $language]);
        }

       $tutor=User::select('users.*','user_details.name as user_name','user_details.district as district','user_details.language as language','user_details.subject as subject','user_details.specilization as specilization','user_details.class as class','user_details.pincode as pincode')->leftjoin('user_details','users.id','user_details.user_id')->where('status' , 'enable')->where('user_type','teacher')->where($conditions)->orderBy('id', 'DESC');


// $tutor=User::select('users.*')->leftjoin('user_details','users.id','user_details.user_id')->where('status' , 'enable')->where($condition)->orderBy('id', 'DESC');
        if($search != null)
        {
           $tutor= $tutor->where(function($query) use ($search){
                   $query->where('users.name', 'LIKE', '%'.$search.'%')
                   ->orWhere('users.teacher_id', 'LIKE', '%'.$search.'%')
                   ->orWhere('user_details.district', 'LIKE', '%'.$search.'%')
                   ->orWhere('user_details.pincode', 'LIKE', '%'.$search);
                    });


        }
        if($subject != null)
        {
           $tutor= $tutor->where('user_details.subject', 'like', '%'.$subject.'%');
        }
         if($class != null)
        {
           $tutor= $tutor->where('user_details.class', 'like', '%'.$class.'%');
        }
        $tutor = $tutor->paginate(15);
         if(count($tutor)>0){
        return response()->json([
            'html' =>  view('frontend.include.all-tutor', compact('tutor'))->render(),
         ]);
        }
         else{
             return 0;
         }
    }




       public function search_student_data(Request $request)
    {
      $conditions = [];



        $search=$request->key;
        $class = $request->class;
        $subject=$request->subject;

        $language=$request->language;



         if($class != null){
            $conditions = array_merge($conditions, ['class' => $class]);
        }
        if($language != null){
            $conditions = array_merge($conditions, ['language' => $language]);
        }


       $student=User::select('users.*','user_details.name as user_name','user_details.district as district','user_details.language as language','user_details.subject as subject','user_details.specilization as specilization','user_details.class as class','user_details.pincode as pincode')->leftjoin('user_details','users.id','user_details.user_id')->where('status' , 'enable')->where('user_type','student')->where($conditions)->orderBy('id', 'DESC');


// $student=User::select('users.*')->leftjoin('user_details','users.id','user_details.user_id')->where('status' , 'enable')->where($condition)->orderBy('id', 'DESC');
        if($search != null)
        {
           $student= $student->where(function($query) use ($search){
                   $query->where('users.name', 'LIKE', '%'.$search.'%')
                   ->orWhere('users.teacher_id', 'LIKE', '%'.$search.'%')
                   ->orWhere('user_details.district', 'LIKE', '%'.$search.'%')
                   ->orWhere('user_details.pincode', 'LIKE', '%'.$search);
                    });
        }
        if($subject != null)
        {
           $student= $student->where('user_details.subject', 'like', '%'.$subject.'%');
        }
         $student = $student->paginate(15);

        if(count($student)>0){


        return response()->json([
            'html' =>  view('frontend.include.all-student', compact('student'))->render(),
         ]);
     }else{
        return 0;
     }
    }




    public function teacher_details(Request $request,$id)
    {

        $teachers=User::where('slug' , $id)->first( );
        $teachs=User::where('status' , 'enable')->where('user_type','teacher')->orderBy ('id', 'DESC')->limit(5)->get();
        $language=User::where('status' , 'enable')->where('user_type','teacher')->orderBy('id', 'DESC')->get();
        $specilization=User::where('status' , 'enable')->where('user_type','teacher')->orderBy('id', 'DESC')->get();
        $class=User::where('status' , 'enable')->where('user_type','teacher')->orderBy('id', 'DESC')->get();
        $subject=User::where('status' , 'enable')->where('user_type','teacher')->orderBy('id', 'DESC')->get();
        $pincode=User::where('status' , 'enable')->where('user_type','teacher')->orderBy('id', 'DESC')->get();

        if (Auth::check()){
             return view('frontend.teacher_details',['teachers'=>$teachers,'teachs'=>$teachs,'language'=>$language, 'specilization'=>$specilization, 'class'=>$class, 'subject'=>$subject, 'pincode'=>$pincode,]);
         }
         else{
             Session::flash('message', ' Please Register/Login to View Contact Details !');
             return view('frontend.teacher_details',['teachers'=>$teachers,'teachs'=>$teachs,'language'=>$language, 'specilization'=>$specilization, 'class'=>$class, 'subject'=>$subject, 'pincode'=>$pincode,]);

         }

    }

        public function contact()
    {
        return view('frontend.contact');
    }

        public function dashboard(Request $request)
      {
        $student=User::where('status' , 'enable')->where('user_type','student')->orderBy('id', 'DESC')->paginate(10);
        $tutor=User::where('status' , 'enable')->where('user_type','teacher')->orderBy('id', 'DESC')->paginate(10);
        $stu_enquiry=StudEnquiry::orderBy('id', 'DESC')->get();
        $user_details=UserDetail::where ('user_id', Auth::user()->id)->first();
        $result=TeacherResult::where ('user_id', Auth::user()->id)->get();
        $certificate=TeacherCertificate::where ('user_id', Auth::user()->id)->get();
        $plan=Plan::where('plan_user_type',Auth::user()->user_type)->orderBy('id', 'DESC')->get();
        if($request->section == "teacher_section"){
            return view('frontend.include.all-tutor',['plan'=>$plan,'user_details'=>$user_details,'tutor'=>$tutor,'stu_enquiry'=>$stu_enquiry,'student'=>$student,'result'=>$result,'certificate'=>$certificate]);
        }
        if($request->section == "student_section"){
            return view('frontend.include.all-student',['plan'=>$plan,'user_details'=>$user_details,'tutor'=>$tutor,'stu_enquiry'=>$stu_enquiry,'student'=>$student,'result'=>$result,'certificate'=>$certificate]);
        }

         if( Auth::user()->user_type=="teacher" && Auth::user()->verification=='verified')
          return view('frontend.dashboard',['plan'=>$plan,'user_details'=>$user_details,'tutor'=>$tutor,'stu_enquiry'=>$stu_enquiry,'student'=>$student,'result'=>$result,'certificate'=>$certificate]);
         else
         Session::flash('message', ' Verification Pending ! Please Click on "Manage Profile" button to update your profile.');
         return view('frontend.dashboard',['plan'=>$plan,'user_details'=>$user_details,'tutor'=>$tutor,'stu_enquiry'=>$stu_enquiry,'student'=>$student,'result'=>$result,'certificate'=>$certificate]);

      }

        public function tutor_details($id)
      {
        $tutor_details=User::where('id' , $id)->first();

        return view('frontend.include.tutor-details',['tutor_details'=>$tutor_details, 'success'=>'']);
    }


        public function sign_in()
    {
        if(!empty(Auth::user()))
        {
        return redirect()->intended('/dashboard');
        }
        else
        {
        return view('frontend.signup.sign_in');
    }
    }
    public function forgot_password()
    {
        return view('frontend.signup.forgot_password');
    }

    public function confirm_password()
    {
        return view('frontend.signup.confirm_password');
    }

        public function tsign_up()
    {
        return view('frontend.signup.teacher_sign_up');
    }

        public function ssign_up()
    {
        return view('frontend..signup.student_sign_up');
    }

        public function store_review(Request $request)
    {



         if (Auth::check()){

               $teacher_rating= new TeacherReview;
               $teacher_rating->tutor_id=$request->tutor_id;
               $teacher_rating->student_id=Auth::user()->id;
               $teacher_rating->rating=$request->rating;
               $teacher_rating->comment=$request->comment;
               $teacher_rating->save();
                $no_of_rating=TeacherReview::where('tutor_id',$request->tutor_id)->count();
                $rating_sum=TeacherReview::where('tutor_id',$request->tutor_id)->sum('rating');
                $rating=User::find($request->tutor_id);
                $rating->rating = $rating_sum/$no_of_rating;
                $rating->save();

               return redirect()->back()->with('success','Review Inserted successfully');

         }
    }



        public function s_new_req(Request $request) {

        $input = $request->all();
        $stud_enquiry = new StudEnquiry;
        $stud_enquiry->user_id=Auth::user()->id;
        $stud_enquiry->class_mode = $request->class_mode;
        $stud_enquiry->class = $request->class;
        $stud_enquiry->subject = implode(",",$request->subject);
        $stud_enquiry->language = $request->language;
        $stud_enquiry->fee_range = $request->fee_range;
        $stud_enquiry->massage = $request->massage;
        $stud_enquiry->save();

        return redirect('dashboard')->with('success','New Requirment inserted successfully');
    }

        public function need_help(Request $request) {

        $input = $request->all();
        $help = new NeedHelp;
        $help->user_id=Auth::user()->id;
        $help->issues = $request->issues;
        $help->message = $request->message;
        $help->save();

        return redirect('dashboard')->with('success','We will attend your query within 24hours. !!Thank You!!');
    }


}
