<?php

namespace App\Http\Controllers;

use App\JobPost;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=JobPost::orderBy ('id', 'DESC')->get();
        return view('job_post.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
/*        $data=JobPost::where('id',$id)->first();
        return view('job_post.create',['data'=>$data]);*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Respons 
     e
     */
    public function store(Request $request)
    {
        $input = $request->all();
         JobPost::create($input);
         return redirect()->back()->with('success','Data Inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function show(JobPost $jobPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function edit(JobPost $jobPost,$id)
    {
        $job_post=JobPost::find($id);
    return $job_post;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobPost $jobPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       JobPost::destroy($id);
       return redirect('job_post')->with('danger','Data Deleted successfully');
    }
}
