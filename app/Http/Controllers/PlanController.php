<?php

namespace App\Http\Controllers;

use App\Plan;
use App\Wallet;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Plan::orderBy ('id', 'DESC')->get();
        return view('plan.index',['data'=>$data,'checked'=>'checked','unchecked'=>'']);
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
        Plan::create($input);
         
        return redirect('plan')->with('success','Plan inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan,$id)
    {
        $plan=Plan::find($id);
        return response()->json(array('msg'=>$plan), 200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        $input = $request->all();
        Plan::find($request->id)->update($input);
        return redirect('plan')->with('update','Plan updated successfully');
    }

     public function update_status(Request $request){
 
         Plan::where('id',$request->id)->update(['status'=>$request->stat]);
         $status=Plan::find($request->id);
         return response()->json(array('msg'=>$status), 200);

        } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Plan::destroy($id);
         return redirect('plan')->with('danger','Plan Deleted successfully');  
    }
    
    public function purchase_history()
    {
        $data=Wallet::groupBy('user_id')->orderBy ('id', 'DESC')->get();
        return view('purchase_history',['data'=>$data]);
    }
    
    
    public function user_pay_history($id)
    {
        $data=Wallet::where('user_id',$id)->get();
        return view('user_pay_history',['data'=>$data]);
    }
    
    
}
