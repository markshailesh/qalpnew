                <!--Header Start-->
                <header id="rs-header" class="rs-header">
               <!-- Start Topbar-->
               <div class="topbar-area home9-topbar">
                  <div class="container">
                     <div class="row y-middle">
                        <div class="col-md-7">
                           <ul class="topbar-contact">
                              <li>
                                 <i class="flaticon-phone"></i>
                                 <a href="tel:+91-XXXXXXXXXX">+91-XXXXXXXXXX</a>
                              </li>
                              <li>
                                 <i class="flaticon-email"></i>
                                 <a href="mailto:info@demo.com">info@demo.com</a>
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
                                
                                @else
                              <li class="login-register">
                                 <i class="fa fa-sign-in"></i>
                                  <a href="{{ URL::asset('sign_in') }}">Login</a>/<a data-toggle="modal" data-target="#exampleModal">Register</a>
                              </li>

                            @endif
                              <li class="btn-part">
                                 <a class="apply-btn" href="#">Apply Now</a>
                              </li>
                           </ul>
                            </div>
                     </div>
                  </div>
               </div>
               <!-- end Topbar-->
                    <!-- Menu Start -->
                    <div class="menu-area menu-sticky">
                        <div class="container">
                            <div class="row y-middle">
                                <div class="col-lg-2">
                                    <div class="logo-cat-wrap">
                                        <div class="logo-part">
                                            <a href="{{ URL::asset('/') }}">
                                                <img class="normal-logo" src="images/lite-logo.png" alt="">
                                                <img class="sticky-logo" src="images/dark-logo.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 text-right">
                                  <div class="rs-menu-area">
                                      <div class="main-menu">
                                          <div class="mobile-menu">
                                              <a class="rs-menu-toggle">
                                                  <i class="fa fa-bars"></i>
                                              </a>
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
                                          <a href="{{ URL::asset('/search_tutor') }}">Find A Tutor</a>
                                       </li>
                                       @if(!empty(Auth::User()))
                                       <li class="menu-item d-none" >
                                          <a href="{{ URL::asset('/signOut') }}">SignOut</a>
                                       </li>
                                    @else
                                    <li class="menu-item d-none" >
                                        <a href="{{ URL::asset('/sign_in') }}">Login</a>
                                     </li>
                                     @endif
                                    </ul>
                                          </nav>                                       
                                      </div> <!-- //.main-menu -->
                                    
                                  </div>
                                </div>
                                <div class="col-lg-2 text-right">
                                    <div class="expand-btn-inner">
                                        <ul>
                                          
                                            <li>
                                                <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                                    <i class="flaticon-search"></i>
                                                </a>
                                            </li>
                                            <li class="user-icon last-icon">
                                                <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu End --> 
                </header>
                <!--Header End-->