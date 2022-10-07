<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Best home tuition bureau in Varanasi & Lucknow - QALP EDU</title>
    <meta name="description"
        content="Find best home tuition bureau in Varanasi and Lucknow. We provide best home tuition service to students at reasonable fee. choose the best tutor by their rating, review & fee detail">
    <meta name="keywords"
        content="Best tuition bureau in Lucknow, Best tuition bureau in Varanasi, Best tuition in Varanasi, Best tuition in Lucknow, Best home tuition in Varanasi and Lucknow.">
    <link rel="canonical" href="http://www.qalpedu.com/" />
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/multi-form.css') }}">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/multi-form.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <script type="text/javascript">
        $(document).ready(function() {
            $.validator.addMethod('date', function(value, element, param) {
                return (value != 0) && (value <= 31) && (value == parseInt(value, 10));
            }, 'Please enter a valid date!');
            $.validator.addMethod('month', function(value, element, param) {
                return (value != 0) && (value <= 12) && (value == parseInt(value, 10));
            }, 'Please enter a valid month!');
            $.validator.addMethod('year', function(value, element, param) {
                return (value != 0) && (value >= 1900) && (value == parseInt(value, 10));
            }, 'Please enter a valid year not less than 1900!');
            $.validator.addMethod('username', function(value, element, param) {
                var nameRegex = /^[a-zA-Z0-9]+$/;
                return value.match(nameRegex);
            }, 'Only a-z, A-Z, 0-9 characters are allowed');
            $.validator.addMethod("checkPhone",
                function(value, element) {
                    var result = false;
                    $.ajax({
                        type: "POST",
                        async: false,
                        dataType: 'json',
                        url: '/qalp/otp_message', // script to validate in server side
                        data: {
                            _token: '{{ csrf_token() }}',
                            phone: value
                        },
                        success: function(response) {
                            console.log(response);
                            result = (response.status == true) ? true : false;
                            if (response.status == true) {
                                // $('#product_slug').val(response.data);
                            }
                        }
                    });
                    // return true if username is exist in database
                    return result;
                },
                "This phone is already taken! Try another."
            );

            $.validator.addMethod("checkOtp",
                function(value, element) {
                    var result = false;
                    $.ajax({
                        type: "POST",
                        async: false,
                        dataType: 'json',
                        url: '/qalp/check_otp', // script to validate in server side
                        data: {
                            _token: '{{ csrf_token() }}',
                            otp: value
                        },
                        success: function(response) {
                            console.log(response);
                            result = (response.status == true) ? true : false;
                            if (response.status == true) {
                                // $('#product_slug').val(response.data);
                            }
                        }
                    });
                    // return true if username is exist in database
                    return result;
                },
                "Enter Otp is wrong."
            );


            $.validator.addMethod("checkEmail",
                function(value, element) {
                    var result = false;
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
                                // $('#product_slug').val(response.data);
                            }
                        }
                    });
                    // return true if username is exist in database
                    return result;
                },
                "Enter Email is already taken."
            );
            var val = {
                // Specify validation rules
                rules: {
                    name: "required",
                    class: {
                        required: true,
                    },
                    subject: {
                        required: true,
                    },
                    language: {
                        required: true,
                    },
                    phone_number: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                        digits: true,
                        checkPhone: true
                    },
                    otp: {
                        required: true,
                        checkOtp: true

                    },
                    username: {
                        username: true,
                        required: true,
                        minlength: 4,
                        maxlength: 16,
                    },
                    email: {
                        required: true,
                    },
                },
                // Specify validation error messages
                messages: {
                    name: "Name is required",
                    class: {
                        required: "Enter your class",
                    },
                    subject: {
                        required: "Enter your subject",
                    },
                    language: {
                        required: "Enter your language",
                    },
                    email: {
                        required: "Email is required",
                        email: "Please enter a valid e-mail",

                    },
                    phone_number: {
                        required: "Phone number is requied",
                        minlength: "Please enter 10 digit mobile number",
                        maxlength: "Please enter 10 digit mobile number",
                        digits: "Only numbers are allowed in this field"
                    }
                }
            }
            $("#myForm").multiStepForm({
                // defaultStep:0,
                beforeSubmit: function(form, submit) {
                    console.log("called before submiting the form");
                    console.log(form);
                    console.log(submit);
                },
                validations: val,
            }).navigateTo(0);
        });
    </script>
