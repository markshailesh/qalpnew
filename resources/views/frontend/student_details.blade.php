<!DOCTYPE html>
<html lang="zxx">
   <head>
      <!-- meta tag -->
      <meta charset="utf-8">
      <title>QALP EDU | Best Home Tutors in India | Student Details</title>
      <meta name="description" content="Professional Home Tutors, Now in your city. Find Tutors Online by checking, Reviews, Ratings, Fee Details and choose from the best Tuition Classes , Trainers matching your requirements">
      <meta name="keyword" content="Qalp Edu is a Tutor providing company in india offering home tuitions for 9th, 10th, 11th, 12th, IIT, NEET, physics, math, science, english,  yoga, music and many more. Hire now! , best home tutors in varanasi, lucknow, prayagraj, noida, gorakhpur in india.">
      <!-- responsive tag -->
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

     <!--Header Start-->
     @include('frontend/include/header')
     <!--Header End-->

      <!-- Main content Start -->
      <div class="main-content">
         <!-- Breadcrumbs Start -->
         <div class="rs-breadcrumbs breadcrumbs-overlay">
               <div class="breadcrumbs-text white-color">
                     <h1 class="page-title">Student Details</h1>
                     <ul>
                        <li>
                           <a class="active" href="/">Home</a>
                        </li>
                        <li>Student Details</li>
                     </ul>
               </div>
         </div>
         <!-- Breadcrumbs End -->
         <!-- Blog Section Start -->
         <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
               <div class="row">
                  <div class="col-lg-9 md-pr-15">
                        @if(Session::has('message'))
                   <div class="alert alert-success" style="text-align: center; margin-top: 0;">
                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                  <strong>Success !</strong>{{ Session::get('message') }}
                </div>
                    
                   @endif
                    @if ($message = Session::get('success'))
                     <div class="alert alert-success" style="text-align: center; margin-top: 0;">
                     <a href="#" class="close" data-dismiss="alert">&times;</a>
                     <strong>Success!</strong> {{ $message }}
                    </div>
                    @endif
                    @if ($message = Session::get('danger'))
                    <div class="alert alert-danger" style="text-align: center; margin-top: 0;">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Error!</strong> {{ $message }}
                    </div>
                    @endif
               <div class="listing-details-wrap">
                  <div class="place-list-item">
                     <div class="dcontent content">
                     @php $item=$student @endphp    
                       @php
                          $user_details = App\UserDetail::where('user_id', $item->id)->first();
                        @endphp 
                        <div class="row">
                           <div class="col-md-8">
                              <a href="#">
                                 <h6>{{$item->name}}</h6>
                              </a>
                              <b class="jobprice"><i class="fa fa-television"></i> <span> Class Mode : </span> {{$user_details->class_mode}}</b>
                              <ul class="list-unstyled jobdtl">
                                 <li> <i class="fa fa-graduation-cap" aria-hidden="true"></i> <b>Board :</b> {{$user_details->board}}</li>
                                 <li><i class="fa fa-file-text-o" aria-hidden="true"></i> <b>Class :</b> {{$user_details->class}}</li>
                                 <li><i class="fa fa-book" aria-hidden="true"></i> <b>Subject :</b> {{$user_details->subject}}</li>
                                 <li> <i class="fa fa-language"></i> <b>Language :</b> {{$user_details->language}}</li>
                                 <li> <i class="fa fa-briefcase"></i> <b>Fee Range :</b> {{$user_details->fee_range}}</li>
                                 <li> <i class="fa fa-briefcase"></i> <b>City :</b> {{$user_details->district}}</li>
                                 <li> <i class="fa fa-map-marker"></i> <b>Pincode :</b> {{$user_details->pincode}}</li>
                                 <li> <i class="fa fa-comments"></i> <b>Massage :</b> {{$user_details->massage}}</li>

                                 
                              </ul>
                           </div>
                           
                           
                           <div class="col-md-4">
                            <img src="{{ URL::asset('images/student.png') }}" class="hide dt">
                              <ul class="job-details">
                                    @if(!empty(Auth::User()) && Auth::user()->user_type=='teacher')
                                        @php
                                         $student_number = App\ViewNumber::where('viewed_user_id', $item->id)->where('viewed_by_user', Auth::user()->id)->where('user_type', 'teacher')->first();
                                            @endphp
                                            @if($student_number != null)
                                                <div class="view">
                                                    <span> <i class="flaticon-call"></i>  +91 - {{$item->phone_number}}</span>
                                                </div>
                                            @else
                                                <div class="view">
                                                    <span data-toggle="modal" data-target="#Viewno"> <i class="flaticon-call"></i> View No.</span>
                                                </div>
                                            @endif
                                        @endif
                              </ul>
                           </div>
                           
                            <!-- View No. Model -->
                                                <div class="modal fade" id="Viewno" role="dialog">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Are You Sure?</h5>
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                    </div>
                                    <!--<div class="modal-body">
                                        <p>Confirmation</p>
                                    </div>-->
                                    <div class="modal-footer">
                                        <a href="/student_number_view_front/{{$item->id}}" type="button" class="btn btn-primary">Yes</a>
                                        <a href="#" type="button" class="btn btn-secondary" data-dismiss="modal" style="color:#fff;">Close</a>
                                    </div>
                                </div>
                            </div>
                        </div>
<!-- End Model-->

                        </div>
                     </div>
                  </div>
               </div>
                  </div>
                  <div class="col-lg-3 col-md-12">
                     <div class="widget-area">
                        <div class="recent-posts-widget mb-50">
                           <h3 class="widget-title">Recent Added Student</h3>
                           @foreach($studs as $item)
                           <div class="show-featured ">
                               <div class="post-img">
                                   <a href="#"><img src="{{ URL::asset('images/student.png') }}" class="hide dt"></a>
                               </div>
                               <div class="post-desc">
                                   <a href="#">{{$item->name}}</a>
                                   <span class="date">
                                    <i class="fa fa-book"></i>
                                       {{$item->user_details->language}}
                                   </span>
                               </div>
                           </div> 
                           @endforeach
                       </div>
                        {{-- <div class="recent-posts mb-50">
                           <h3 class="widget-title">Subject</h3>
                           <ul>
                               <li><a href="#">Hindi</a></li>
                               <li><a href="#">English</a></li>
                               <li><a href="#">Math</a></li>
                           </ul>
                       </div>
                        <div class="widget-archives mb-25">
                           <h3 class="widget-title">Categories</h3>
                           <ul>
                              <li><a href="#">College</a></li>
                              <li><a href="#">High School</a></li>
                              <li><a href="#">Primary</a></li>
                              <li><a href="#">School</a></li>
                              <li><a href="#">University</a></li>
                           </ul>
                        </div> --}}
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Blog Section End -->
      </div>
      <!-- Main content End --> 

     
                <!--- Start footer -->
       @include('frontend/include/footer')
      <!--- End Footer -->
