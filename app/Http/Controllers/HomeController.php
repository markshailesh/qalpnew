<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Student;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->user_type=='Admin'){
        $courses=Course::count('id');
        $student=Student::count('id');
        $paid_student=Student::where('paid','paid')->count('id');
        $free_student=Student::where('paid','free')->count('id');
         return view('dashboard',['courses'=>$courses,'student'=>$student,'paid_student'=>$paid_student,'free_student'=>$free_student,'page_name'=>'Dashboard']);
     }else{

       echo "<h1><center>Invalid email or password</center></h1>";
     }
    }
}
