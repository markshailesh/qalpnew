<?php

namespace App\Http\Controllers;

use App\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Language::all();
        return view('language.index',['data'=>$data,'checked'=>'checked','unchecked'=>'']);
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
        Language::create($input);
         
        return redirect('language')->with('success','Language inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function show(Language $language)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function edit(Language $language, $id)
    {
         $language=Language::find($id);
        return response()->json(array('msg'=>$language), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Language $language)
    {
        $input = $request->all();
        Language::find($request->id)->update($input);
        return redirect('language')->with('update','Language updated successfully');
    }

         public function update_status(Request $request){
 
         Language::where('id',$request->id)->update(['status'=>$request->stat]);
         $status=Language::find($request->id);
         return response()->json(array('msg'=>$status), 200);

        } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Language::destroy($id);
         return redirect('language')->with('danger','Language Deleted successfully');  
    }
}
