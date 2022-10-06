<?php

namespace App\Http\Controllers;

use App\Enquiry;
use App\NeedHelp;
use App\StudEnquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
               $data=Enquiry::orderBy ('id', 'DESC')->get();
        return view('enquiry',['data'=>$data]);
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
         $input = $request->all();
         Enquiry::create($input);
         return redirect()->back()->with('success','Enquiry Inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Enquiry $enquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(Enquiry $enquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enquiry $enquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Enquiry::destroy($id);
       return redirect('enquiry')->with('danger','Enquiry Deleted successfully');
    }
         public function need_help()
    {
               $data=NeedHelp::all();
        return view('need_help',['data'=>$data]);
    }
        public function stud_enquiry()
    {
               $data=StudEnquiry::all();
        return view('stud_enquiry',['data'=>$data]);
    }
}
