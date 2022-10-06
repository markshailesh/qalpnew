


     <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer home9-style main-home">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12 footer-widget md-mb-50">
                            <div class="footer-logo mb-30">
                                <a href="/"><img src="https://qalpedu.com/images/dark-logo1.png" alt=""></a>
                            </div>
                              <div class="textwidget pr-60 md-pr-15"><p class="white-color">Are you looking to excel in your academics but require a one-to-one session from a reliable professional? Sometimes, all it takes is the right guidance and hence our tutors are very considerate and patient to ensure you’re comfortable to learn at your own pace. </p>
                              </div>
                              <ul class="footer_social">  
                                  <li> 
                                      <a href="https://www.facebook.com/kalp.educare.75" target="_blank"><span><i class="fa fa-facebook"></i></span></a> 
                                  </li>
                                  <li> 
                                      <a href="https://www.instagram.com/qalpedu/" target="_blank"><span><i class="fa fa-instagram"></i></span></a> 
                                  </li>
                                   <li> 
                                      <a href="https://twitter.com/qalpedu" target="_blank"><span><i class="fa fa-twitter"></i></span></a> 
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
                                <!--<li><a href="{{ URL::asset('sitemap') }}">Sitemap</a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">                    
                    <div class="row y-middle">
                        <div class="col-lg-6">
                            <div class="copyright">
                               <p>&copy; 2021 All Rights Reserved. Developed By <a href="https://www.techuptechnologies.com/">Techupnow Technologies Pvt Ltd.</a></p>
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


        <!---- Start Model -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <div class="col-lg-6" style="padding-right: 1px; padding-left: 1px;">
                     <div class="effects-bg apply-bgs">
                        <div class="content-parts">
                        </div>
                     </div>
                     <div class="content">
                           <h3 class="title">Are you a Parent / Student?</h3>
                           <div class="btn-part">
                              <a class="readon2 cta-btn" href="{{ URL::asset('student_sign_up') }}">Create Account as a Student</a>
                           </div>
                           </div>
                  </div>
                  <div class="col-lg-6" style="padding-right: 1px; padding-left: 1px;">
                     <div class="effects-bg enroll-bgs">
                        <div class="content-parts">
                        </div>
                     </div>
                      <div class="content">
                           <h3 class="title">Are you a Teacher?</h3>
                           <div class="btn-part">
                              <a class="readon2 cta-btn" href="{{ URL::asset('teacher_sign_up') }}">
                              Create Account as a Tutor</a>
                              </div>
                           </div>
                  </div>
               </div>
            </div>
    </div>
  </div>
</div>
        <!-- End Moodel -->

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

      <!-- modernizr js -->
      <script src="{{ URL::asset('js/modernizr-2.8.3.min.js') }}"></script>
      <!-- jquery latest version -->
      <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
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
      <!-- counter top js -->
      <!-- magnific popup js -->
      <script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>      
      <!-- plugins js -->
      <script src="{{ URL::asset('js/plugins.js') }}"></script>
      <!-- main js -->
      <script src="{{ URL::asset('js/main.js') }}"></script>
      <script src="{{ URL::asset('/js/jquery.growl.js')  }}"></script>
      <!--<script src="http://skote-v.laravel.themesbrand.com/assets/js/pages/form-wizard.init.js"></script>-->
   </body>
</html>
