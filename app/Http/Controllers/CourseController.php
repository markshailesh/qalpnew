<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Course::all();
        return view('courses.index',['data'=>$data,'checked'=>'checked','unchecked'=>'']);
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
        if($request->status != null)
        {
            $input['status'] = 'enable';
        }
        else
        {
            $input['status'] = 'disable';
        }
        Course::create($input);
         
        return redirect('course')->with('success','Course inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course,$id)
    {
        $course=Course::find($id);
        return response()->json(array('msg'=>$course), 200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $input = $request->all();
        Course::find($request->id)->update($input);
        return redirect('course')->with('update','Course updated successfully');
    }

     public function update_status(Request $request){
 
         Course::where('id',$request->id)->update(['status'=>$request->stat]);
         $status=Course::find($request->id);
         return response()->json(array('msg'=>$status), 200);

        } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Course::destroy($id);
         return redirect('course')->with('danger','Course Deleted successfully');  
    }
}
