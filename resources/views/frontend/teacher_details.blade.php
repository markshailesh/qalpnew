<!DOCTYPE html>
<html lang="zxx"> 
<head> 
          @php $item=$teachers @endphp    
            @php
              $user_details = App\UserDetail::where('user_id', $item->id)->first();
            @endphp   
        <!-- meta tag -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{$item->name}} {{$user_details->subject}} home tutor in {{$user_details->district}}</title>
        <link rel=“canonical” href=“https://www.qalpedu.com/home-tutor/{{$item->slug}}” />
        <meta name="keyword" content="{{$item->name}} home tutor in {{$user_details->district}}, {{$item->name}} {{$user_details->subject}} home tutor in {{$user_details->district}}, home tutor in {{$user_details->district}}">
        <meta name="description" content="{{$item->name}} is home tutor in {{$user_details->district}} for {{$user_details->subject}}. Find the all the details of {{$item->name}}, home tutor in {{$user_details->district}}. Rating, review and fee detail of {{$item->name}}">
        
        <style type="text/css">
            .nav {
                display: -ms-flexbox;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                padding-left: 0;
                margin-bottom: 0;
                list-style: none;
                display: flex;
            }
        </style>
        
          <!--Header Start-->
          @include('frontend/include/header')
          <!--Header End-->


        <!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">{{$item->name}} - {{$user_details->subject}} home tutor.</h1>
                    <ul>
                        <li>
                            <a class="active" href="/">Home</a>
                        </li>
                        <li>Tutor Details</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->   
            
            <!-- Profile Section -->
            <section class="profile-section orange-color pt-100 md-pt-70 md-pb-70"> 
                <div class="container"> 
                <div class="row">

                   <div class="col-lg-9 md-pr-15">
                   @if(Session::has('message'))
                   <div class="alert alert-success" style="text-align: center; margin-top: 0;">
                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                  <strong>Success !</strong>{{ Session::get('message') }}
                </div>
                    
                   @endif
               
                  @php $item=$teachers @endphp    
                    @php
                          $user_details = App\UserDetail::where('user_id', $item->id)->first();
                        @endphp             
                    <div class="row clearfix">
                        <!-- Image Section -->
                        <div class="image-column col-lg-4 md-mb-50">
                            <div class="inner-column mb-50 md-mb-0">
                                <div class="image">
                              @if( $user_details->profile_img!=null)
                              <img src="/uploads/teacher_document/{{$user_details->profile_img}}" class="t_img" alt="Best Teacher for {{$user_details->subject}} in {{$user_details->district}}">
                              @else
                              <img src="{{ URL::asset('images/profile.png') }}" alt="" class="t_img">
                              @endif
                                </div>
                                <div class="team-content text-center">
                                <h3>{{$item->name}}
                                 @if( $item->verification=='verified')
                                  <span class="ml-2">
                                    <i class="fa fa-check-circle-o" style="color:#3a7f79;"></i>
                                  </span>
                                @endif</h3>
                                    <small>(ID- {{$item->teacher_id}})</small>
                                    <div class="text">{{$user_details->qualification}}</div>
                                    <ul class="personal-info">
                                          @if(!empty(Auth::User()) && Auth::user()->user_type=='student')
                                            @php
                                                $teacher_number = App\ViewNumber::where('viewed_user_id', $item->id)->where('viewed_by_user', Auth::user()->id)->where('user_type', 'student')->first();
                                            @endphp
                                            @if($teacher_number != null)
                                                <div class="view">
                                                    <span><a href="+91 - {{$item->phone_number}}">+91 - {{$item->phone_number}}</a></span>
                                                </div>
                                            @else
                                                <div class="view">
                                                    <span data-toggle="modal" data-target="#Viewno">View No.</span>
                                                </div>
                                            @endif
                                        @endif
                                    </ul>
                                </div>
                            </div>
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
                                        <a href="/teacher_number_view/{{$item->id}}" type="button" class="btn btn-primary">Yes</a>
                                        <a href="#" type="button" class="btn btn-secondary" data-dismiss="modal" style="color:#fff;">Close</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Content Section -->
                        <div class="content-column col-lg-8 pl-40 pt-30 md-pl-10 md-pt-0">
                            <div class="inner-column">
                                <h2>{{$item->name}}</h2>
                                <h4>A Certified Teacher From Qalp Educare</h4>
                                <!-- Student List -->
                                    <div class="blog-meta">
                                          <ul class="check-square">
                                             <li>Class Mode: {{$user_details->class_mode}}</li>
                                             <li>Class/Cousre : {{$user_details->class}}</li>
                                             <li>Subject : {{$user_details->subject}}</li>
                                             <li>Language : {{$user_details->language}}</li>
                                             <li>Vaccination : {{$user_details->vaccination}}</li>
                                             <li>Experience : {{$user_details->experience}}</li>
                                             <li>Age : {{$user_details->age}}</li>
                                             <li>Qualification : {{$user_details->qualification}}</li>
                                             <li>Specilization : {{$user_details->specilization}}</li>
                                             <li>Preferred Area : {{$user_details->pincode}}</li>
                                             <li>City : {{$user_details->district}}</li>
                                             
                                          </ul>
                                    </div>
                                     <h5>Rating :
                                                @for($i=1;$i<=$item->rating;$i++)
                                                 <span class="fa fa-star checked"></span>
                                                @endfor
                                                 @for($j=$i;$j<=5;$j++)
                                                 <span class="fa fa-star"></span> 
                                                 @endfor
                                               </h5>
                            </div>
                        </div>
                    </div>
                    <div>
                         <h5>About Me</h5>
                                <p>{{$user_details->about}}</p>
                                <p>My name is {{$item->name}}, and i am {{$user_details->age}} years old. About my qualification - {{$user_details->qualification}}. I've been working as a tutor for my specialised subjects in {{$user_details->subject}} for the past {{$user_details->experience}} in the city of {{$user_details->district}}. And i am a positive person who has an enthusiastic outlook on life. I love my job and I get a great sense of achievement from seeing my students develop and grow as individuals. If I can have a positive impact on their future, i feel i am doing my job well.</p>
                    </div>
                  
                         @if (Auth::check() && Auth::user()->user_type=='student')
                          @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                <strong>Success!</strong> {{ $message }}
                                </div>
                                 @endif
                       <form action="{{route('store_review')}}" enctype="multipart/form-data" method="POST" class="form-horizontal">  
                       @csrf              
                            <div class="listing-widget-contact">
                            <div class="listing-contact-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="listing-widget-mail">
                                            <i class="flaticon-email"></i>
                                            <div class="content">
                                                <h3>Don’t Worry</h3>
                                                <span>Your email is safe with us.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 text-right">
                                        <div class="feedback">
                                            <h3>Rating</h3>
                                            <div class="rating">
                                                <input type="radio" name="rating" value="5" id="rating-1" required="">
                                                <label for="rating-1"></label>
                                                
                                                <input type="radio" name="rating" value="4" id="rating-2">
                                                <label for="rating-2"></label>
                                                
                                                <input type="radio" name="rating" value="3" id="rating-3">
                                                <label for="rating-3"></label>
                                                
                                                <input type="radio" name="rating" value="2" id="rating-4">
                                                <label for="rating-4"></label>
                                                
                                                <input type="radio" name="rating" value="1" id="rating-5">
                                                <label for="rating-5"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-form">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                               <textarea name="comment" class="form-control" id="comment" cols="30" rows="5" data-error="Write your Review" placeholder="Your Message"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                             <input type="hidden" name="tutor_id" value="{{$item->id}}">
                                            <button type="submit" name="submit" class="default-btn border-radius disabled" style="pointer-events: all; cursor: pointer;">
                                            Submit Review
                                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                
                            </div>
                        </div></form>
                        @endif
                </div>
                    <div class="col-lg-3 col-md-12">
                     <div class="widget-area">
                        <div class="recent-posts-widget mb-50">
                           <h3 class="widget-title">Recent Added Teacher</h3>
                           @foreach($teachs as $item)
                           <div class="show-featured ">
                               <div class="post-img">
                                   <a href="/home-tutor/{{$item->slug}}"><img src="{{ URL::asset('images/profile.png') }}" alt=""></a>
                               </div>
                               <div class="post-desc">
                                   <a href="/home-tutor/{{$item->slug}}">{{$item->name}}</a>
                                   <span class="date">
                                    <i class="fa fa-book"></i>
                                       {{$item->user_details->qualification}}
                                   </span>
                               </div>
                           </div> 
                           @endforeach
                       </div>
                     </div>
                  </div> 
            </div>
                </div>
            </section>

            
        </div> 
        <!-- Main content End --> 


<!-- End Model-->
                <!--- Start footer -->
       @include('frontend/include/footer')
      <!--- End Footer -->