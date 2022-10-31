        <!-- favicon -->
      <link rel="apple-touch-icon" href="apple-touch-icon.html">
      <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('images/fav-orange.png') }}">
      <!-- Bootstrap v4.4.1 css -->
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
      <!-- font-awesome css -->
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}">
      <!-- animate css -->
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/animate.css') }}">
      <!-- owl.carousel css -->
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/owl.carousel.css') }}">
      <!-- slick css -->
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/slick.css') }}">
      <!-- off canvas css -->
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/off-canvas.css') }}">
      <!-- linea-font css -->
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('fonts/linea-fonts.css') }}">
      <!-- flaticon css  -->
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('fonts/flaticon.css') }}">
      <!-- magnific popup css -->
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/magnific-popup.css') }}">
      <!-- Main Menu css -->
      <link rel="stylesheet" href="{{ URL::asset('css/rsmenu-main.css') }}">
      <!-- spacing css -->
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/rs-spacing.css') }}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
      <!-- responsive css -->
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/responsive.css') }}">
      <link rel="stylesheet" href="{{ URL::asset('/css/jquery.growl.css')  }}">
  </head>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "name": "Qalp Educare",
  "url": "http://www.qalpedu.com/",
  "logo": "http://www.qalpedu.com/images/dark-logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "7376966308",
    "contactType": "customer service",
    "areaServed": "IN",
    "availableLanguage": "en"
  }
}
</script>
<style>
.nav-style-separated ul>li:not(:last-child)>a:after {
    background: #d9d9d9c4 none repeat scroll 0 0;
    content: "";
    height: 10px;
    margin-top: -2px;
    position: absolute;
    top: 48%;
    width: 1px;
    margin-left: 12px;
}
</style>
<body class="defult-home">
      <!--Preloader area start here--
        <div id="loader" class="loader orange-color">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="/images/lite-logo.png" alt="">
                </div>
            </div>
        </div>
        <!--Preloader area End here-->

    <!--Full width header Start-->
        <div class="full-width-header header-style1 home8-style4">
  <!--Header Start-->
            <header id="rs-header" class="rs-header">
                <!-- Topbar Area Start -->
                <div class="topbar-area home8-topbar">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-md-7">
                                <ul class="topbar-contact">
                              <li>
                                 <i class="fa fa-home"></i>
                                 Welcome to Qalp Educare..
                              </li>
                           </ul>
                            </div>
                            <div class="col-md-5 text-right">
                                <ul class="topbar-right">
                                @if(!empty(Auth::User()))
                              <li class="login-register">
                                 <i class="fa fa-sign-in"></i>
                                  <a href="{{ URL::asset('signOut') }}">SignOut</a>
                              </li>
                              <li class="btn-part">
                                 <a class="apply-btn" href="{{ URL::asset('dashboard') }}"><i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }}</a>
                              </li>
                                @else
                              <li class="login-register">
                                 <i class="fa fa-sign-in"></i>
                                  <a href="{{ URL::asset('sign_in') }}" class="apply-btn wd_85">Login</a>
                                  <a class="apply-btn wd_85" data-toggle="modal" data-target="#exampleModal">Register</a>
                              </li>
                            @endif
                           </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Topbar Area End -->

                <!-- Menu Start -->
                <div class="menu-area menu-sticky innerpage">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-lg-1">
                              <div class="logo-cat-wrap">
                                  <div class="logo-part">
                                      <a href="{{ URL::asset('/') }}">
                                          <img class="ab" src="{{ URL::asset('images/dark-logo.png') }}" alt="">
                                      </a>
                                  </div>
                              </div>
                            </div>
                            <div class="col-lg-10">
                              <div class="rs-menu-area">
                                  <div class="main-menu">
                                        <div class="mobile-menu">
                                            <a class="rs-menu-toggle" id="nav-expander">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                        </div>
                                        <nav class="rs-menu nav-style-separated">
                                    <ul class="nav-menu">
                                       <li class="menu-item active">
                                          <a href="{{ URL::asset('/') }}">Home</a>
                                       </li>
                                       <li class="menu-item">
                                          <a href="{{ URL::asset('/about') }}">About Us</a>
                                       </li>
                                       <li class="menu-item">
                                          <a href="{{ URL::asset('/post_requirements') }}">Post Requirements</a>
                                       </li>
                                       {{-- <li class="menu-item">
                                          <a href="{{ URL::asset('/apply_for_job') }}">Apply For Jobs</a>
                                       </li> --}}
                                       <li class="menu-item">
                                          <a href="{{ URL::asset('/timeline_and_blog') }}">Timeline & Blogs</a>
                                       </li>
                                        @if(!empty(Auth::User()) && Auth::user()->user_type=='student')
                                           <li class="menu-item">
                                              <a href="{{ URL::asset('/best-and-professional-home-tutor') }}">Find A Tutor</a>
                                           </li>
                                        @else
                                        <li class="menu-item">
                                              <a href="{{ URL::asset('/best-and-professional-home-tutor') }}">All Tutor</a>
                                           </li>

                                        @endif
                                       <li class="menu-item">
                                          <a href="{{ URL::asset('/how_it_works') }}">How it Works</a>
                                       </li>
                                       <li class="menu-item">
                                          <a href="{{ URL::asset('/contact') }}">Contact</a>
                                       </li>
                                    </ul>
                                        </nav>
                                  </div> <!-- //.main-menu -->

                              </div>
                            </div>
                            <div class="col-lg-1">
                                <div>
                                    <a class="apply-btns" href="https://qalpedu.com/payu-money-payment">Pay Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->


            <nav class="right_menu_togle">
                    <div class="close-btn">
                        <div id="nav-close">
                            <div class="line">
                                <span class="line1"></span>
                                <span class="line2"></span>
                            </div>
                        </div>
                    </div>
                    <div class="canvas-logo">
                        <a href="index.html"><img src="https://qalpedu.com/images/dark-logo.png" alt="logo"></a>
                    </div>
                            <nav class="rs-menu">
                                    <ul class="nav-menu">
                                       <li class="menu-item active">
                                          <a href="{{ URL::asset('/') }}">Home</a>
                                       </li>
                                       <li class="menu-item">
                                          <a href="{{ URL::asset('/about') }}">About Us</a>
                                       </li>
                                       <li class="menu-item">
                                          <a href="{{ URL::asset('/post_requirements') }}">Post Requirements</a>
                                       </li>
                                       <li class="menu-item">
                                          <a href="{{ URL::asset('/apply_for_job') }}">Apply For Jobs</a>
                                       </li>
                                       <li class="menu-item">
                                          <a href="{{ URL::asset('/timeline_and_blog') }}">Timeline & Blogs</a>
                                       </li>
                                       <li class="menu-item">
                                          <a href="{{ URL::asset('/best-and-professional-home-tutor') }}">Find A Tutor</a>
                                       </li>
                                       <li class="menu-item">
                                          <a href="{{ URL::asset('/how_it_works') }}">How it Works</a>
                                       </li>
                                       <li class="menu-item">
                                          <a href="{{ URL::asset('/contact') }}">Contact</a>
                                       </li>
                                       <li>
                                        <a class="apply-btns" href="https://qalpedu.com/payu-money-payment">Pay Now</a>
                                       </li>

                                    </ul>
                            </nav>
                    <div class="canvas-contact">
                        <ul class="social">
                            <li> <a href="https://www.facebook.com/kalp.educare.75" target="_blank"><span><i class="fa fa-facebook"></i></span></a> </li>
                            <li> <a href="https://www.instagram.com/qalpedu/" target="_blank"><span><i class="fa fa-instagram"></i></span></a> </li>
                            <li> <a href="https://twitter.com/qalpedu" target="_blank"><span><i class="fa fa-twitter"></i></span></a> </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--Header End-->
                    </div>
        <!--Full width header End-->
