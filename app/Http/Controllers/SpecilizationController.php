<?php

namespace App\Http\Controllers;

use App\Specilization;
use Illuminate\Http\Request;

class SpecilizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Specilization::orderBy ('id', 'DESC')->get();
        return view('specilization.index',['data'=>$data,'checked'=>'checked','unchecked'=>'']);
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
        Specilization::create($input);
         
        return redirect('specilization')->with('success','Specilization inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Specilization  $specilization
     * @return \Illuminate\Http\Response
     */
    public function show(Specilization $specilization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Specilization  $specilization
     * @return \Illuminate\Http\Response
     */
    public function edit(Specilization $specilization, $id)
    {
         $specilization=Specilization::find($id);
        return response()->json(array('msg'=>$specilization), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Specilization  $specilization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Specilization $specilization)
    {
         $input = $request->all();
        Specilization::find($request->id)->update($input);
        return redirect('specilization')->with('update','Specilization updated successfully');
    }

     public function update_status(Request $request){
 
         Specilization::where('id',$request->id)->update(['status'=>$request->stat]);
         $status=Specilization::find($request->id);
         return response()->json(array('msg'=>$status), 200);

        } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Specilization  $specilization
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Specilization::destroy($id);
         return redirect('specilization')->with('danger','Specilization Deleted successfully');  
    }
}
