<!DOCTYPE html>
<html lang="zxx">
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
       <title>Apply For Jobs | Best Home Tutors in India | QALP EDU</title>
       <meta name="description" content="Professional Home Tutors, Now in your city. Find Tutors Online by checking, Reviews, Ratings, Fee Details and choose from the best Tuition Classes , Trainers matching your requirements">
       <meta name="keyword" content="Qalp Edu is a Tutor providing company in india offering home tuitions for 9th, 10th, 11th, 12th, IIT, NEET, physics, math, science, english,  yoga, music and many more. Hire now! , best home tutors in varanasi, lucknow, prayagraj, noida, gorakhpur in india.">
        <meta name="description" content="">
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
              <h1 class="page-title">Apply For Jobs</h1>
              <ul>
                <li>
                  <a class="active" href="index">Home</a>
                </li>
                <li>Apply For Jobs</li>
              </ul>
          </div>
      </div>
      <!-- Breadcrumbs End -->             

    		<!-- Contact Section Start -->
    		<div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
            	<div class="container">
                   <div class="rs-quick-contact">
                      @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                        <strong>Success!</strong> {{ $message }}
                        </div>
                        @endif
                        <form method="post" action="{{route('job_post.store')}}">
                             @csrf  
                           

                            <blockquote><h3>Personal Information:</h3></blockquote>
                            <div class="row">
                                <div class="col-lg-3 mb-20 col-md-12">
                                   <label class="dd">Name <sup>*</sup> :</label>
                                </div> 
                                <div class="col-lg-9 mb-20 col-md-12">
                                      <input class="from-control" type="text" name="name" placeholder="Name" required="">
                                    </div> 
                            </div>
                            <div class="row">
                                <div class="col-lg-3 mb-20 col-md-12">
                                   <label class="dd">Father Name <sup>*</sup> :</label>
                                </div> 
                                <div class="col-lg-9 mb-20 col-md-12">
                                      <input class="from-control" type="text" name="f_name" placeholder="Father Name" required="">
                                    </div> 
                            </div>
                              <div class="row">
                                 <div class="col-lg-3 mb-20 col-md-12">
                                   <label class="dd">Date Of Birth <sup>*</sup> :</label>
                                </div>
                                <div class="col-lg-9 mb-20 col-md-12">
                                    <input class="from-control" type="date" name="dob" required="">
                                </div>  
                             </div> 
                             <div class="row">
                                <label class="col-lg-3 mb-20 col-md-12 dd">Address</label>
                                <div class="col-md-3 mb-20 col-xs-6">
                                  <input type="text" class="from-control" placeholder="Country" name="country" value="">
                              </div>
                              <div class="col-md-3 mb-20 col-xs-6">
                                  <input type="text" class="from-control" placeholder="State" name="state" value="">
                              </div>
                              <div class="col-md-3 mb-20">
                                  <input type="text" class="from-control" placeholder="City" name="city" value="">
                              </div>
                          </div>
                          <div class="row">
                              <label class="col-lg-3 mb-20 col-md-12"></label>
                              <div class="col-md-4 mb-20">
                                  <input type="text" class="from-control" placeholder="Pin Code" name="area_pin" value="">
                              </div>
                              <div class="col-md-5 mb-20">
                                  <input type="text" class="from-control" placeholder="Full Address" name="address" value="">
                              </div>
                          </div>


                           

                            <blockquote><h3>Qualification:</h3></blockquote>
                            <div class="row">
                                <div class="col-lg-3 mb-20 col-md-12">
                                   <label class="dd">High School <sup>*</sup> :</label>
                                </div> 
                                <div class="col-lg-3 mb-20 col-md-12">
                                      <input class="from-control" type="text" name="h_college" placeholder="College" required="">
                                    </div> 
                                <div class="col-lg-3 mb-20 col-md-12">
                                      <input class="from-control" type="text" name="h_year" placeholder="Year" required="">
                                    </div>
                                <div class="col-lg-3 mb-20 col-md-12">
                                      <input class="from-control" type="text" name="h_percentage" placeholder="Percentage" required="">
                                    </div>
                            </div>
                             <div class="row">
                                <div class="col-lg-3 mb-20 col-md-12">
                                   <label class="dd">Inter <sup>*</sup> :</label>
                                </div> 
                                <div class="col-lg-3 mb-20 col-md-12">
                                      <input class="from-control" type="text" name="i_college" placeholder="College" required="">
                                    </div> 
                                <div class="col-lg-3 mb-20 col-md-12">
                                      <input class="from-control" type="text" name="i_year" placeholder="Year" required="">
                                    </div>
                                <div class="col-lg-3 mb-20 col-md-12">
                                      <input class="from-control" type="text" name="i_percentage" placeholder="Percentage" required="">
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 mb-20 col-md-12">
                                   <label class="dd">Graduation :</label>
                                </div> 
                                <div class="col-lg-3 mb-20 col-md-12">
                                      <input class="from-control" type="text" name="g_college" placeholder="College">
                                    </div> 
                                <div class="col-lg-3 mb-20 col-md-12">
                                      <input class="from-control" type="text" name="g_year" placeholder="Year">
                                    </div>
                                <div class="col-lg-3 mb-20 col-md-12">
                                      <input class="from-control" type="text" name="g_percentage" placeholder="Percentage">
                                    </div>
                            </div> 
                            <div class="row">
                                <div class="col-lg-3 mb-20 col-md-12">
                                   <label class="dd">Post Graduation :</label>
                                </div> 
                                <div class="col-lg-3 mb-20 col-md-12">
                                      <input class="from-control" type="text" name="pg_college" placeholder="College">
                                    </div> 
                                <div class="col-lg-3 mb-20 col-md-12">
                                      <input class="from-control" type="text" name="pg_year" placeholder="Year">
                                    </div>
                                <div class="col-lg-3 mb-20 col-md-12">
                                      <input class="from-control" type="text" name="pg_percentage" placeholder="Percentage">
                                    </div>
                            </div>
                              
                              <blockquote><h3>Additional Course Information:</h3></blockquote>
                            
                            <div class="row">
                                <div class="col-lg-3 mb-20 col-md-12">
                                   <label class="dd">Degree / Qualification :</label>
                                </div> 
                                <div class="col-lg-9 mb-20 col-md-12">
                                      <input class="from-control" type="text" name="degree_name" placeholder="Degree / Qualification">
                                    </div> 
                            </div>
                             <div class="row">
                                 <div class="col-lg-3 mb-20 col-md-12">
                                   <label class="dd">Qualification Description :</label>
                                </div>
                                <div class="col-lg-9 mb-20 col-md-12">
                                    <input class="from-control" type="text" name="degree_desc" placeholder="Qualification Description" required="">
                                </div>  
                             </div> 
                             <div class="row">
                                 <div class="col-lg-3 mb-20 col-md-12">
                                   <label class="dd">Higher Degree Year <sup>*</sup> :</label>
                                </div>
                                <div class="col-lg-9 mb-20 col-md-12">
                                    <input class="from-control" type="text" name="higher_degree" placeholder="Higher Degree Year" required="">
                                </div>  
                             </div> 
                            <div class="row">
                                 <div class="col-lg-3 mb-20 col-md-12">
                                   <label class="dd">Experience <sup>*</sup> :</label>
                                </div>
                                <div class="col-lg-9 mb-20 col-md-12">
                                    <input class="from-control" type="text" name="experience" placeholder="Experience" required="">
                                </div>  
                             </div> 
                             
                        <blockquote><h3>Email Verification:</h3></blockquote>
                            <div class="row">
                                <div class="col-lg-3 mb-20 col-md-12">
                                   <label class="dd">Email <sup>*</sup> :</label>
                                </div> 
                                <div class="col-lg-9 mb-20 col-md-12">
                                      <input class="from-control" id="email" type="text" name="email" placeholder="Email" required="">
                                      <span id="email_error"></span>
                                    </div> 
                            </div>
                             <div class="row">
                                 <div class="col-lg-3 mb-20 col-md-12">
                                   <label class="dd">Phone <sup>*</sup> :</label>
                                </div>
                                <div class="col-lg-9 mb-20 col-md-12">
                                    <input class="from-control" id="phone" type="text" name="phone" placeholder="Phone" required="">
                                    <span id="phone_error"></span>
                                </div>  
                             </div> 
                              
                               <div class="row" style="display: none;" id="otp">
                                <div class="col-lg-3 mb-20 col-md-12">
                                   <label class="dd">OTP <sup>*</sup> :</label>
                                </div> 
                                <div class="col-lg-9 mb-20 col-md-12">
                                      <input class="from-control" type="text" name="otp" placeholder="OTP is Sent to Your Mobile , Please Verify :" required="">
                                    </div> 
                            </div> 
                               <div class="form-group mb-0">
                                        <input class="btn-send" type="submit" name="submit" value="Submit Now">
                                        <p class="desc text-center">By signing up, you agree to our <a href="{{ URL::asset('term_and_condition') }}">Terms Of Use </a>  and <a href="{{ URL::asset('privacy_policy') }}">Privacy Policy</a>.</p>
                                    </div>
                            </div>    
                        </form>
                   </div> 
            	</div>
            </div>
            <!-- Contact Section End -->  
        </div> 
        <!-- Main content End --> 

            <!--- Start footer -->
       @include('frontend/include/footer')
      <!--- End Footer -->

        <script type="text/javascript">
           $("#phone").keyup(function(){
         var phone=$('#phone').val();
            var result = false;
            $.ajax({
                type:"POST",
                async: false,
                dataType: 'json',
                url:  '/send_otp', // script to validate in server side
                data: {
                  _token: '{{ csrf_token() }}',
                  phone: phone
               },
                success: function(response) {
                  console.log(response);
                    result = (response.status == true) ? true : false;
                    if(response.status==true){
                        $('#otp').show();
                          $('#phone_error').html(null);
                           return true;
                    }
                     /* if(response.status==false){
                       $('#phone_error').html('Number Already Exits');
                        return false;
                    }*/
                }
            });
            // return true if username is exist in database
        });
     </script>