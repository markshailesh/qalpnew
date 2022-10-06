
<html>

<head>
   <!-- meta tag -->
   <meta charset="utf-8">
   <title>Best home tuor in varanasi and Lucknow</title>
   <meta name="description" content="Best and Professional home tutor in Varanasi for math and science subjects for students in class 9th, 10th, 11th, and 12th">
   <!-- responsive tag -->
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--Header Start-->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   @include('frontend/include/header')
   <!--Header End-->
   
   <!-- Main content Start -->
   <div class="main-content">
      <!-- Breadcrumbs Start -->
      <div class="rs-breadcrumbs breadcrumbs-overlay">
         <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Profile</h1>
            <ul>
               <li> <a class="active" href="/">Home</a> </li>
               <li>Profile</li>
            </ul>
         </div>
      </div>
      <!-- Breadcrumbs End -->
      <!-- Contact Section Start -->
      <section class="py-5">
         <div class="container">
            <div class="d-flex align-items-start">
                     <!---- Tutor Details  ------>
                     <div role="tabpanel" class="tab-pane fade" id="teacher_details">
                        <div class="card">
                           <div class="card-header">
                              <div class="col">
                                 <h5 class="mb-md-0 h6">Teacher Details</h5>
                              </div>
                           </div>
                           <div class="card-body">
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
                     <div class="col-lg-12 md-pr-15">
                  @php $item=$tutor_details @endphp    
                        @php
                          $user_details = App\UserDetail::where('user_id', $item->id)->first();
                        @endphp             
                    <div class="row clearfix">
                        <!-- Image Section -->
                        <div class="image-column col-lg-4 md-mb-50">
                            <div class="inner-column mb-50 md-mb-0">
                                <div class="image">
                              @if( $user_details->profile_img!=null)
                              <img src="/uploads/teacher_document/{{$user_details->profile_img}}" class="t_img text-center">
                              @else
                              <img src="{{ URL::asset('images/profile.png') }}" alt="">
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
                                    <div class="text">({{$user_details->qualification}})</div>
                                    <ul class="personal-info">
                                        @php
                                            $teacher_number = App\ViewNumber::where('viewed_user_id', $item->id)->where('viewed_by_user', Auth::user()->id)->where('user_type', 'student')->first();
                                        @endphp
                                        @if($teacher_number != null)
                                            <div class="view">
                                                <span><a href="tel:+91 - {{$item->phone_number}}"> +91 - {{$item->phone_number}}</a></span>
                                            </div>
                                        @else
                                            <div class="view">
                                                <span data-toggle="modal" data-target="#Viewno">View No.</span>
                                            </div>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>                      
                        <!-- Content Section -->
                        <div class="content-column col-lg-8 pl-40 pt-30 md-pl-10 md-pt-0">
                            <div class="inner-column">
                                <h2>{{$item->name}}</h2>
                                <!-- Student List -->
                                    <div class="blog-meta">
                                          <ul class="check-square">
                                             <li>Class Mode: {{$user_details->class_mode}}</li>
                                             <li>Classes: {{$user_details->class}}</li>
                                             <li>Subject: {{$user_details->subject}}</li>
                                             <li>Experience : {{$user_details->experience}}</li>
                                             <li>Age : {{$user_details->age}}</li>
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
                    </div>

                          @if (Auth::check())
                       <form action="{{route('store_review')}}" enctype="multipart/form-data" method="POST" class="form-horizontal">     @csrf             
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
                                            <button type="submit" name="submit" class="default-btn border-radius" style="pointer-events: all; cursor: pointer;">
                                            Submit Review
                                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                           </button>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                     </form>
                     @endif
                </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
  
      <div class="modal fade" id="Viewno" role="dialog">
      <div class="modal-dialog modal-sm">
         <div class="modal-content">
            <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLongTitle">Are You Sure?</h5>
               <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
<!--            <div class="modal-body">
             <p>Confirmation</p>
                           </div>-->
                           <div class="modal-footer">
                             <a href="/teacher_number_view/{{$item->id}}" type="button" class="btn btn-primary">Yes</a>
                             <a href="#" type="button" class="btn btn-secondary" data-dismiss="modal" style="color:#fff;">Close</a>
                    </div>
                        </div>
                     </div>
                  </div>
      <!--- Start footer -->
        
       
       @include('frontend/include/footer')
      <!--- End Footer -->
      <script>
            /*var success ="{{$success}}";
            if(success){
                
                alert(success);
            }
            var danger =" <?php echo Session::get('danger'); ?>";
            if(success != null){
                $.growl.active({
                    title: "Success",
                    message: "Number View"
                });
            }
            if(danger != null){
                $.growl.inactive({
                    title: "Error",
                    message: "Low Amount , Please Recharge Your Wallet."
                });
            }*/
        </script>