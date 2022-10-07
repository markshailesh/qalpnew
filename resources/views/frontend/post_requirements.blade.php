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
<div class="main-content" style="background: url({{asset('/images/bg.png')}}); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us pt-100 pb-100" id="post_requirements">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 lg-pr-0 md-mb-50 offset-3">
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
                                        <input class="from-control" type="text" id="area_location" name="area_location"
                                            placeholder="Area Location" required="">
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
            </div>
        </div>
        <!-- Why Choose Us Section End -->
    </div>
</div>
<!-- Footer Start -->
<footer id="rs-footer" class="rs-footer home9-style main-home">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <div class="footer-logo mb-30">
                        <a href="/"><img src="https://qalpedu.com/images/dark-logo1.png" alt="Qalp Edu"></a>
                    </div>
                    <div class="textwidget pr-60 md-pr-15">
                        <p class="white-color">Are you looking to excel in your academics but require a one-to-one
                            session from a reliable professional? Sometimes, all it takes is the right guidance and
                            hence our tutors are very considerate and patient to ensure you’re comfortable to learn at
                            your own pace. </p>
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
