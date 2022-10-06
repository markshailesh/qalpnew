<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Get home tutor job in Varanasi & Lucknow | Qalp educare</title>
    <meta name="description"
        content="Register and get home tuitions job for free in varanasi & Lucknow, Learn Earn Opportunities for home tutors while Studying We provide Home Tutor for the bright future for child and Students Get One to One Learning at their Home">
    <meta name="keywords"
        content="Tuition bureau in Varanasi, Best tuition bureau in Varanasi, Home tutor job in varanasi, Professional tutor in Varanasi, Home tutor in varanasi, Home tutor job in Lucknow.">
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
                        <a class="active" href="index">Home</a>
                    </li>
                    <li>Register</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Register Section -->
        <section class="rs-login pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/qalp-teacher-registration.png">
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
                                    <form method="post" action="{{ route('teacher_registration') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12">
                                                <!-- Form Group -->
                                                <div class="form-group floating-label mb-25">
                                                    <input type="text" name="name" value=""
                                                        placeholder="Full Name" required>
                                                    <label for="text-placeholder">Name *</label>
                                                </div>

                                                <div class="form-group floating-label mb-25">
                                                    <input type="email" id="email" name="email" value=""
                                                        placeholder="Email address" required>
                                                    <label for="text-placeholder">Email *</label>
                                                </div>
                                                <span id="email_error" style="color:red;display:none"></span>
                                                <!-- Form Group -->
                                                <div class="form-group floating-label mb-25">
                                                    <input type="password" id="password" name="password"
                                                        placeholder="Password" required>
                                                    <label for="text-placeholder">Password *</label>
                                                </div>
                                                <!-- Form Group -->
                                                <div class="form-group floating-label mb-25">
                                                    <input type="text" id="phone" name="phone_number"
                                                        value="" placeholder="Mobile No." required>
                                                    <label for="text-placeholder">Phone *</label>
                                                </div>
                                                <span id="phone_error" style="color:red;display:none"></span>
                                                <!-- Form Group -->
                                                <div class="form-group floating-label mb-25">
                                                    <input type="number" id="otp" name="otp"
                                                        placeholder="Enter OTP" required style="display: none;">
                                                </div>
                                                <div class="form-group floating-label mb-25"></div>
                                                <div class="text-center">
                                                    <small>NOTE : After Sign up, Please update your Profile and get
                                                        Verified.</small>
                                                </div>

                                                <div class="form-group text-center">
                                                    <button type="submit" class="readon submit-btn">Sign Up</button>
                                                </div>

                                                <div class="form-group col-sm-12">
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
                                <h4 class="title"><a href="#">Create free Profile</a></h4>
                                <p class="desc">Signup As A Tutor, update your profile, input basic details, Upload
                                    Photo, Qualification Certificate and Identity Proof. Write your Bio & Achievement.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="service-item">
                            <div class="content-part">
                                <span class="icon-part"><i class="flaticon-document"></i></span>
                                <h4 class="title"><a href="#">Get Student Enquries</a></h4>
                                <p class="desc">Get verified, filter enquries as per your need and requirements.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 md-mb-30">
                        <div class="service-item">
                            <div class="content-part">
                                <span class="icon-part"><i class="flaticon-analysis"></i></span>
                                <h4 class="title"><a href="#">Leads management</a></h4>
                                <p class="desc">Mange notification button, get notified of enquiries on your mobile
                                    in text messages.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="service-item">
                            <div class="content-part">
                                <span class="icon-part"><i class="flaticon-tax"></i></span>
                                <h4 class="title"><a href="#">Earn Good Income</a></h4>
                                <p class="desc">Rank Higher by inviting your students to write review for you, Earn
                                    handsome income by connecting with students.</p>
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
