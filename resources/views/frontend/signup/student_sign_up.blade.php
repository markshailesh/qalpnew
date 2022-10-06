<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Register as a student at best tuition bureau | qalpedu</title>
    <meta name="description"
        content="We provide Home Tutors for the bright future of the Students Get One to One Learning at their Home Teachers Earn and Learn while Studying We qalp educare is the best and professional home tutor in Varanasi & Lucknow at reasonable fees! Home Tuitions">
    <meta name="keywords"
        content="Tuition bureau in Lucknow, Best tuition bureau in Varanasi, Ladies tutor near me, Professional tutor in Varanasi, Home tutor in varanasi, tuition in vns.">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Header Start-->
    @include('frontend/include/header')
    <!--Header End-->
    <style>
        span{
        text-align: left;
        color: green;
        display: block;
        margin-top: -28px;
        margin-bottom: 5px;
        }
    </style>
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Create an Account</h1>
                <ul>
                    <li>
                        <a class="active" href="/">Home</a>
                    </li>
                    <li>Register</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Register Section -->
        <section class="rs-login pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/qalp-student-registration.png">
                    </div>
                    <div class="col-md-6">
                        <!-- Login Form -->
                        <div class="noticed">
                            <div class="main-part">
                                <div class="method-account">
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-danger">
                                            <strong>Error ! </strong> {{ $message }}
                                        </div>
                                    @endif
                                    <form method="post" action="{{ route('student_registration') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row clearfix">
                                            <!-- Form Group -->
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group floating-label mb-25">
                                                    <input type="text" name="name" value=""
                                                        placeholder="Full Name" required>
                                                    <label for="text-placeholder">Name *</label>
                                                </div>

                                                <!-- Form Group -->
                                                <div class="form-group floating-label mb-25">
                                                    <input type="email" id="email" name="email" value=""
                                                        placeholder="Email Address" required>
                                                    <label for="text-placeholder">Email *</label>
                                                </div>
                                                <span id="email_error" style="color:red;display:none"></span>
                                                <!-- Form Group -->
                                                <div class="form-group floating-label">
                                                    <input type="password" id="password" name="password"
                                                        placeholder="Password" required>
                                                    <label for="text-placeholder">Password *</label>
                                                </div>
                                                <!-- Form Group -->
                                                <div class="form-group floating-label">
                                                    <input type="text" id="phone" name="phone_number"
                                                        placeholder=" Mobile No." required>
                                                    <label for="text-placeholder">Phone *</label>
                                                </div>
                                                <span id="phone_error" style="color:red;display:none"></span>
                                                <!-- Form Group -->
                                                <div class="form-group floating-label">
                                                    <input type="number" id="otp" name="otp"
                                                        placeholder="Enter OTP" required style="display: none;">
                                                </div>

                                                <div class="form-group"></div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                    <small>NOTE : After Sign up, Please update your Profile and get
                                                        Verified.</small>
                                                </div>
                                                <div class="form-group text-center">
                                                    <button type="submit" class="readon submit-btn">Sign Up</button>
                                                </div>

                                                <div class="form-group">
                                                    <div class="users">By signing up, you agree to our <a
                                                            href="{{ URL::asset('term_and_condition') }}">Terms Of Use
                                                        </a> and <a href="{{ URL::asset('privacy_policy') }}">Privacy
                                                            Policy</a>.</div>
                                                    <div class="users">Already have an account? <a
                                                            href="{{ URL::asset('sign_in') }}">Sign In</a></div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Login Section -->
        <div class="rs-services style2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 md-mb-30">
                        <div class="service-item">
                            <div class="content-part">
                                <span class="icon-part"><i class="flaticon-analysis"></i></span>
                                <h4 class="title"><a href="#">Register Free</a></h4>
                                <p class="desc">Signup as a student, update your profile, input basic
                                    details,class/course, address and upload photo. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="service-item">
                            <div class="content-part">
                                <span class="icon-part"><i class="flaticon-document"></i></span>
                                <h4 class="title"><a href="#">Find Tutors</a></h4>
                                <p class="desc">Filter tutors as for your need for online and offline classes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="service-item">
                            <div class="content-part">
                                <span class="icon-part"><i class="flaticon-tax"></i></span>
                                <h4 class="title"><a href="#">Book Free Demo</a></h4>
                                <p class="desc">Activate suitable plan, call your selected tutors and book free demo.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="service-item">
                            <div class="content-part">
                                <span class="icon-part"><i class="flaticon-analysis"></i></span>
                                <h4 class="title"><a href="#">Grow Your Knowledge</a></h4>
                                <p class="desc">Start online or offline classes with your selected best tutors. write
                                    review and help them in ranking higher.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>

    </div>
    <!-- Main content End -->
    <!--- Start footer -->
    @include('frontend/include/footer')
    <!--- End Footer -->

    <script type="text/javascript">
        $("#phone").keyup(function() {
            var phone = $('#phone').val();
            var result = false;
            $.ajax({
                type: "POST",
                async: false,
                dataType: 'json',
                url: '/qalp/otp_message', // script to validate in server side
                data: {
                    _token: '{{ csrf_token() }}',
                    phone: phone
                },
                success: function(response) {
                    console.log(response);
                    result = (response.status == true) ? true : false;
                    if (response.status == true) {
                        $('#otp').show();
                        $('#phone_error').html(null);
                        return true;
                    }
                    if (response.status == false) {
                        $('#phone_error').css('display','block');
                        $('#phone_error').html('Number Already Exits');
                        return false;
                    }
                }
            });
            // return true if username is exist in database
        });


        $("#email").keyup(function() {
            var value = $('#email').val();
            $.ajax({
                type: "POST",
                async: false,
                dataType: 'json',
                url: '/qalp/check_email', // script to validate in server side
                data: {
                    _token: '{{ csrf_token() }}',
                    email: value
                },
                success: function(response) {
                    console.log(response);
                    result = (response.status == true) ? true : false;
                    if (response.status == true) {
                        $('#email_error').html(null);
                        return true;
                    }
                    if (response.status == false) {
                        $('#email_error').css('display','block');
                        $('#email_error').html('Email Already Exits');
                        return false;
                    }
                }
            });

        });
    </script>
