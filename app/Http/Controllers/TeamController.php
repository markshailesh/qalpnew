<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Team::orderBy ('id', 'DESC')->get();
        return view('team.index',['data'=>$data,'checked'=>'checked','unchecked'=>'']);
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
         $file->move('uploads/team',$fileName);
          $src= "uploads/team/".$fileName;
			compress($src, $src, 500);
         $input['image']=$fileName;
         }
        Team::create($input);
        return redirect('team')->with('success','Team inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team,$id)
    {
         $team=Team::find($id);
        return response()->json(array('msg'=>$team), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $input = $request->all();
        if($request->file('image')){
         $file=$request->file('image');
         $fileName=$request->title.'_'.$file->getClientOriginalName();
         $fileName=str_replace("","_",$fileName);
         $file->move('uploads/team',$fileName);
          $src= "uploads/team/".$fileName;
			compress($src, $src, 500);
         $input['image']=$fileName;
         }
       Team::find($request->id)->update($input);
        return redirect('team')->with('update','Team updated successfully');
    }


 public function update_status(Request $request){
 
         Team::where('id',$request->id)->update(['status'=>$request->stat]);
         $status=Team::find($request->id);
         return response()->json(array('msg'=>$status), 200);

        } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Team::destroy($id);
       return redirect('team')->with('danger','Team Deleted successfully');  
    }
}
