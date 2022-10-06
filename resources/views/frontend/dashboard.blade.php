<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>QALP EDU | Best Home Tutors in India </title>
    <meta name="description" content="Professional Home Tutors, Now in your city. Find Tutors Online by checking, Reviews, Ratings, Fee Details and choose from the best Tuition Classes , Trainers matching your requirements">
    <meta name="keyword" content="Qalp Edu is a Tutor providing company in india offering home tuitions for 9th, 10th, 11th, 12th, IIT, NEET, physics, math, science, english,  yoga, music and many more. Hire now! , best home tutors in varanasi, lucknow, prayagraj, noida, gorakhpur in india.">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap-select.min.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('/css/jquery.growl.css')  }}">

    <!--Header Start-->
    @include('frontend/include/header')
    <!--Header End-->
    <script>
        $(function () {
            $('.tog').change(function () {
                var status = $(this).prop('checked');
                var c = {!! auth() -> user() -> id!!};
            if (status == true) {
                //  alert('success')
                var state = "1";
            }
            if (status == false) {
                var state = "0";
            }
            $.ajax({
                type: 'POST',
                url: '/update_user_notification',
                data: {
                    _token: '{{ csrf_token() }}',
                    stat: state,
                    id: c
                },
                success: function (data) {
                    if (data.msg.notification_status == '1') {
                        $.growl.active({
                            title: "Notification",
                            message: "Notification Active!"
                        });
                    } else {
                        $.growl.inactive({
                            title: "Notification",
                            message: "Notification Inactive!"
                        });
                    }
                }
            });
        })
   })
    </script>
    <style type="text/css">
        /*Copied from bootstrap to handle input file multiple*/

        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: normal;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        p {
            margin: 0 0 5px;
            line-height: 1.8;
          }
        /*Also */

        .btn-success {
            border: 1px solid #c5dbec;
            background: #d0e5f5;
            font-weight: bold;
            color: #2e6e9e;
        }

        /* This is copied from https://github.com/blueimp/jQuery-File-Upload/blob/master/css/jquery.fileupload.css */

        .fileinput-button {
            position: relative;
            overflow: hidden;
        }

        .fileinput-button input {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            opacity: 0;
            -ms-filter: "alpha(opacity=0)";
            font-size: 200px;
            direction: ltr;
            cursor: pointer;
        }

        .thumb {
            height: 80px;
            width: 100px;
            border: 1px solid #000;
        }

        ul.thumb-Images li {
            width: 120px;
            float: left;
            display: inline-block;
            vertical-align: top;
            height: 120px;
        }

        .img-wrap {
            position: relative;
            display: inline-block;
            font-size: 0;
        }

        .img-wrap .close {
            position: absolute;
            top: 2px;
            right: 2px;
            z-index: 100;
            background-color: #d0e5f5;
            padding: 5px 2px 2px;
            color: #000;
            font-weight: bolder;
            cursor: pointer;
            opacity: 0.5;
            font-size: 23px;
            line-height: 10px;
            border-radius: 50%;
        }

        .img-wrap:hover .close {
            opacity: 1;
            background-color: #ff0000;
        }

        .FileNameCaptionStyle {
            font-size: 12px;
        }
        .ajax-loader {
              visibility: hidden;
              background-color: rgba(255,255,255,0.7);
              position: absolute;
              z-index: +100 !important;
              width: 100%;
              height:100%;
        }

       .ajax-loader img {
            width: 80px;
            top: 5%;
            position: absolute;
            left: 40%;
       }
    </style>
    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay dd">
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
                    <div class="aiz-user-sidenav-wrap pt-2 position-relative z-1">
                        <div class="absolute-top-right d-xl-none">
                            <button class="btn btn-sm p-2" data-toggle="class-toggle" data-target=".aiz-mobile-side-nav"
                                data-same=".mobile-side-nav-thumb"> <i class="las la-times la-2x"></i> </button>
                        </div>
                        <div class="absolute-top-left d-xl-none">
                            <a class="btn btn-sm p-2" href="#"> <i class="las la-sign-out-alt la-2x"></i> </a>
                        </div> @php $user_details=App\UserDetail::where('user_id', Auth::user()->id)->first(); @endphp
                        <div class="aiz-user-sidenav rounded overflow-hidden  c-scrollbar-light">
                            <div class="px-4 text-center mb-2"> @if( $user_details->profile_img!=null) <span
                                    class="avatar avatar-md mb-3">
                                    <img src="uploads/teacher_document/{{$user_details->profile_img}}"
                                        class="image rounded-circle" style="width: 110px; height: 110px;">
                                </span> @else <span class="avatar avatar-md mb-3">
                                    <img src="images/profile.png" class="image rounded-circle"
                                        style="width: 110px; height: 110px;">
                                </span> @endif
                                <h4 class="h5 fw-600">{{ Auth::user()->name }}
                                    @if( Auth::user()->user_type=="teacher" && Auth::user()->verification=='verified')
                                    <span class="ml-2">
                                        <i class="fa fa-check-circle-o" style="color:#3a7f79;"></i>
                                    </span>
                                    <br>
                                    <small>(ID- {{Auth::user()->teacher_id}})</small>
                                    @endif
                                    <small>({{ Auth::user()->user_type }})</small>
                                </h4>
                            </div>
                            <div class="sidemnenu mb-1">
                                <ul id="nav-tabs-wrapper" class="nav  aiz-side-nav-list metismenu"
                                    data-toggle="aiz-side-menu">
                                    <li class="aiz-side-nav-item active">
                                        <a href="#vtab1" data-toggle="tab" class="aiz-side-nav-link active"
                                            aria-expanded="true"> <i
                                                class="fas fa-tachometer-slowest aiz-side-nav-icon"></i> <span
                                                class="aiz-side-nav-text">Dashboard</span> </a>
                                    </li>
                                    <li class="aiz-side-nav-item">
                                        <a href="#vtab8" data-toggle="tab" class="aiz-side-nav-link"> <span
                                                class="aiz-side-nav-text">Manage Profile</span> </a>
                                    </li>
                                    
                                    <li class="aiz-side-nav-item">
                                        <a href="#vtab6" data-toggle="tab" class="aiz-side-nav-link"> <span
                                                class="aiz-side-nav-text">Plan Details</span> </a>
                                    </li>
                                    <li class="aiz-side-nav-item">
                                        <a href="#vtab2" data-toggle="tab" class="aiz-side-nav-link"> <span
                                                class="aiz-side-nav-text">My Wallet/Add Plan</span> </a>
                                    </li>@if (Auth::user()->user_type=="teacher")
                                    <li class="aiz-side-nav-item">
                                        <a href="#vtab4" data-toggle="tab" class="aiz-side-nav-link"> <span
                                                class="aiz-side-nav-text">View / Buy Leads</span> </a>
                                    </li>
                                    <li class="aiz-side-nav-item">
                                        <a href="#vtab10" data-toggle="tab" class="aiz-side-nav-link"> <span
                                                class="aiz-side-nav-text">Review</span> </a>
                                    </li>
                                    <li class="aiz-side-nav-item">
                                        <a href="#vtab5" data-toggle="tab" class="aiz-side-nav-link"> <span
                                                class="aiz-side-nav-text">Leads management</span> </a>
                                    </li>
                                    <li class="aiz-side-nav-item">
                                        <a href="#vtab12" data-toggle="tab" class="aiz-side-nav-link"> <span
                                                class="aiz-side-nav-text">Instruction</span> </a>
                                    </li>
                                    @elseif (Auth::user()->user_type=="student")
                                    <li class="aiz-side-nav-item">
                                        <a href="#vtab3" data-toggle="tab" class="aiz-side-nav-link"> <span
                                                class="aiz-side-nav-text">All Tutor</span> </a>
                                    </li>
                                    <li class="aiz-side-nav-item">
                                        <a href="#vtab7" data-toggle="tab" class="aiz-side-nav-link"> <span
                                                class="aiz-side-nav-text">Post Requirments</span> </a>
                                    </li>
                                    <li class="aiz-side-nav-item">
                                        <a href="#vtab11" data-toggle="tab" class="aiz-side-nav-link"> <span
                                                class="aiz-side-nav-text">Viewed Tutors</span> </a>
                                    </li>
                                    <li class="aiz-side-nav-item">
                                        <a href="#vtab13" data-toggle="tab" class="aiz-side-nav-link"> <span
                                                class="aiz-side-nav-text">Instruction</span> </a>
                                    </li>
                                    @endif
                                    <li class="aiz-side-nav-item">
                                        <a href="#vtab9" data-toggle="tab" class="aiz-side-nav-link"> <span
                                                class="aiz-side-nav-text">Help Center?</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="aiz-user-panel">
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
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active dd" id="vtab1">
                                <div class="row gutters-10">
                                    <div class="col-md-4 col-xs-6">
                                        <div class="bg-grad-3 text-white rounded-lg mb-4 overflow-hidden">
                                            <a href="#vtab2" data-toggle="tab">
                                                <div class="px-3 pt-3"><br>
                                                    My Wallet/Add Plan</div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1"
                                                        d="M0,192L26.7,192C53.3,192,107,192,160,202.7C213.3,213,267,235,320,218.7C373.3,203,427,149,480,117.3C533.3,85,587,75,640,90.7C693.3,107,747,149,800,149.3C853.3,149,907,107,960,112C1013.3,117,1067,171,1120,202.7C1173.3,235,1227,245,1280,213.3C1333.3,181,1387,107,1413,69.3L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>@if (Auth::user()->user_type=="teacher")
                                    <div class="col-md-4 col-xs-6">
                                        <div class="bg-grad-3 text-white rounded-lg mb-4 overflow-hidden">
                                            <a href="#vtab4" data-toggle="tab">
                                                <div class="px-3 pt-3">
                                                    <br>View / Buy Leads
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1"
                                                        d="M0,192L30,208C60,224,120,256,180,245.3C240,235,300,181,360,144C420,107,480,85,540,96C600,107,660,149,720,154.7C780,160,840,128,900,117.3C960,107,1020,117,1080,112C1140,107,1200,85,1260,74.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <div class="bg-grad-3 text-white rounded-lg mb-4 overflow-hidden">
                                            <a href="#vtab5" data-toggle="tab">
                                                <div class="px-3 pt-3">
                                                    <br>Leads management
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1"
                                                        d="M0,192L30,208C60,224,120,256,180,245.3C240,235,300,181,360,144C420,107,480,85,540,96C600,107,660,149,720,154.7C780,160,840,128,900,117.3C960,107,1020,117,1080,112C1140,107,1200,85,1260,74.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <div class="bg-grad-3 text-white rounded-lg mb-4 overflow-hidden">
                                            <a href="#vtab10" data-toggle="tab">
                                                <div class="px-3 pt-3">
                                                    <br>Review
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1"
                                                        d="M0,192L30,208C60,224,120,256,180,245.3C240,235,300,181,360,144C420,107,480,85,540,96C600,107,660,149,720,154.7C780,160,840,128,900,117.3C960,107,1020,117,1080,112C1140,107,1200,85,1260,74.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    @elseif (Auth::user()->user_type=="student")
                                    <div class="col-md-4 col-xs-6">
                                        <div class="bg-grad-3 text-white rounded-lg mb-4 overflow-hidden">
                                            <a href="#vtab3" data-toggle="tab">
                                                <div class="px-3 pt-3">
                                                    <br>All Tutor
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1"
                                                        d="M0,192L30,208C60,224,120,256,180,245.3C240,235,300,181,360,144C420,107,480,85,540,96C600,107,660,149,720,154.7C780,160,840,128,900,117.3C960,107,1020,117,1080,112C1140,107,1200,85,1260,74.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <div class="bg-grad-3 text-white rounded-lg mb-4 overflow-hidden">
                                            <a href="#vtab7" data-toggle="tab">
                                                <div class="px-3 pt-3">
                                                    <br> Post Requirments
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1"
                                                        d="M0,192L30,208C60,224,120,256,180,245.3C240,235,300,181,360,144C420,107,480,85,540,96C600,107,660,149,720,154.7C780,160,840,128,900,117.3C960,107,1020,117,1080,112C1140,107,1200,85,1260,74.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>@endif
                                    <div class="col-md-4 col-xs-6">
                                        <div class="bg-grad-3 text-white rounded-lg mb-4 overflow-hidden">
                                            <a href="#vtab6" data-toggle="tab">
                                                <div class="px-3 pt-3">
                                                    <br>Plan Details
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1"
                                                        d="M0,192L26.7,192C53.3,192,107,192,160,202.7C213.3,213,267,235,320,218.7C373.3,203,427,149,480,117.3C533.3,85,587,75,640,90.7C693.3,107,747,149,800,149.3C853.3,149,907,107,960,112C1013.3,117,1067,171,1120,202.7C1173.3,235,1227,245,1280,213.3C1333.3,181,1387,107,1413,69.3L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <div class="bg-grad-3 text-white rounded-lg mb-4 overflow-hidden">
                                            <a href="#vtab8" data-toggle="tab">
                                                <div class="px-3 pt-3">
                                                    <br>Manage Profile
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1"
                                                        d="M0,192L26.7,192C53.3,192,107,192,160,202.7C213.3,213,267,235,320,218.7C373.3,203,427,149,480,117.3C533.3,85,587,75,640,90.7C693.3,107,747,149,800,149.3C853.3,149,907,107,960,112C1013.3,117,1067,171,1120,202.7C1173.3,235,1227,245,1280,213.3C1333.3,181,1387,107,1413,69.3L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <div class="bg-grad-3 text-white rounded-lg mb-4 overflow-hidden">
                                            <a href="#vtab11" data-toggle="tab">
                                                <div class="px-3 pt-3">
                                                    <br>Viewed Tutors
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1"
                                                        d="M0,192L30,208C60,224,120,256,180,245.3C240,235,300,181,360,144C420,107,480,85,540,96C600,107,660,149,720,154.7C780,160,840,128,900,117.3C960,107,1020,117,1080,112C1140,107,1200,85,1260,74.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <div class="bg-grad-3 text-white rounded-lg mb-4 overflow-hidden">
                                            <a href="#vtab9" data-toggle="tab">
                                                <div class="px-3 pt-3">
                                                    <br>Help Center?
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                                    <path fill="rgba(255,255,255,0.3)" fill-opacity="1"
                                                        d="M0,192L26.7,192C53.3,192,107,192,160,202.7C213.3,213,267,235,320,218.7C373.3,203,427,149,480,117.3C533.3,85,587,75,640,90.7C693.3,107,747,149,800,149.3C853.3,149,907,107,960,112C1013.3,117,1067,171,1120,202.7C1173.3,235,1227,245,1280,213.3C1333.3,181,1387,107,1413,69.3L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="vtab2">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <div class="bg-grad-1 text-white rounded-lg overflow-hidden"> <span
                                                class="size-30px rounded-circle mx-auto bg-soft-primary d-flex align-items-center justify-content-center mt-3">
                                                <i class="fa fa-rupee text-white"></i>
                                            </span>
                                            <div class="px-3 pt-3 pb-3">

                                                <div class="h4 fw-700 text-center">Rs <span
                                                        id="user_balance">{{Auth::user()->balance}}</span></div>

                                                <div class="opacity-50 text-center">Wallet Balance</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <div class="p-3 rounded mb-3 c-pointer text-center bg-white shadow-sm hov-shadow-lg mybtn"
                                            id="myBtn" data-toggle="modal" data-target="#myModal"> <span
                                                class="size-60px rounded-circle mx-auto bg-secondary d-flex align-items-center justify-content-center mb-3">
                                                <i class="fa fa-plus fa-3x text-white"></i>
                                            </span>
                                            <div class="fs-18 text-primary">Recharge Wallet</div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0 h6">Wallet Credit/Debit History</h5>
                                    </div>
                                    <div class="card-body">
                                        <table
                                            class="table table-responsive aiz-table mb-0 footable footable-1 breakpoint-lg"
                                            style="">
                                            <thead>
                                                <tr class="footable-header">
                                                    <th class="footable-first-visible">#</th>
                                                    <th>Amount</th>
                                                    <th>Transaction Id</th>
                                                    <th>Date</th>
                                                    <th class="text-right footable-last-visible">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody id="user_wallet_history_tbl">
                                                @php $i=1 @endphp
                                                @foreach(App\Wallet::where('user_id',Auth::user()->id)->get() as
                                                $wallet)
                                                <tr>
                                                    <td class="footable-first-visible">{{$i++}}</td>

                                                    <td>
                                                        @if($wallet->status == "success")
                                                        Rs {{$wallet->amount}}
                                                        @else
                                                        Rs {{$wallet->amount}}.00
                                                        @endif
                                                    </td>
                                                    <td>{{$wallet->transaction_id}}</td>
                                                    <td>{{$wallet->created_at}}</td>
                                                    <td class="text-right footable-last-visible">
                                                        @if($wallet->status == "success")
                                                        <span class="badge badge-inline badge-success">Credit</span>
                                                        @else
                                                        <span class="badge badge-inline badge-danger">Debit</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="vtab3">
                                <div class="card">
                                    <div class="card-header">
                                        <form action="/search_tutor_data" method="GET" id="search_form">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="" class="form-label dd ">Search</label>
                                                    <div class="input-group input-group-sm mb-30">
                                                        <form class="" action="" method="GET">
                                                            <input type="text" class="form-control" onkeyup="filter()"
                                                                id="key" name="key" placeholder=" Id/Name/City/Pincode">
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="" class="form-label dd">By Subject</label>
                                                        <select class="form-control " name="subject" onchange="filter()"
                                                            id="subject">
                                                            <option value="">Select Subject</option>
                                                            @foreach(App\Subject::where('status','enable')->get() as
                                                            $subject)
                                                            <option value="{{$subject->name}}">{{$subject->name}}
                                                            </option>@endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="" class="form-label dd">By Class/Course</label>
                                                        <select class="form-control " name="class" onchange="filter()"
                                                            id="class">
                                                            <option value="">Select Class/Course</option>
                                                            @foreach(App\Course::where('status','enable')->get() as
                                                            $class)
                                                            <option value="{{$class->name}}">{{$class->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="" class="form-labell dd">By Language</label>
                                                        <select class="form-control " name="language"
                                                            onchange="filter()" id="language">
                                                            <option value="">Select Language</option>
                                                            @foreach(App\Language::where('status','enable')->get() as
                                                            $language)
                                                            <option value="{{$language->name}}">{{$language->name}}
                                                            </option>@endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <label for="" class="form-labell dd">Reset</label>
                                                    <button type="reset" class="btn btn-light btn-sm"
                                                        id="reset">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div id="all_tutor">
                                        @include('frontend.include.all-tutor')
                                    </div>
                                </div>
                                
                                <script type="text/javascript">
                                    $(window).on('hashchange',function(){
                                        if (window.location.hash) {
                                            var page = window.location.hash.replace('#', '');
                                            if (page == Number.NaN || page <= 0) {
                                                return false;
                                            } else{
                                                getData(page);
                                            }
                                        }
                                    });
                                    $(document).ready(function(){
                                        $(document).on('click','.pagination a',function(event){
                                            event.preventDefault();
                                            $('li').removeClass('active');
                                            $(this).parent('li').addClass('active');
                                            var url = $(this).attr('href');
                                            var page = $(this).attr('href').split('page=')[1];
                                            getData(page);
                                        });
                                    });
                                    function getData(page) {
                                        $.ajax({
                                            url : '?page=' + page,
                                            type : 'get',
                                            datatype : 'html',
                                            data:{
                                                section:"teacher_section"
                                            },
                                        }).done(function(data){
                                            $('#all_tutor').empty().html(data);
                                            location.hash = page;
                                        }).fail(function(jqXHR,ajaxOptions,thrownError){
                                            alert('No response from server');
                                        });
                                    }
                                </script>


                                <div id="all_tutor1" style="display:none;">
                                    <div class="alert alert-info">
                                        <strong><i class="fa fa-meh-o" aria-hidden="true"></i> !</strong> Data Not
                                        Found.
                                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    </div>
                                </div>


                                <div role="tabpanel" class="tab-pane fade" id="vtab4">
                                    <div class="card">
                                        <div class="card-header">
                                            <form action="/search_student_data" method="GET" id="search_student">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="" class="form-label dd">Search</label>
                                                        <div class="input-group input-group-sm mb-30">
                                                            <form class="" action="" method="GET">
                                                                <input type="text" class="form-control"
                                                                    onkeyup="filter_student()" id="student_key"
                                                                    name="key" placeholder=" Name/City/Pincode">
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="" class="form-labell dd">By Subject</label>
                                                            <select class="form-control " name="subject" id="subject"
                                                                onchange="filter_student()">
                                                                <option value="">Select Subject</option>
                                                                @foreach(App\Subject::where('status','enable')->get() as
                                                                $subject)
                                                                <option value="{{$subject->name}}">{{$subject->name}}
                                                                </option>@endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="" class="form-labell dd">By Class/Course</label>
                                                            <select class="form-control " name="class" id="class"
                                                                onchange="filter_student()">
                                                                <option value="">Select Class/Course</option>
                                                                @foreach(App\Course::where('status','enable')->get() as
                                                                $class)
                                                                <option value="{{$class->name}}">{{$class->name}}
                                                                </option>@endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="" class="form-labell dd">By Language</label>
                                                            <select class="form-control " name="language" id="language"
                                                                onchange="filter_student()">
                                                                <option value="">Select Language</option>
                                                                @foreach(App\Language::where('status','enable')->get()
                                                                as $language)
                                                                <option value="{{$language->name}}">{{$language->name}}
                                                                </option>@endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label for="" class="form-labell dd">Reset</label>
                                                        <button type="reset" class="btn btn-light btn-sm"
                                                            id="reset">Reset</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div id="all_student">
                                            @include('frontend.include.all-student')
                                        </div>
                                        <script type="text/javascript">
                                            $(window).on('hashchange',function(){
                                                if (window.location.hash) {
                                                    var page1 = window.location.hash.replace('#', '');
                                                    if (page1 == Number.NaN || page1 <= 0) {
                                                        return false;
                                                    } else{
                                                        getData1(page1);
                                                    }
                                                }
                                            });
                                            $(document).ready(function(){
                                                $(document).on('click','.pagination a',function(event){
                                                    event.preventDefault();
                                                    $('li').removeClass('active');
                                                    $(this).parent('li').addClass('active');
                                                    var url1 = $(this).attr('href');
                                                    var page1 = $(this).attr('href').split('page=')[1];
                                                    getData(page1);
                                                });
                                            });
                                            function getData1(page1) {
                                                $.ajax({
                                                    url : '?page=' + page1,
                                                    type : 'get',
                                                    datatype : 'html',
                                                    data:{
                                                        section:"student_section"
                                                    },
                                                }).done(function(data1){
                                                    $('#all_student').empty().html(data1);
                                                    location.hash = page1;
                                                }).fail(function(jqXHR,ajaxOptions,thrownError){
                                                    alert('No response from server');
                                                });
                                            }
                                        </script>
                                    </div>
                                    <div id="all_student1" style="display:none;">
                                        <div class="alert alert-info">
                                            <strong><i class="fa fa-meh-o" aria-hidden="true"></i> !</strong> Data Not
                                            Found.
                                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="vtab5">


                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0 h6">Leads Management (Chargable Notification On/Off)
                                                </h5>
                                                <label class="switch" style="float: right;">
                                                    <input type="checkbox" class="tog" data-toggle="toggle"
                                                        @if(Auth::User()->notification_status=='1'){{'checked'}} @endif/
                                                    /> <span class="slider round"></span> </label>
                                            </div>
                                            <div class="card-body">
                                                <table
                                                    class="table table-responsive aiz-table mb-0 footable footable-1 breakpoint-lg"
                                                    style="">
                                                    <thead>
                                                        <tr class="footable-header">
                                                            <th class="footable-first-visible">#</th>
                                                            <th>Name</th>
                                                            <th>Course</th>
                                                            <th>Subject</th>
                                                            <th>Area</th>
                                                            <th>City</th>
                                                            <th class="text-right footable-last-visible">View</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                        $i=1;
                                                        $all_leads = App\LeadManagement::where('teacher_user_id',
                                                        Auth::user()->id)->get();
                                                        @endphp

                                                        @foreach($all_leads as $new_student)
                                                        @php
                                                        $std_data=App\User::where('id',
                                                        $new_student->student_user_id)->where('user_type',
                                                        'student')->first();
                                                        @endphp
                                                        @if(!empty($std_data))
                                                        <tr>
                                                            <td class="footable-first-visible">{{$i++}}</td>
                                                            <td>{{$std_data->name}}</td>
                                                            <td>{{$std_data->user_details->class}}</td>
                                                            <td>{{$std_data->user_details->subject}}</td>
                                                            <td>{{$std_data->user_details->pincode}}</td>
                                                            <td>{{$std_data->user_details->district}}</td>
                                                            <td>
                                                                @php
                                                                $student_number =
                                                                App\ViewNumber::where('viewed_user_id',
                                                                $std_data->id)->where('viewed_by_user',
                                                                Auth::user()->id)->where('user_type',
                                                                'teacher')->first();
                                                                @endphp
                                                                @if(empty($student_number))
                                                                <div class="view number_show"
                                                                    id="view_number_{{$std_data->id}}">
                                                                    <span data-toggle="modal" class="view_number"
                                                                        id="view_number_id_btns_{{$std_data->id}}"
                                                                        value="{{$std_data->id}}"
                                                                        data-target="#view_lead">View No.</span>
                                                                </div>
                                                                @else
                                                                <div class="view">
                                                                    <span><a
                                                                            href="tel:+91 - {{$std_data->phone_number}}">
                                                                            +91 - {{$std_data->phone_number}}</a></span>
                                                                </div>
                                                                @endif

                                                            </td>
                                                        </tr>
                                                        @endif
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="view_lead" role="dialog">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Are You Sure?
                                                        </h5>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">×</button>
                                                    </div>
                                                    <!--<div class="modal-body">
                                 <p>Confirmation</p>
                                </div>-->
                                                    <div class="modal-footer">
                                                        <a href="#" value="" id="cnfs_url" type="button"
                                                            class="btn btn-primary" data-dismiss="modal">Yes</a>
                                                        <a type="#" class="btn btn-secondary" data-dismiss="modal"
                                                            style="color:#fff;">Close</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <script>
                                            $(document).ready(function () {

                                                $(".view_number").click(function () {
                                                    var id = $(this).attr('value');
                                                    //var url = "/student_number_view/"+id;
                                                    $('#cnfs_url').attr("value", id);
                                                });


                                                $("#cnfs_url").click(function () {
                                                    var id = $(this).attr('value');
                                                    $.ajax({
                                                        type: 'GET',
                                                        url: "/student_number_view/" + id,
                                                        data: {
                                                            id: id
                                                        },
                                                        success: function (data) {
                                                            console.log(data);
                                                            if (data.student_view != null) {
                                                                $('#view_number_id_btns_' + id).hide();
                                                                $('#view_number_' + id).append('<span> +91 -' + data.student_details.phone_number + '</span>');
                                                                $('#user_balance').text(data.user_data.balance);
                                                                if (data.user_wallet_history.length > 0) {
                                                                    $('#user_wallet_history_tbl').empty();
                                                                    var i = 1;
                                                                    $.each(data.user_wallet_history, function (index, wallet_history) {
                                                                        if (wallet_history.status == "success") {
                                                                            $('#user_wallet_history_tbl').append('<tr><td class="footable-first-visible">' + i++ + '</td><td>Rs ' + wallet_history.amount + '</td><td>' + wallet_history.transaction_id + '</td><td>' + wallet_history.created_at + '</td><td>Lifetime</td><td class="text-right footable-last-visible"><span class="badge badge-inline badge-success">Credit</span></td></tr>')
                                                                        } else {
                                                                            $('#user_wallet_history_tbl').append('<tr><td class="footable-first-visible">' + i++ + '</td><td>Rs ' + wallet_history.amount + '.00</td><td>' + wallet_history.transaction_id + '</td><td>' + wallet_history.created_at + '</td><td>Lifetime</td><td class="text-right footable-last-visible"><span class="badge badge-inline badge-danger">Debit</span></td></tr>')
                                                                        }
                                                                    });
                                                                }
                                                                $.growl.active({
                                                                    title: "Success",
                                                                    message: "Number View"
                                                                });
                                                            }
                                                            if (data.status == 'danger') {
                                                                $.growl.inactive({
                                                                    title: "Error",
                                                                    message: "Low Amount , Please Recharge Your Wallet."
                                                                });
                                                            }
                                                        }
                                                    });
                                                });
                                            });
                                        </script>


                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0 h6">Viewd Student Number List</h5>
                                            </div>
                                            <div class="card-body">
                                                <table
                                                    class="table table-responsive aiz-table mb-0 footable footable-1 breakpoint-lg"
                                                    style="">
                                                    <tbody>
                                                        @php $i=1 @endphp
                                                        @php $teacher_number = App\ViewNumber::where('viewed_by_user',
                                                        Auth::user()->id)->where('user_type', 'teacher')->get(); @endphp
                                                        @foreach($teacher_number as $tech)
                                                        @php
                                                        $user_data=App\User::where('id',
                                                        $tech->viewed_user_id)->first();
                                                        $user_detail=App\UserDetail::where('user_id',$tech->viewed_user_id)->first();
                                                        @endphp
                                                        @if(!empty($user_data) && !empty($user_detail))
                                                        <tr>
                                                            <td class="footable-first-visible">{{$i++}}</td>
                                                            <td>{{$user_data->name}}</td>
                                                            <td>{{$user_detail->class}}</td>
                                                            <td>{{$user_detail->subject}}</td>
                                                            <td>{{$user_detail->pincode}}</td>
                                                            <td>{{$user_detail->district}}</td>
                                                            <td class="text-right footable-last-visible">
                                                                @if($teacher_number != null)
                                                                <div class="view view1">
                                                                    <span><a
                                                                            href="tel:+91 - {{$user_data->phone_number}}">
                                                                            +91 -
                                                                            {{$user_data->phone_number}}</a></span>
                                                                </div>
                                                                @else
                                                                <div class="view">
                                                                    <span>View No.</span>
                                                                </div>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        @endif
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="vtab6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0 h6">Plan Details</h5>
                                            </div>
                                            <div class="card-body">
                                                <table
                                                    class="table table-responsive aiz-table mb-0 footable footable-1 breakpoint-lg"
                                                    style="">
                                                    <thead>
                                                        <tr class="footable-header">
                                                            <th class="footable-first-visible">#</th>
                                                            <th>Plan Name</th>
                                                            <th>Amount</th>
                                                            <th>Description</th>
                                                            <th>Validity</th>
                                                            <th class="text-right footable-last-visible">Buy Packege
                                                            </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>@php $i=1 @endphp @foreach($plan as $item)
                                                        <tr>
                                                            <td class="footable-first-visible">{{$i++}}</td>
                                                            <td>{{$item->plan_name}}</td>
                                                            <td>{{$item->amount}}</td>
                                                            <td>{{$item->description}}</td>
                                                            <td>Lifetime</td>
                                                            <td><a href="#vtab2" data-toggle="tab"
                                                                    class="aiz-side-nav-link">Buy Now</a></td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="vtab7">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0 h6">Post Your Learning Needs</h5>
                                            </div>
                                            <div class="card-body">
                                                <form method="post" action="{{route('s_new_req')}}">
                                                    @csrf
                                                    <blockquote>
                                                        <h3>Course Information:</h3>
                                                    </blockquote>
                                                    <div class="row">
                                                        <div class="col-lg-3 mb-20 col-md-12">
                                                            <label class="dd">Class Mode <sup>*</sup> :</label>
                                                        </div>
                                                        <div class="col-lg-9 mb-20 col-md-12">
                                                            <select class="form-select selct"
                                                                aria-label="Default select example" name="class_mode"
                                                                required>
                                                                <option value="" disabled selected>Choose Class Mode
                                                                </option>
                                                                <option value="Online">Online </option>
                                                                <option value="Offline">Offline</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-3 mb-20 col-md-12">
                                                            <label class="dd">Class <sup>*</sup> :</label>
                                                        </div>
                                                        <div class="col-lg-9 mb-20 col-md-12">
                                                            <select class="form-select selct"
                                                                aria-label="Default select example" name="class"
                                                                required>
                                                                <option value="" disabled selected>Select Class/Course
                                                                </option>
                                                                @foreach(App\Course::where('status','enable')->get() as
                                                                $class)
                                                                <option value="{{$class->name}}">{{$class->name}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-3 mb-20 col-md-12">
                                                            <label class="dd">Subject <sup>*</sup> :</label>
                                                        </div>
                                                        <div class="col-lg-9 mb-20 col-md-12">
                                                            <select data-style="bg-white rounded-pill"
                                                                class="selectpicker w-100" multiple data-max-options="3"
                                                                data-live-search="true" title="Select Subject"
                                                                name="subject[]" multiple required>
                                                                @foreach(App\Subject::where('status','enable')->get() as
                                                                $subject)
                                                                <option value="{{$subject->name}}">{{$subject->name}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-3 mb-20 col-md-12">
                                                            <label class="dd">Language <sup>*</sup> :</label>
                                                        </div>
                                                        <div class="col-lg-9 mb-20 col-md-12">
                                                            <select class="form-select selct"
                                                                aria-label="Default select example" name="language"
                                                                required>
                                                                <option value="" disabled selected>Select Language
                                                                </option>
                                                                @foreach(App\Language::where('status','enable')->get()
                                                                as $language)
                                                                <option value="{{$language->name}}">{{$language->name}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-3 mb-20 col-md-12">
                                                            <label class="dd">Fee Range <sup>*</sup> :</label>
                                                        </div>
                                                        <div class="col-lg-9 mb-20 col-md-12">
                                                            <input class="from-control" type="text" name="fee_range"
                                                                placeholder="Fee Range" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-3 mb-20 col-md-12">
                                                            <label class="dd">Massage :</label>
                                                        </div>
                                                        <div class="col-lg-9 mb-20 col-md-12">
                                                            <textarea class="from-control" type="text" name="massage"
                                                                placeholder="Massage" style="height: 60px;"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <input class="btn-send" type="submit" name="submit"
                                                            value="Submit Now">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0 h6">New All Requirement</h5>
                                            </div>
                                            <div class="card-body">
                                                <table
                                                    class="table table-responsive aiz-table mb-0 footable footable-1 breakpoint-lg"
                                                    style="">
                                                    <thead>
                                                        <tr class="footable-header">
                                                            <th class="footable-first-visible">#
                                                            </th>
                                                            <th>Class Mode</th>
                                                            <th>Class</th>
                                                            <th>Subject </th>
                                                            <th>Language </th>
                                                            <th>Fee Range </th>
                                                            <th>Massage </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php $i=1 @endphp

                                                        @foreach(App\StudEnquiry::where('user_id',Auth::user()->id)->get()
                                                        as $item)
                                                        <tr>
                                                            <td class="footable-first-visible">{{$i++}}
                                                            </td>
                                                            <td>{{$item->class_mode}}</td>
                                                            <td>{{$item->class}}</td>
                                                            <td>{{$item->subject}}</td>
                                                            <td>{{$item->language}}</td>
                                                            <td>{{$item->fee_range}}</td>
                                                            <td>{{$item->massage}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="vtab8">
                                        @include('frontend/include/profile')
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="vtab9">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0 h6">Any Query?</h5>
                                            </div>
                                            <div class="card-body">
                                                <form method="post" action="{{route('need_help')}}">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-3 mb-20 col-md-12">
                                                            <label class="dd">Problem <sup>*</sup> :</label>
                                                        </div>
                                                        <div class="col-lg-9 mb-20 col-md-12">
                                                            <select class="form-select selct"
                                                                aria-label="Default select example" name="issues"
                                                                required aria-required="true">
                                                                <option value="" disabled selected>Select Issue</option>
                                                                <option value="Payment & Wallet">Payment & Wallet
                                                                </option>
                                                                <option value="Deactivate Account">Deactivate Account
                                                                </option>
                                                                <option value="Profile & Documents">Profile & Documents
                                                                </option>
                                                                <option value="Personal Assistance">Personal Assistance
                                                                </option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-3 mb-20 col-md-12">
                                                            <label class="dd">Message :</label>
                                                        </div>
                                                        <div class="col-lg-9 mb-20 col-md-12">
                                                            <textarea class="from-control" type="text" name="message"
                                                                placeholder="Message" style="height: 60px;"
                                                                required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <input class="btn-send" type="submit" name="submit"
                                                            value="Submit Now">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="vtab10">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0 h6"> Review & rating</h5>
                                            </div>
                                            <div class="card-body">
                                                <table
                                                    class="table table-responsive aiz-table mb-0 footable footable-1 breakpoint-lg"
                                                    style="">
                                                    <thead>
                                                        <tr class="footable-header">
                                                            <th class="footable-first-visible">#</th>
                                                            <th>Name</th>
                                                            <th>Rating</th>
                                                            <th>Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>@php $i=1 @endphp
                                                        @foreach(App\TeacherReview::where('tutor_id',Auth::user()->id)->get()
                                                        as $review)
                                                        <tr>
                                                            <td class="footable-first-visible">{{$i++}}</td>
                                                            <td>@php
                                                                $stu_name=\App\User::where('id',$review->student_id)->first();
                                                                @endphp {{$stu_name->name}}</td>
                                                            <td>{{$review->rating}}</td>
                                                            <td>{{$review->comment}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="vtab11">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0 h6">Viewed Tutors</h5>
                                            </div>
                                            <div class="card-body">
                                                <table
                                                    class="table table-responsive aiz-table mb-0 footable footable-1 breakpoint-lg"
                                                    style="">
                                                    <thead>
                                                        <tr class="footable-header">
                                                            <th class="footable-first-visible">#</th>
                                                            <th>Name</th>
                                                            <th>Qualification</th>
                                                            <th>City</th>
                                                            <th>Area</th>
                                                            <th class="text-right footable-last-visible">Mobile No.</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php $i=1 @endphp
                                                        @php $student_number = App\ViewNumber::where('viewed_by_user',
                                                        Auth::user()->id)->where('user_type', 'student')->get(); @endphp
                                                        @foreach($student_number as $stud)
                                                        @php
                                                        $user_data=App\User::where('id',
                                                        $stud->viewed_user_id)->first();
                                                        $user_detail=App\UserDetail::where('user_id',$stud->viewed_user_id)->first();
                                                        @endphp
                                                        <tr>
                                                            <td class="footable-first-visible">{{$i++}}</td>
                                                            <td>{{$user_data->name}}</td>
                                                            <td>{{$user_detail->qualification}}</td>
                                                            <td>{{$user_detail->district}}</td>
                                                            <td>{{$user_detail->pincode}}</td>
                                                            <td class="text-right footable-last-visible">
                                                                @if($teacher_number != null)
                                                                <div class="view view1">
                                                                    <span><a
                                                                            href="tel:+91 - {{$user_data->phone_number}}">
                                                                            +91 -
                                                                            {{$user_data->phone_number}}</a></span>
                                                                </div>
                                                                @else
                                                                <div class="view">
                                                                    <span>View No.</span>
                                                                </div>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="vtab12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0 h6">Instruction</h5>
                                            </div>
                                            <div class="card-body">
                                            <h3>TUTOR DASHBOARD INSTRUCTIONS </h3>
                                            <p><b>Note : </b>After Verification only your profile will go live. </p>
                                            
                                            <p>1- You have to update your profile to get verified. To update it click on <strong> "MANAGE PROFILE" </strong>.</p>
                                            
                                            <p>2- Documents required to upload during profile update : <br>
                                            ~Profile Photo<br>
                                            ~Highest Qualification ~Certificate<br>
                                            ~Aadhar Card Front & Back Side.</p>
                                            
                                            <p>3-After Verification you will get TUTOR ID & BLUE TICK on your profile.</p> 
                                            
                                            <p>4- Click on <strong> "PLAN DETAILS" </strong> to check Plans.</p>
                                            
                                            <p>5- Click on <strong> "WALLET/ADD PLAN" </strong> to recharge your Wallet. Credit & Debit wallet money history will show here. </p>
                                            
                                            <p>6- <strong> VIEW & BUY LEADS </strong></p>
                                            Click here to find list of students enquries, you can filter enquires as per your requirement and view the contact number.</p>
                                            
                                            <p>7- <strong> LEAD MANGEMENT: </strong> Click here to view history of opened contact number of student enquiries.
                                            
                                            You can  also check history of notifications recived on mobile here.
                                            
                                            By Activating & Deactivating lead management button you can control notification of Students enquires which we send on mobile in text message.</p>
                                            
                                            <p>8- <strong> REVIEW - </strong> Students who give review about your shows under this section.</p>
                                            
                                            <p>9- <strong> HELP CENTER - </strong> You can send you queries/Complaints to us from here.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="vtab13">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0 h6">Instruction</h5>
                                            </div>
                                            <div class="card-body">
                                            <h3>STUDENT DASHBOARD  </h3>
                                            <p>1- To update your profile please click on <strong> "MANAGE PROFILE" </strong> . Here you need to update Class/Course/Subject and full address.</p>

                                            <p>2- <strong> PLAN DETAILS </strong> - Click here to find various plans details.</p>
                                            
                                            <p>3- <strong> MY WALLET /ADD PLAN </strong> - Click here to recharge your wallet. Credit & Debit wallet money history will show here.</p>
                                            
                                            <p>4- ALL TUTOR You can find all tutors list here, filter tutors as per your requirements. You can view there details & contact number. </p>
                                            
                                            <p>5- <strong> VIEWED TUTORS </strong>-Tutors whose contact number you have viewed, history of them will show here.</p>
                                            
                                            <p>6- <strong> POST REQUIREMENTS </strong>
                                            You can post a fresh tution requiments from here by filling up your learning needs.</p>
                                            
                                            <p>7- </strong> HELP CENTER </strong> You can send your queries/Complaints to us from here.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        <!-- Contact Section End -->
    </div>
    <script>
        $(document).ready(function () {
            $(".mybtn").click(function () {
                $.ajax({
                    type: 'GET',
                    url: '/get_plan',
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                });
            });
        });


        $(document).ready(function () {
            $("#plan").change(function () {
                var id = $(this).val();
                $.ajax({
                    type: 'GET',
                    url: '/get_amount/' + id,
                    success: function (data) {
                        console.log(data);
                        if (data.amount) {
                            $("#plan_price").val(data.amount);
                            $("#plan_id").val(data.id);
                        } else {
                            $("#plan_price").val(0);
                        }
                    }
                });
            });
        });
    </script>
    <!-- Main content End -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">RECHARGE WALLET</h4>
                </div>
                <form action="{{route('payu')}}" method="POST">
                    @csrf
                    <div class="modal-body gry-bg px-3 pt-3">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Plan Name <span class="text-danger">*</span>
                                </label>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">

                                    <select class="form-control plan" id="plan" name="plan_name" required="">
                                        <option value="" disabled selected>Select Plan</option>
                                        @foreach($plan as $item)
                                        <option value="{{$item->id}}" required="">{{$item->plan_name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Plan Price <span class="text-danger">*</span>
                                </label>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <input type="text" class="form-control plan" id="plan_price" name="amount" readonly>
                                    <input type="hidden" class="form-control plan" id="plan_id" name="plan_id">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary w-100 continue-pay-btn">Continue to pay</button>
                    </div>
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="firstname" value="{{Auth::user()->name}}">
                    <input type="hidden" name="email" value="{{Auth::user()->email}}">
                    <input type="hidden" name="phone" value="{{Auth::user()->phone_number}}">
                    <input name="surl" value="{{route('payumoney-success')}}" hidden />
                    <input name="furl" value="{{route('payumoney-cancel')}}" hidden />
                    <input type="hidden" name="service_provider" value="payu_paisa" />
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var maxGroup = 10;
            var y = 0;
            var maxField = maxGroup;
            var addButton = $('.add_button');
            var wrapper = $('.field_wrapper');
            var x = 1;
            $(addButton).click(function () {
                if (x < maxField) {
                    x++;
                    var b = ++y;
                    $(wrapper).append('<div class="field_wrapper_copy" style="margin-top: 10px;"><div class="row"><label for="example-text-input" class="col-md-2 col-form-label">Document Name:</label><div class="col-md-4"><input class="form-control result_name" type="text" name="result_name[]" required=""></div><div class="col-md-5"><input type="file" id="result_file_'+x+'"  class="form-control form-border img_file_size" required=""><input type="hidden" id="img_result_file_'+x+'" name="result_file[]"></div><a href="javascript:void(0);" class="btn-sm edit del remove_button"><i class="fa fa-trash"></i></a></div></div>');
                }
                $(".img_file_size").on("change", function () {
            uploadFile($(this).attr('id'));
                });
            });
            $(wrapper).on('click', '.remove_button', function (e) {
                var result = confirm("Are you sure you want to delete this element?");
                if (result) {
                    e.preventDefault();
                    $(this).parent('div').remove();
                    x--;
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            var maxGroup = 10;
            var y = 0;
            var maxField = maxGroup;
            var addButton = $('.add_certificate');
            var wrapper = $('.certificate_field');
            var x = 1;
            $(addButton).click(function () {
                if (x < maxField) {
                    x++;
                    var b = ++y;
                    $(wrapper).append('<div class="certificate_field_copy"style="margin-top: 10px;"><div class="row"><label for="example-text-input" class="col-md-2 col-form-label">Document Name:</label><div class="col-md-4"><input class="form-control certificate_name" type="text" id="certificate_name" name="certificate_name[]" required=""></div><div class="col-md-5"><input type="file" id="certificate_file_'+x+'"  class="form-control form-border img_file_size" required=""><input type="hidden" id="img_certificate_file_'+x+'" name="certificate_file[]"></div><a href="javascript:void(0);" class="btn-sm edit del remove_button"><i class="fa fa-trash"></i></a></div></div>');
                }
                $(".img_file_size").on("change", function () {
                    //alert(this.files[0].size);
                    // if(this.files[0].size > 300000) {
                    //   alert("Please upload file less than 300Kb. Thanks!!");
                    //   $(this).val('');
                    // }else{
                        uploadFile($(this).attr('id'));
                    // }
                    
                });
            });
            $(wrapper).on('click', '.remove_button', function (e) {
                var result = confirm("Are you sure you want to delete this element?");
                if (result) {
                    e.preventDefault();
                    $(this).parent('div').remove();
                    x--;
                }
            });
        });
         function uploadFile(id){
      var input = document.getElementById(id);
  file = input.files[0];
  if(file != undefined){
    formData= new FormData();
    if(!!file.type.match(/image.*/)){
      formData.append("image", file);
       formData.append("_token", "{{ csrf_token() }}");
      $.ajax({
           beforeSend: function(){
                              $('.ajax-loader').css("visibility", "visible");
                              },
        url: "{{route('image_upload_ajax')}}",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function(data){
          
            $('#img_'+id).val(data);
        },
        complete: function(){
    $('.ajax-loader').css("visibility", "hidden");
    $.growl.active({
                            title: "Image",
                            message: "Image Uploaded Successfully!"
                        });
  }
      });
    }else{
      alert('Not a valid image!');
    }
  }else{
    alert('Input something!');
  }
}
    </script>
    <!--- Start footer -->
    <footer id="rs-footer" class="rs-footer home9-style main-home">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 footer-widget md-mb-50">
                        <div class="footer-logo mb-30">
                            <a href="/"><img src="https://qalpedu.com/images/dark-logo1.png" alt=""></a>
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
    <!-- start scrollUp  -->
    <div id="scrollUp" class="orange-color"> <i class="fa fa-angle-up"></i> </div>
    <!-- End scrollUp  -->
    <!-- modernizr js -->
    <script src="{{ URL::asset('js/modernizr-2.8.3.min.js') }}"></script>
    <!-- jquery latest version -->
    <!-- Bootstrap v4.4.1 js -->
    <!--       <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script> -->
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
    <script type="text/javascript">
        function filter() {
            var key = $('#search').val();

            $.ajax({
                type: "GET",
                async: false,
                dataType: 'json',
                url: '/search_tutor_data', // script to validate in server side
                data: $("#search_form").serialize(),
                success: function (data) {
                    console.log(data.html);

                    if (data.html) {
                        $('#all_tutor').css("display", "block");
                        $('#all_tutor').empty();
                        $('#all_tutor').html(data.html);
                        $('#all_tutor1').css("display", "none");
                    } else {
                        $('#all_tutor').css("display", "none");
                        $('#all_tutor1').css("display", "block");

                    }


                }
            });
        }

        function filter_student() {
            var key = $('#student_key').val();

            $.ajax({
                type: "GET",
                async: false,
                dataType: 'json',
                url: '/search_student_data', // script to validate in server side
                data: $("#search_student").serialize(),
                success: function (data) {
                    console.log(data.html);
                    if (data.html) {
                        $('#all_student').css("display", "block");
                        $('#all_student').empty();
                        $('#all_student').html(data.html);
                        $('#all_student1').css("display", "none");
                    } else {
                        $('#all_student').css("display", "none");
                        $('#all_student1').css("display", "block");

                    }


                }
            });
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"
        integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css"
        integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
    <script>
        $(document).ready(function () {
            $('.select_search').selectize({
                sortField: 'text'
            });
        });
    </script>


    </body>
    <script src="{{ URL::asset('/js/jquery.growl.js')  }}"></script>

</html>
<!--- End Footer -->