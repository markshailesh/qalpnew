<!DOCTYPE html>
<html lang="zxx">
<head> 
        <!-- meta tag -->
        <meta charset="utf-8">
       <title>Blog Details | Best Home Tutors in India | QALP EDU</title>
       <meta name="description" content="Professional Home Tutors, Now in your city. Find Tutors Online by checking, Reviews, Ratings, Fee Details and choose from the best Tuition Classes , Trainers matching your requirements">
       <meta name="keyword" content="Qalp Edu is a Tutor providing company in india offering home tuitions for 9th, 10th, 11th, 12th, IIT, NEET, physics, math, science, english,  yoga, music and many more. Hire now! , best home tutors in varanasi, lucknow, prayagraj, noida, gorakhpur in india.">
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
                    <h1 class="page-title">Blog Details</h1>
                    <ul>
                        <li>
                            <a class="active" href="index">Home</a>
                        </li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

	       <!-- Blog Section Start -->
            <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                                              <div class="col-lg-8 pr-50 md-pr-15">
                          @php $item=$blog_details @endphp
                           <div class="blog-deatails">
                                <div class="bs-img">
                                    <a href="blog-details/{{$item->slug}}"><img src="/uploads/blog/{{$item->image}}" alt="{{$item->title}}"></a>
                                </div>
                               <div class="blog-full">
                                   <ul class="single-post-meta">
                                        <li>
                                           <span class="p-date"> <i class="fa fa-user-o"></i> By Admin </span>
                                       </li> 
                                       <li>
                                           <span class="p-date"> <i class="fa fa-calendar-check-o"></i>{{$item->created_at}} </span>
                                       </li> 
                                   </ul>
                                   <h2 class="title mb-40">{{$item->title}}</h2>
                                   <blockquote><p>{{$item->short_description}}</p></blockquote>
                                    <div class="blog-desc">
                                       <p>
                                           {{$item->full_description}}
                                       </p>
                                   </div>
                               </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-12 order-last">
                            <div class="widget-area">
                              <div class="recent-posts-widget mb-50">
                                <h3 class="widget-title">Recent Blog</h3>
                             @foreach($ser as $item)
                                <div class="show-featured ">
                                    <div class="post-img">
                                        <a href="/blog-details/{{$item->slug}}"><img src="/uploads/blog/{{$item->image}}" alt="{{$item->title}}"></a>
                                    </div>
                                    <div class="post-desc">
                                        <a href="/blog-details/{{$item->slug}}">{{$item->title}}</a>
                                        <span class="date">
                                            <i class="fa fa-calendar"></i>
                                            {{$item->created_at}}
                                        </span>
                                    </div>
                                </div> 
                              @endforeach
                            </div>  
                                {{-- <div class="widget-archives mb-50">
                                    <h3 class="widget-title">Categories</h3>
                                    <ul>
                                        <li><a href="#">College</a></li>
                                        <li><a href="#">High School</a></li>
                                        <li><a href="#">Primary</a></li>
                                        <li><a href="#">School</a></li>
                                        <li><a href="#">University</a></li>
                                    </ul>
                                </div>
                                  <div class="recent-posts mb-50">
                                      <h3 class="widget-title">Meta</h3>
                                      <ul>
                                          <li><a href="#">Log in</a></li>
                                          <li><a href="#">Entries feed</a></li>
                                          <li><a href="#">Comments feed</a></li>
                                          <li><a href="#">WordPress.org</a></li>
                                      </ul>
                                  </div> --}}
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- Blog Section End -->  
            </div> 
            <!-- Main content End --> 

                      <!--- Start footer -->
       @include('frontend/include/footer')
      <!--- End Footer -->