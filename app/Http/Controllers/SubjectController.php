<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Subject::orderBy ('id', 'DESC')->get();
        return view('subjects.index',['data'=>$data,'checked'=>'checked','unchecked'=>'']);
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
        Subject::create($input);
         
        return redirect('subject')->with('success','Subject inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject,$id)
    {
        $subject=Subject::find($id);
        return response()->json(array('msg'=>$subject), 200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        $input = $request->all();
        Subject::find($request->id)->update($input);
        return redirect('subject')->with('update','Subject updated successfully');
    }

     public function update_status(Request $request){
 
         Subject::where('id',$request->id)->update(['status'=>$request->stat]);
         $status=Subject::find($request->id);
         return response()->json(array('msg'=>$status), 200);

        } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Subject::destroy($id);
         return redirect('subject')->with('danger','Subject Deleted successfully');  
    }
}