</head>
<!--Header Start-->
@include('frontend/include/header')
<!--Header End-->
<!-- Main content Start -->
<div class="main-content">
    <!--Full width header End-->
    <!-- Slider Section Start -->
    <div class="rs-slider main-home">
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true"
            data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
            data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
            data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1"
            data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1"
            data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true"
            data-md-device-dots="false">
            @foreach ($slider as $item)
                <div class="slider-content slide1"
                    style="background: url({{ URL::asset('public/uploads/slider/' . $item->image) }}); background-size: cover; background-position: center; background-repeat: no-repeat; height: 650px;">
                </div>
            @endforeach
        </div>
        <!-- Features Section start -->
        <div id="rs-features" class="rs-features main-home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 md-mb-10 col-xs-6">
                        <div class="features-wrap">
                            <div class="icon-part">
                                <img src="images/features/style2/1.png"
                                    alt="Take free demo classes from professional teachers">
                            </div>
                            <div class="content-part">
                                <h4 class="title">
                                    <span class="watermark"><a href="#post_requirements"> Free Demo </a></span>
                                </h4>
                                <p class="dese">
                                    Don't wait just try once & Affordable fee & time-saving
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 md-mb-10 col-xs-6">
                        <div class="features-wrap">
                            <div class="icon-part">
                                <img src="images/features/style2/3.png"
                                    alt="Learn with verified and professional tutors">
                            </div>
                            <div class="content-part">
                                <h4 class="title">
                                    <span class="watermark"><a href="best-and-professional-home-tutor">Verified Tutors
                                        </a></span>
                                </h4>
                                <p class="dese">
                                    Get only verified & registered tutor with real experiences.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12  md-mb-10 col-xs-6">
                        <div class="features-wrap">
                            <div class="icon-part">
                                <img src="images/features/style2/2.png" alt="Registered and verifeid tutor in varanasi">
                            </div>
                            <div class="content-part">
                                <h4 class="title">
                                    <span class="watermark"><a href="best-and-professional-home-tutor">Registered
                                            Tutors</a></span>
                                </h4>
                                <p class="dese">
                                    Feel free to communicate to our teachers call now.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 md-mb-10 col-xs-6">
                        <div class="features-wrap">
                            <div class="icon-part">
                                <img src="images/features/style2/4.png" alt="Home tutor job">
                            </div>
                            <div class="content-part">
                                <h4 class="title">
                                    <span class="watermark"><a href="teacher_sign_up">Join as a Tutor</a></span>
                                </h4>
                                <p class="dese">
                                    Hiring a perfect teacher with us and celebrating the power of knowledge.<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Section End -->

        <div class="rs-categories style2 pt-10 d_hide">
            <!-- Cta Section Start -->
            <div class="rs-cta home-style14">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="content-part">
                            <img src="{{ URL::asset('images/personal-assistant.png') }}" class="wd">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content-part">
                            <span class="sub-text">Join With Us</span>
                            <h2 class="title">Looking for Home Tutors, Call Now!</h2>
                            <p style="margin: 0 0 5px;">Varanasi, Lucknow, Prayagraj & Kanpur. </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="btn-part text-right">
                            <a class="readon2 cta-btn" data-toggle="modal" data-target="#call_us" href="#"><i
                                    class="flaticon-call"></i> CALL US</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cta Section End -->
        </div>
    </div>
    <!-- Slider Section End -->
    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us pt-101 md-pt-25 md-pb-25" id="post_requirements">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="sec-title3 dd">
                        <h2 class="title mb-10 ">Post your learning needs</h2>
                        <p>Join Live and Interactive Online and Offline Classes with the best Tutors,
                            Book now a Free Demo Class with us.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="sec-title3 dd">
                        <h2 class="title mb-10 ">Our Latest Requirement</h2>
                        <p>Join as a tutor for free, connect with students and schedule a free demo now. Show your
                            expertise, conduct online and offline classes.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 lg-pr-0 md-mb-50">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <strong>Success ! </strong> {{ $message }}
                        </div>
                    @endif
                    <div class="sec-title3 d_hide">
                        <h2 class="title mb-10">Post Your Learning Needs</h2>
                        <p>Join Live and Interactive Online and Offline Classes with the best Tutors,
                            Book now a Free Demo Class with us.
                        </p>
                    </div>
                    <div class="cards mb-3">
                        <form id="myForm" action="{{ route('other_reg') }}" method="POST">
                            @csrf
                            <!-- One "tab" for each step in the form: -->
                            <ul id="progressbar">
                                <li class="active"><span class="step">Course</span></li>
                                <li><span class="step">Personal</span></li>
                                <li><span class="step">Email</span></li>
                                <li><span class="step">OTP</span></li>
                            </ul>
                            <input type="hidden" name="user_id"
                                value="@if (!empty(Auth::user()->id)) {{ Auth::user()->id }} @endif">
                            <div class="tab">
                                <h2 class="fs-title">Course Information:</h2>
                                <div class="row">
                                    <div class="col-lg-6 mb-20 col-md-12">
                                        <select class="form-select selct" aria-label="Default select example"
                                            name="class_mode" required="">
                                            <option value="" selected disabled>Select Mode</option>
                                            <option value="Online">Online </option>
                                            <option value="Offline">Offline</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 mb-20 col-md-12">
                                        <select class="form-select selct" aria-label="Default select example"
                                            name="board" required="">
                                            <option value="" selected disabled>Select Board</option>
                                            <option value="UP">UP</option>
                                            <option value="CBSE">CBSE</option>
                                            <option value="ICSE">ICSE</option>
                                            <option value="BIHAR">BIHAR</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 mb-20 col-md-12">
                                        <select class="form-select selct" aria-label="Default select example"
                                            name="class" required="">
                                            <option value="" selected disabled>Select Class</option>
                                            @foreach (App\Course::where('status', 'enable')->get() as $class)
                                                <option value="{{ $class->name }}">{{ $class->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-lg-6 mb-30 col-md-12">
                                        <select data-style="bg-white" class=" w-100 select2"
                                            data-maximum-selection-length="3" data-live-search="true"
                                            name="subject[]" multiple required="">
                                            @foreach (App\Subject::where('status', 'enable')->get() as $subject)
                                                <option value="{{ $subject->name }}">{{ $subject->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6 mb-20 col-md-12">
                                        <select data-style="bg-white" class=" w-100 select2bs4"
                                            data-maximum-selection-length="3" data-live-search="true"
                                            name="language[]" multiple required="">
                                            @foreach (App\Language::where('status', 'enable')->get() as $language)
                                                <option value="{{ $language->name }}">{{ $language->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6 mb-20 col-md-12">
                                        <input class="from-control" type="text" name="massage"
                                            placeholder="Message">
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <h2 class="fs-title">Personal Information:</h2>
                                <div class="row">
                                    <div class="col-lg-6 mb-15 col-md-12">
                                        <input class="from-control" type="text" id="name" name="name"
                                            placeholder="Student Name" required="">
                                    </div>
                                    <div class="col-lg-6 mb-6 col-md-12">
                                        <select class="form-select selct" aria-label="Default select example"
                                            id="city" name="city" required="">
                                            <option value="">Select City</option>
                                            <option value="Azamgadh">Azamgadh</option>
                                            <option value="Gorakhpur">Gorakhpur</option>
                                            <option value="Jaunpur">Jaunpur</option>
                                            <option value="Jhanshi">Jhanshi</option>
                                            <option value="Lucknow">Lucknow</option>
                                            <option value="Merath">Merath</option>
                                            <option value="Mirzapur">Mirzapur</option>
                                            <option value="Mughalsarai">Mughalsarai</option>
                                            <option value="Noida">Noida</option>
                                            <option value="Patna">Patna</option>
                                            <option value="Prayagraj">Prayagraj</option>
                                            <option value="Varanasi">Varanasi </option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 mb-15 col-md-12">
                                        <input class="from-control" type="text" id="areapin" name="areapin"
                                            placeholder="Area Pin" required="">
                                    </div>
                                    <div class="col-lg-6 mb-15 col-md-12">
                                        <input class="from-control" type="text" id="area_location"
                                            name="area_location" placeholder="Area Location" required="">
                                    </div>
                                    <div class="col-lg-12 mb-15 col-md-12">
                                        <input class="from-control" type="text" id="fee_range" name="fee_range"
                                            placeholder="Choose Fee Range" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <h2 class="fs-title">Phone Verification :</h2>
                                <div class="row">
                                    <div class="col-lg-6 mb-15 col-md-12">
                                        <input class="from-control" type="text" id="email" name="email"
                                            placeholder="Email" required="">
                                    </div>
                                    <div class="col-lg-6 mb-15 col-md-12">
                                        <input class="from-control" type="text" id="phone"
                                            name="phone_number" placeholder="Phone" required="">
                                        <input type="hidden" name="password" value="123456789">
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <h2 class="fs-title">OTP is Sent to Mobile , Please Verify :</h2>
                                <div class="row">
                                    <div class="col-lg-12 mb-20 col-md-12">
                                        <input class="from-control" type="text" id="otp" name="otp"
                                            placeholder="otp" required="">
                                    </div>
                                </div>
                            </div>
                            <p class="desc">By signing up, you agree to our <a
                                    href="{{ URL::asset('term_and_condition') }}">Terms Of Use </a> and <a
                                    href="{{ URL::asset('privacy_policy') }}">Privacy Policy</a>.</p>


                            <button type="button" class="previous action-button">Previous</button>
                            <button type="button" class="next action-button">Next</button>
                            <button type="button" class="submit action-button">Submit</button>


                        </form>
                    </div>
                </div>
                <div class="col-lg-6 lg-pr-0 md-mb-50">
                    <!-- Events Section Start -->
                    <div class="rs-event home8-style1">
                        <div class="sec-title3 d_hide">
                            <h2 class="title mb-10">Our Latest Requirement</h2>
                            <p>Join as a tutor for free, connect with students and schedule a free demo now. Show your
                                expertise, conduct online and offline classes.
                            </p>
                        </div>
                        <div class="cardss">
                            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
                                data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000"
                                data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false"
                                data-center-mode="false" data-mobile-device="2" data-mobile-device-nav="false"
                                data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false"
                                data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false"
                                data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false"
                                data-md-device-dots="false">
                                @foreach ($student as $item)
                                    @php
                                        $user_details = App\UserDetail::where('user_id', $item->id)->first();
                                    @endphp

                                    <div class="content">
                                        <div class="col-md-12 jobpt">
                                            <h3 style="margin-bottom: 5px;"><a
                                                    href="student_details/{{ $item->id }}">
                                                    {{ $item->name }}</a></h3>
                                            <h4>{{ $user_details->class_mode }}</h4>
                                        </div>
                                        <div class="col-md-12 jobpt">
                                            <ul class="list-unstyled place">
                                                <li> <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                                    {{ $user_details->board }}</li>
                                                <li> <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                                    {{ $user_details->class }}</li>
                                                <li> <i class="fa fa-book" aria-hidden="true"></i>
                                                    {{ $user_details->subject }}</li>
                                                <li> <i class="fa fa-language" aria-hidden="true"></i>
                                                    {{ $user_details->language }}</li>
                                                <li> <i class="flaticon-location"></i> {{ $user_details->pincode }}
                                                </li>
                                                <li> <i class="flaticon-location"></i> {{ $user_details->city }}</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12 jobpt">
                                            <ul class="job">
                                                <li> <a href="student_details/{{ $item->id }}" class="read-more"
                                                        tabindex="0"> View Details <i
                                                            class="fa fa-angle-double-right"
                                                            aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="rs-categories style2 pt-10 dd">
                                <!-- Cta Section Start -->
                                <div class="rs-cta home-style14">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3">
                                            <div class="content-part">
                                                <img src="{{ URL::asset('images/personal-assistant.png') }}"
                                                    class="wd">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="content-part">
                                                <span class="sub-text">Join With Us</span>
                                                <h2 class="title">Looking for Home Tutors, Call Now!</h2>
                                                <p style="margin: 0 0 5px;">Varanasi, Lucknow, Prayagraj & Kanpur. </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="btn-part text-right">
                                                <a class="readon2 cta-btn" data-toggle="modal" data-target="#call_us"
                                                    href="#"><i class="flaticon-call"></i> CALL US</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cta Section End -->
                            </div>
                        </div>
                        <!-- Events Section End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Why Choose Us Section End -->

        <!-- Team Section Start -->
        <div id="rs-team" class="rs-team gray-bg home-style15 pt-100 md-pt-25">
            <div class="container">
                <div class="sec-title6 text-center mb-50 md-mb-30">
                    <span class="sub-title pb-10">Promising personalized guidance at every step</span>
                    <h2 class="title title2">Our Expert Tutors</h2>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30"
                    data-autoplay="true" data-autoplay-timeout="7000" data-smart-speed="2000" data-dots="true"
                    data-nav="false" data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="false"
                    data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false"
                    data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false"
                    data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="false"
                    data-md-device-dots="false">
                    @foreach ($tutor as $item)
                        @php
                            $user_details = App\UserDetail::where('user_id', $item->id)->first();
                        @endphp
                        <div class="team-item">
                            <div class="team-wrap">
                                <div class="team-img">
                                    <a href="home-tutor/{{ $item->slug }}">
                                        @if ($user_details->profile_img != null)
                                            <img src="uploads/teacher_document/{{ $user_details->profile_img }}"
                                                alt="{{ $item->name }} {{ $user_details->subject }} home tutor in {{ $user_details->district }}."
                                                class="pds">
                                        @else
                                            <img src="{{ URL::asset('images/profile.png') }}" class="pds">
                                        @endif
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h3 class="name"><a
                                            href="home-tutor/{{ $item->slug }}">{{ $item->name }}</a>
                                        @if ($item->verification == 'verified')
                                            <span class="ml-2">
                                                <i class="fa fa-check-circle-o" style="color:#3a7f79;"></i>
                                            </span>
                                        @endif
                                    </h3>
                                    <span class="subject">{{ $user_details->qualification }}</span>
                                    <div class="event-btm">
                                        <div class="date-part">
                                            <div class="date">
                                                <i class="fa fa-map-marker"></i>
                                                {{ $user_details->district }}
                                            </div>
                                        </div>
                                        <div class="btn-part">
                                            <a href="home-tutor/{{ $item->slug }}">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="btn-part">
                    <a href="best-and-professional-home-tutor" class="readon submit-btn">
                        VIEW MORE <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <!-- Team Section End -->


        <!-- Categors Section Start -->
        <div class="rs-categories style2 pb-100 pt-100">
            <div class="container">
                <div class="sec-title6 text-center mb-55 md-mb-25">
                    <span class="sub-title pb-10">Qalp Edu</span>
                    <h2 class="title title2">Our Expert Tutors. </h2>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="20"
                    data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                    data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false"
                    data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
                    data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="false"
                    data-ipad-device2="1" data-ipad-device-nav2="true" data-ipad-device-dots2="false"
                    data-md-device="4" data-md-device-nav="true" data-md-device-dots="false">
                    <div class="categories-items">
                        <div class="cate-item">
                            <div class="cate-img">
                                <img src="{{ URL::asset('images/3.png') }}" alt="">
                            </div>
                            <div class="cate-content">
                                <h3 class="title"><a href="#">REGISTER FOR FREE </a></h3>
                                <span class="course-qnty"> Register as a Tutor or Student, Fill your basic details &
                                    Update your profile, Get verified within 24 hrs. </span>
                            </div>
                        </div>
                    </div>
                    <div class="categories-items">
                        <div class="cate-item">
                            <div class="cate-img">
                                <img src="{{ URL::asset('images/3.png') }}" alt="">
                            </div>
                            <div class="cate-content">
                                <h3 class="title"><a href="#">ACTIVATE YOUR PLAN</a></h3>
                                <span class="course-qnty"> Login to your profile & Activate Your Premium or Diamond
                                    plan, Your Wallet will get active. </span>
                            </div>
                        </div>
                    </div>
                    <div class="categories-items">
                        <div class="cate-item">
                            <div class="cate-img">
                                <img src="{{ URL::asset('images/3.png') }}" alt="">
                            </div>
                            <div class="cate-content">
                                <h3 class="title"><a href="#">CONTACT STUDENTS OR TUTORS</a></h3>
                                <span class="course-qnty"> Now you candirectly contact Students & Tutors under your
                                    profile. Filter them as per your locality & Requirements. </span>
                            </div>
                        </div>
                    </div>
                    <div class="categories-items">
                        <div class="cate-item">
                            <div class="cate-img">
                                <img src="{{ URL::asset('images/3.png') }}" alt="">
                            </div>
                            <div class="cate-content">
                                <h3 class="title"><a href="#">LEADS UPDATE </a></h3>
                                <span class="course-qnty"> Get Notified of available tuitions or best tutors at your
                                    locality through message or whatsapp on your phone. </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Cta Section Start -->
        {{-- <div class="rs-cta effects-layer pb-100 pt-100 md-pb-25">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="effects-bg apply-bg">
                        <div class="content-part">
                           <h2 class="title">Looking for Home Tutors?</h2>
                           <div class="description mb-27">Looking to excel in a specific academic area and need a bit of one-on-one guidance from a reliable professional ! Register now and post your requirements.
                           </div>
                           <div class="btn-part">
                              <a class="readon2 cta-btn" href="student_sign_up">Register as a Student for Free </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="effects-bg enroll-bg">
                        <div class="content-part">
                           <h2 class="title">Looking for Tuition Jobs?</h2>
                           <div class="description mb-27">Love teaching ! Join now with Qalpedu for free. Find students as per as your suitability. show your expertise and become top tutor on Qalpedu.
                           </div>
                           <div class="btn-part">
                              <a class="readon2 cta-btn" href="teacher_sign_up">Register as a Tutor for Free </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> --}}
        <!-- Cta Section End -->

        <!-- Categories Section Start -->
        <div id="rs-popular-courses" class="rs-popular-courses main-home home12-style pb-100 pt-100 md-pb-25 gray-bg">
            <div class="container">
                <div class="sec-title6 text-center mb-50 md-mb-30">
                    <div class="sub-title">Get Free Demo Now !</div>
                    <h2 class="title title2">Our Experinced & Qualified Tutors</h2>
                </div>
                <div class="row">
                    @foreach (App\User::where('status', 'enable')->where('user_type', 'teacher')->inRandomOrder()->limit(12)->get() as $item)
                        @php
                            $user_details = App\UserDetail::where('user_id', $item->id)->first();
                        @endphp
                        <div class="col-lg-2 col-md-6 col-xs-6 mb-30">
                            <div class="courses-item">
                                <div class="courses-grid">
                                    <div class="img-part">
                                        <a href="home-tutor/{{ $item->slug }}">
                                            @if ($user_details->profile_img != null)
                                                <img src="uploads/teacher_document/{{ $user_details->profile_img }}"
                                                    alt="{{ $item->name }} {{ $user_details->subject }} home tutor in {{ $user_details->district }}."
                                                    class="pds ppd">
                                            @else
                                                <img src="{{ URL::asset('images/profile.png') }}" class="pds ppd">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="content-part">
                                        <h3 class="title"><a
                                                href="home-tutor/{{ $item->slug }}">{{ $item->name }}</a>
                                            @if ($item->verification == 'verified')
                                                <span class="ml-2">
                                                    <i class="fa fa-check-circle-o" style="color:#3a7f79;"></i>
                                                </span>
                                            @endif
                                        </h3>
                                        <ul class="meta-part">
                                            <li class="user">
                                                <i class="fa fa-map-marker"></i>
                                                {{ $user_details->district }}
                                            </li>
                                            <li class="user">
                                                <a href="home-tutor/{{ $item->slug }}"> More <i
                                                        class="flaticon-right-arrow"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="btn-part">
                    <a href="best-and-professional-home-tutor" class="readon submit-btn">
                        VIEW MORE <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <!-- Categories Section End -->
        <!-- Blog Section Start -->
        <div id="rs-blog" class="rs-blog style2  modify2 pb-100 pt-100 md-pb-25">
            <div class="container relative">
                <div class="right-top-shape">
                    <img src="images/radius-circle-shape.png" alt="Blog On Home Tutor">
                </div>
                <div class="sec-title6 text-center mb-50 md-mb-30">
                    <span class="sub-title pb-10">Qalp Educare</span>
                    <h2 class="title title2">Latest Blog Post</h2>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
                    data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                    data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
                    data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
                    data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false"
                    data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false"
                    data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                    @foreach ($blog as $item)
                        <div class="blog-item">
                            <div class="image-part">
                                <img src="uploads/blog/{{ $item->image }}" alt="{{ $item->title }}">
                            </div>
                            <div class="blog-content new-style2">
                                <h3 class="title"><a
                                        href="blog-details/{{ $item->slug }}">{{ $item->title }}</a></h3>
                                <div class="desc">{{ $item->short_description }}</div>
                                <ul class="blog-bottom">
                                    <li class="cmnt-part"><a href="#">By Admin</a></li>
                                    <li class="btn-part"><a class="readon-arrow"
                                            href="blog-details/{{ $item->slug }}">Read More</a></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Blog Section End -->
        <!-- Categories Section Start -->
        <div id="rs-categories" class="rs-categories style1 gray-bg pt-100 pb-100 md-pt-25 md-pb-25">
            <div class="container">
                <div class="sec-title6 text-center mb-50 md-mb-30">
                    <span class="sub-title pb-10">Qalp Educare</span>
                    <h2 class="title title2">Our Quality</h2>
                </div>

                @php
                    $total_techer = App\User::where('user_type', 'teacher')->count();
                @endphp
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-xs-6 mb-30 wow fadeInUp" data-wow-delay="400ms"
                        data-wow-duration="2000ms">
                        <a class="categories-item">
                            <div class="icon-part">
                                <img src="images/categories/icons/2.png" alt="Professional Tutors In Lucknow">
                            </div>
                            <div class="content-part">
                                <h4 class="title">Covering Cities</h4>

                                <span class="courses">12 Cities</span>

                            </div>
                        </a>
                    </div>
                    @php
                        $courses = App\Course::count();
                    @endphp
                    <div class="col-lg-4 col-md-6 col-xs-6 mb-30 wow fadeInUp" data-wow-delay="300ms"
                        data-wow-duration="2000ms">
                        <a class="categories-item">
                            <div class="icon-part">
                                <img src="images/categories/icons/1.png"
                                    alt="Courses Provided By Best And Professional Tutors In Varanasi">
                            </div>
                            <div class="content-part">
                                <h4 class="title">Class & Course</h4>
                                <span class="courses">{{ $courses }} Courses</span>
                            </div>
                        </a>
                    </div>
                    @php
                        $language = App\Language::count();
                    @endphp
                    <div class="col-lg-4 col-md-6 col-xs-6 mb-30 wow fadeInUp" data-wow-delay="500ms"
                        data-wow-duration="2000ms">
                        <a class="categories-item">
                            <div class="icon-part">
                                <img src="images/categories/icons/3.png" alt="Best Tutors For All Languages">
                            </div>
                            <div class="content-part">
                                <h4 class="title">Language</h4>
                                <span class="courses">{{ $language }} Language</span>
                            </div>
                        </a>
                    </div>
                    @php
                        $subject = App\Subject::count();
                    @endphp
                    <div class="col-lg-4 col-md-6 col-xs-6 mb-30 wow fadeInUp" data-wow-delay="300ms"
                        data-wow-duration="2000ms">
                        <a class="categories-item">
                            <div class="icon-part">
                                <img src="images/categories/icons/4.png" alt="Subject">
                            </div>
                            <div class="content-part">
                                <h4 class="title">Subject</h4>
                                <span class="courses">{{ $subject }} Subject</span>
                            </div>
                        </a>
                    </div>
                    @php
                        $blog = App\Blog::count();
                    @endphp
                    <div class="col-lg-4 col-md-6 col-xs-6 mb-30 wow fadeInUp" data-wow-delay="400ms"
                        data-wow-duration="2000ms">
                        <a class="categories-item">
                            <div class="icon-part">
                                <img src="images/categories/icons/5.png" alt="Blogs">
                            </div>
                            <div class="content-part">
                                <h4 class="title">Blogs</h4>
                                <span class="courses">{{ $blog }} Blog</span>
                            </div>
                        </a>
                    </div>
                    @php
                        $job = App\JobPost::count();
                    @endphp
                    <div class="col-lg-4 col-md-6 col-xs-6 mb-30 wow fadeInUp" data-wow-delay="500ms"
                        data-wow-duration="2000ms">
                        <a class="categories-item">
                            <div class="icon-part">
                                <img src="images/categories/icons/6.png" alt="Educational Board">
                            </div>
                            <div class="content-part">
                                <h4 class="title">Educational Board</h4>
                                <span class="courses">4 Board</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Categories Section End -->
        <!-- Faq Section Start -->
        <div class="rs-faq-part style1 pt-100 pb-100 md-pt-25 md-pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 padding-0">
                        <div class="main-part">
                            <div class="title mb-40 md-mb-15">
                                <h2 class="text-part">Frequently Asked Questions</h2>
                            </div>
                            <div class="faq-content">
                                <div id="accordion" class="accordion">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseOne">Does Qalp
                                                Educare
                                                Provide Free Demo Class?</a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                            <div class="card-body">
                                                Yes, Qalpedu Offers one free demo class. Every students is entitled to
                                                one free session along with a free demo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo"
                                                aria-expanded="false">To whom Is the tuition fee paid?</a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion"
                                            style="">
                                            <div class="card-body">
                                                If you are a premium student of Qalpedu, you have to pay first month fee
                                                to Qalpedu, from next month onwards you can directly pay it to tutor.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link collapsed" data-toggle="collapse"
                                                href="#collapseThree" aria-expanded="false">Is the fee paid in advance
                                                or at the end of the month</a>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordion"
                                            style="">
                                            <div class="card-body">
                                                For the first month we charge tuition fee in advance after 15 days of
                                                start of the tution from the next month you can
                                                pay the fee at the end of the month.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link collapsed" data-toggle="collapse"
                                                href="#collapsefour" aria-expanded="false">Is home tuition necessary
                                                for students?</a>
                                        </div>
                                        <div id="collapsefour" class="collapse" data-parent="#accordion"
                                            style="">
                                            <div class="card-body">
                                                Home tuition is not a necessity but the requirement of students for the
                                                better results
                                                and good grades, it's good to have a personal guide. With home tuition
                                                students get correct guidance as sometimes in
                                                other coachings communication gap arrises.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link collapsed" data-toggle="collapse"
                                                href="#collapsefive" aria-expanded="false">In case I don’t like the
                                                tutor so, is there any refund
                                                policy</a>
                                        </div>
                                        <div id="collapsefive" class="collapse" data-parent="#accordion"
                                            style="">
                                            <div class="card-body">
                                                Yes there is a policy but on proraita basis or we can arrange a new
                                                tutor if the
                                                tutor denies to continue the classes.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 padding-0">
                        <div class="img-part media-icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq Section Start -->

        <div class="rs-categories main-home pb-100 md-pt-25 md-pb-25">
        <div class="container ">
            <div class="sec-title3 text-center mb-45">
                <div class="sub-title"> Qalp Edu</div>
                <h2 class="title black-color">How it works?</h2>
            </div>
            <div class="howItWorkSteps">
                <span class="indStep activeStep">
                    <span class="stepNum">1</span>
                </span>
                <span class="stepLine"></span>
                <span class="indStep">
                    <span class="stepNum">2</span>
                </span>
                <span class="stepLine"></span>
                <span class="indStep">
                    <span class="stepNum">3</span>
                </span>
            </div>
            <div>
                <div class="row text-center">
                    <div class="col-lg-4 col-md-6 mb-30 howWorkBlock">
                        <img src="{{ asset('images/calendar.png')}}"
                            class="lazyImage" alt="">
                        <p class="hwTitle"><span>Book a Demo</span></p>
                        <p class="hwDesc">Book a Free Demo Class with a Tutor.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30 howWorkBlock">
                        <img src="{{ asset('images/calendar.png')}}"
                            class="lazyImage" alt="">
                        <p class="hwTitle"><span>Join LIVE Demo Class</span></p>
                        <p class="hwDesc">Attend the Demo class as scheduled.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30 howWorkBlock">
                        <img src="{{ asset('images/calendar.png')}}"                        "
                            class="lazyImage" alt="">
                        <p class="hwTitle"><span>Pay and Start</span></p>
                        <p class="hwDesc">Use UrbanPro SecurePay to pay and start your Classes.</p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="#" class="apply-btns wd_85">Get
                    Started</a>
            </div>
        </div>
        </div>
        <!-- Categories Section Start -->
        {{-- <div class="rs-categories main-home pt-100 pb-100 md-pt-25 md-pb-25">
            <div class="container">
                <div class="sec-title3 text-center mb-45">
                    <div class="sub-title"> Qalp Edu</div>
                    <h2 class="title black-color">How it works?</h2>
                </div>
                <div class="row mb-35">
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="how-its-work-card how-its-work-brdr">
                            <div class="how-its-work-img">
                                <img alt="how it works" loading="lazy" class="how-img"
                                    src="https://charitism-campaigns.s3.ap-south-1.amazonaws.com/charitism-v2/campaign-details/376db67e-3a15-402d-a60d-0d3bfe9b358a">
                            </div>
                            <p class="how-its-work-title">Select a Cause</p>
                            <p class="how-its-work-p">Browse through different campaigns and select a cause for which
                                you want to contribute</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="how-its-work-card how-its-work-brdr">
                            <div class="how-its-work-img">
                                <img alt="how it works" loading="lazy" class="how-img"
                                    src="https://charitism-campaigns.s3.ap-south-1.amazonaws.com/charitism-v2/campaign-details/376db67e-3a15-402d-a60d-0d3bfe9b358a">
                            </div>
                            <p class="how-its-work-title">Select a Cause</p>
                            <p class="how-its-work-p">Browse through different campaigns and select a cause for which
                                you want to contribute</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="how-its-work-card how-its-work-brdr">
                            <div class="how-its-work-img">
                                <img alt="how it works" loading="lazy" class="how-img"
                                    src="https://charitism-campaigns.s3.ap-south-1.amazonaws.com/charitism-v2/campaign-details/376db67e-3a15-402d-a60d-0d3bfe9b358a">
                            </div>
                            <p class="how-its-work-title">Select a Cause</p>
                            <p class="how-its-work-p">Browse through different campaigns and select a cause for which
                                you want to contribute</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="how-its-work-card how-its-work-brdr">
                            <div class="how-its-work-img">
                                <img alt="how it works" loading="lazy" class="how-img"
                                    src="https://charitism-campaigns.s3.ap-south-1.amazonaws.com/charitism-v2/campaign-details/376db67e-3a15-402d-a60d-0d3bfe9b358a">
                            </div>
                            <p class="how-its-work-title">Select a Cause</p>
                            <p class="how-its-work-p">Browse through different campaigns and select a cause for which
                                you want to contribute</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Categories Section End -->

        <!-- Testimonial Section Start -->
        <div class="rs-testimonial style3 pt-100 gray-bg pb-100 md-pb-25">
            <div class="container">
                <div class="sec-title mb-60 text-center md-mb-30">
                    <div class="sub-title primary">Student & Teacher Reviews</div>
                    <h2 class="title mb-0">What Our Students & Teacher Says</h2>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30"
                    data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                    data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false"
                    data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
                    data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false"
                    data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false"
                    data-md-device="2" data-md-device-nav="false" data-md-device-dots="true">
                    <div class="testi-item">
                        <div class="row y-middle no-gutter">
                            <div class="col-md-4">
                                <div class="user-info">
                                    <img src="images/testimonial/anushi-aslam.jpg" alt="Anushi Aslam">
                                    <h4 class="name">Anushi Aslam</h4>
                                    <span class="designation">Tutor</span>
                                    <ul class="ratings">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="desc">Qalpedu is an institute which not only focuses on earning its bread
                                    and butter but also makes a genuine effort to enhance the development for both the
                                    students as well as teachers.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="row y-middle no-gutter">
                            <div class="col-md-4">
                                <div class="user-info">
                                    <img src="images/testimonial/pravesh-sharan.jpg" alt="Pravesh Sharan">
                                    <h4 class="name">Pravesh Sharan</h4>
                                    <span class="designation">Tutor</span>
                                    <ul class="ratings">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="desc">I have been closely working with Qalpedu since 3 years, the staff
                                    are supportive and helpful. Qalpedu offers flexible work hour, good pay and hassle
                                    free schedules. The updated plateform is more interactive and fun !
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="row y-middle no-gutter">
                            <div class="col-md-4">
                                <div class="user-info">
                                    <img src="images/testimonial/suanshu-maurya.jpg" alt="Suanshu Maurya">
                                    <h4 class="name">Suanshu Maurya</h4>
                                    <span class="designation">Tutor</span>
                                    <ul class="ratings">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="desc">When it comes to taking care of a students educational service, no
                                    one can do it better than Qalp. I'm proud to be a part of Qalp's family for over 3
                                    years. Qalp is focused on providing the best teaching experience to its students.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="row y-middle no-gutter">
                            <div class="col-md-4">
                                <div class="user-info">
                                    <img src="images/testimonial/ashwani-srivastva.jpg" alt="Ashwani Srivastva">
                                    <h4 class="name">Ashwani Srivastva</h4>
                                    <span class="designation">Student</span>
                                    <ul class="ratings">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="desc">Through Qalp's various programmes it nourishes and polishes the
                                    skills of its members and students. Qalp's dedication and effort in providing free
                                    coaching to underprivileged children is really appreciated.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="row y-middle no-gutter">
                            <div class="col-md-4">
                                <div class="user-info">
                                    <img src="images/testimonial/mukesh-pandey.jpg" alt="Mukesh Pandey">
                                    <h4 class="name">Mukesh Pandey</h4>
                                    <span class="designation"> Tutor </span>
                                    <ul class="ratings">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="desc">As a Math & Science Tutor in Varanasi, I found Qalp Edu a best
                                    platform for home tuition services in Varansi. The selection and training procedure
                                    for teachers is appreciating.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="row y-middle no-gutter">
                            <div class="col-md-4">
                                <div class="user-info">
                                    <img src="images/testimonial/deepak-mishra.jpg" alt="Deepak Mishra">
                                    <h4 class="name">Deepak Mishra</h4>
                                    <span class="designation"> Tutor </span>
                                    <ul class="ratings">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="desc">Best Tuition bureau in Lucknow for grooming the skills of young
                                    talents. very much satisfied with the work of people associated with organisation.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-item">
                        <div class="row y-middle no-gutter">
                            <div class="col-md-4">
                                <div class="user-info">
                                    <img src="images/testimonial/anjali-rai.jpg" alt="Anjali Rai">
                                    <h4 class="name">Anjali Rai</h4>
                                    <span class="designation"> Tutor </span>
                                    <ul class="ratings">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="desc">As a Female tutors in Varanasi , I found Qalp Educare a best
                                    platform for finding genuine leads near me. It's is the best place for affordable
                                    home tutors in Varanasi.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testi-item">
                        <div class="row y-middle no-gutter">
                            <div class="col-md-4">
                                <div class="user-info">
                                    <img src="images/testimonial/priyanka-chakravarti.jpg" alt="Priyanka Chakraborty">
                                    <h4 class="name">Priyanka Chakraborty</h4>
                                    <span class="designation"> Tutor </span>
                                    <ul class="ratings">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="desc">The professionalism exhibited by team is phenomenal and one can see
                                    the efforts put forward by them to bring in best in class education. Very
                                    satisfactory!
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testi-item">
                        <div class="row y-middle no-gutter">
                            <div class="col-md-4">
                                <div class="user-info">
                                    <img src="images/testimonial/shasikant-srivastva.jpg"
                                        alt="Shashikant Srivasatava">
                                    <h4 class="name">Shashikant Srivasatava</h4>
                                    <span class="designation"> Parent </span>
                                    <ul class="ratings">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="desc">As being one of the startup, i feel they have really started well
                                    with professional attitude but still long way to go. Very satisfying Experience with
                                    their service.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Section End -->
    </div>
    <!-- Main content End -->
    <div class="rs-newsletter style6 bg4 pt-100 pb-90 md-pt-70 md-pb-60">
        <div class="container">
            <div class="newsletter-wrap">
                <div class="content-part mb-45 md-mb-30">
                    <h1 class="title mb-10" style="text-align: left;">Best Home Tuition Bureau in Varanasi, Lucknow,
                        and in other cities</h1>
                    <div class="sub-title">
                        <p class="pmr">We are always accessible to provide you with the <b><i>best home
                                    tuition</i></b> service for your children's bright future. Our home tutoring service
                            is well-known for providing high-quality, affordable and trusted tutors at a reasonable
                            cost. As more than 1500+ students have already enrolled with us, some have reached, or about
                            to reach, the pinnacle of their fields or studies.</p>
                        <p class="pmr">QALP EDU was established in 2018. which is now very well known for providing
                            the <b>best home tutors in Varanasi and Lucknow.</b> We are slowely expanding in other
                            cities in india.
                        </p>
                        <p class="pmr">Our management staff meets Virtually with students to determine their genuine
                            needs or requirements before assigning the finest instructor to them. Alternatively, they
                            may strive to locate the student's weak subject and recommend the best & ideal tutor.
                        <p class="pmr">Hurry up ! Join us now for <b>Best Home Tutor in Varanasi</b>, <b>Best Home
                                tutor in Lucknow</b> and other cities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Start -->
    <footer id="rs-footer" class="rs-footer home9-style main-home">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 footer-widget md-mb-50">
                        <div class="footer-logo mb-30">
                            <a href="/"><img src="https://qalpedu.com/images/dark-logo1.png"
                                    alt="Qalp Edu"></a>
                        </div>
                        <div class="textwidget pr-60 md-pr-15">
                            <p class="white-color">Are you looking to excel in your academics but require a one-to-one
                                session from a reliable professional? Sometimes, all it takes is the right guidance and
                                hence our tutors are very considerate and patient to ensure you’re comfortable to learn
                                at your own pace. </p>
                        </div>
                        <ul class="footer_social">
                            <li>
                                <a href="https://www.facebook.com/kalp.educare.75" target="_blank"><span><i
                                            class="fa fa-facebook"></i></span></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/qalpedu/" target="_blank"><span><i
                                            class="fa fa-instagram"></i></span></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/qalpedu" target="_blank"><span><i
                                            class="fa fa-twitter"></i></span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 pl-50 md-pl-15 footer-widget md-mb-50">
                        <h3 class="widget-title">Important Links</h3>
                        <ul class="site-map">
                            <li><a href="{{ URL::asset('privacy_policy') }}">Privacy policy</a></li>
                            <li><a href="{{ URL::asset('term_and_condition') }}">Term & Condition</a></li>
                            <li><a href="{{ URL::asset('refund_policy') }}"> Refund & Cancellation Policy</a></li>
                            <li><a href="{{ URL::asset('how_it_works') }}">How It Works</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-6 md-mb-20">
                        <div class="copyright">
                            <p>&copy; 2021 All Rights Reserved. Developed By <a
                                    href="https://www.techuptechnologies.com/">Techupnow Technologies Pvt Ltd.</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right md-text-left">
                        <ul class="copy-right-menu">
                            <li><a href="{{ URL::asset('/') }}">Home</a></li>
                            <li><a href="{{ URL::asset('/about') }}">About</a></li>
                            <li><a href="{{ URL::asset('/contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
    <!-- Footer End -->
    <!-- start scrollUp  -->
    <div id="scrollUp" class="orange-color">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->
    <!-- Search Modal Start -->
    <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="flaticon-cross"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="Search Here..." type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->
    <!-- Start Model -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">What are you looking for?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6" style="padding-right: 1px; padding-left: 1px; background:#237f78;
                        ">
                            <div class="effects-bg">
                                <div class="content-parts">
                                    <h4 class="text-center text-white ">Want To Hire Home Tutor ?</h4>
                                    <p class="text-white text-center">We will help you to Hire well qualified and exerienced Home Tuition Teacher, To Hire Click On The Button Below.</p>
                                    <div class="btn-part text-center">
                                        <a class="readon2 cta-btn" href="{{ URL::asset('student_sign_up') }}" style="background: #f49e4d;">Create
                                            Hire Home Tutor</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" style="padding-right: 1px; padding-left: 1px; background: #e8a042;">
                            <div class="effects-bg">
                                <div class="content-parts">
                                    <h4 class="text-center text-white ">Want To Join As a Teacher ?</h4>
                                    <p class="text-white text-center">We provides Home Tuition Jobs and Online Tuition Jobs Near to Your Locality. To Join Click On The Button Below.</p>
                                    <div class="btn-part text-center">
                                        <a class="readon2 cta-btn" href="{{ URL::asset('teacher_sign_up') }}">
                                            Register As a Teacher</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Moodel -->

    <!-- View No. Model -->
    <div class="modal fade" id="call_us" role="dialog" style="margin-top:200px;">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-headers">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8 col-60">
                            <h5 class="mb-4">Varanasi & Prayagraj : </h5>
                            <h5>Lucknow & Kanpur : </h5>
                        </div>
                        <div class="col-md-4 col-40">
                            <div class="btn-part mb-2">
                                <a href="tel:+91-7376966308" class="readon2 cta-btns "><i
                                        class="flaticon-call"></i> CALL US</a>
                            </div>

                            <div class="btn-part">
                                <a href="tel:+91-7905524188" class="readon2 cta-btns"><i
                                        class="flaticon-call"></i> CALL US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Model-->
    <!-- modernizr js -->
    <script src="{{ URL::asset('js/modernizr-2.8.3.min.js') }}"></script>
    <!-- jquery latest version -->
    <!-- Bootstrap v4.4.1 js -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <!-- Menu js -->
    <script src="{{ URL::asset('js/rsmenu-main.js') }}"></script>
    <!-- op nav js -->
    <script src="{{ URL::asset('js/jquery.nav.js') }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ URL::asset('js/slick.min.js') }}"></script>
    <!-- isotope.pkgd.min js -->
    <script src="{{ URL::asset('js/isotope.pkgd.min.js') }}"></script>
    <!-- imagesloaded.pkgd.min js -->
    <script src="{{ URL::asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ URL::asset('js/wow.min.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- plugins js -->
    <script src="{{ URL::asset('js/plugins.js') }}"></script>
    <!-- main js -->
    <script src="{{ URL::asset('js/main.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2({
                placeholder: 'Select Subject',
            });
            $('.select2bs4').select2({
                placeholder: 'Select Language',
            })
        });
    </script>
    </body>

</html>
