<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use App\User;
use Session;
use Craftsys\Msg91\Facade\Msg91;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
               $data=Blog::orderBy ('id', 'DESC')->get();
        return view('blog.index',['data'=>$data,'checked'=>'checked','unchecked'=>'']);
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


  public function send_otp_sms($to, $name, $text){


    // $response =  Msg91::otp()->to('91'.$to) ->template('61bc8d0fd8caac484414d323')->send();

      $response = Msg91::sms()->to('91'.$to)->flow('61fbb9f27ca7fa28af01f169')->variable('user', $name)->variable('business_name', 'Qalp Edu')->variable('otp', $text)->send();

    }

    public function otp_message(Request $request){

     $mobileregex = "/^[6-9][0-9]{9}$/" ;
        if ($request->phone != '' && preg_match($mobileregex, $request->phone) === 1) {
            $customer = User::where('phone_number', $request->phone)->count();
              $mob_otp = rand(100000, 999999); ;
                    Session::forget('mob_otp');
                    Session::put('mob_otp', [$mob_otp]);

          $this->send_otp_sms($request->phone,'User', $mob_otp);
             return response()->json(['status' => true]);

      }

    }

public function send_otp(Request $request){

     $mobileregex = "/^[6-9][0-9]{9}$/" ;
        if ($request->phone != '' && preg_match($mobileregex, $request->phone) === 1) {
            $user=User::where('phone_number', $request->phone)->first();
            $customer = User::where('phone_number', $request->phone)->count();
            if ($customer == 1) {
              $mob_otp = rand(100000, 999999); ;
                    Session::forget('login_otp');
                    Session::put('login_otp', [$mob_otp]);

          $this->send_otp_sms($request->phone,$user->name , $mob_otp);
             return response()->json(['status' => true]);
            } else {
                return response()->json(['status' => false]);
            }

      }

    }



 public function check_email(Request $request){

        if ($request->email) {
            $customer = User::where('email', $request->email)->count();
            if ($customer == 0) {
             return response()->json(['status' => true]);
            } else {
                return response()->json(['status' => false]);
            }

      }

    }

public function check_otp(Request $request){

           $otp= Session::get('mob_otp');
            if ($otp[0] == $request->otp) {
             return response()->json(['status' => true]);
            } else {
                return response()->json(['status' => false]);
            }

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
        $input['slug']=str_replace(" ","-",strtolower($request->name));
        if($request->file('image')){
         $file=$request->file('image');
         $fileName=$request->title.'_'.$file->getClientOriginalName();
         $fileName=str_replace("","_",$fileName);
         $file->move('uploads/blog',$fileName);
         $src= "uploads/blog/".$fileName;
		 compress($src, $src, 500);
         $input['image']=$fileName;
         }

        Blog::create($input);
        return redirect('blog')->with('success','Blog inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog,$id)
    {
         $blog=Blog::find($id);
        return response()->json(array('msg'=>$blog), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $input = $request->all();
        if($request->file('image')){
         $file=$request->file('image');
         $fileName=$request->title.'_'.$file->getClientOriginalName();
         $fileName=str_replace("","_",$fileName);
         $file->move('uploads/blog',$fileName);
          $src= "uploads/blog/".$fileName;
			compress($src, $src, 500);
         $input['image']=$fileName;
         }
       Blog::find($request->id)->update($input);
        return redirect('blog')->with('update','Blog updated successfully');
    }

      public function update_status(Request $request){

         Blog::where('id',$request->id)->update(['status'=>$request->stat]);
         $status=Blog::find($request->id);
         return response()->json(array('msg'=>$status), 200);

        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::destroy($id);
       return redirect('blog')->with('danger','Blog Deleted successfully');    }


    public function convertSlug()
    {
       $list=Blog::all();
       foreach($list as $data)
       {
           $title=str_replace(" ","-",strtolower($data->title));
           Blog::where('id',$data->id)->update(['slug'=>$title]);
       }
    }
}
