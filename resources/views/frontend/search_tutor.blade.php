<!DOCTYPE html>
<html lang="zxx">
   <head>
      <!-- meta tag -->
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Best and professional home tutor in Varanasi, Lucknow - Qalpedu</title>
      <link rel="canonical" href="http://www.qalpedu.com/best-and-professional-home-tutor"/>
      <meta name="keyword" content="Best home tutor in Varanasi, Best home tutor in Lucknow, Professional home tutor in Varanasi, Professional home tutor in Lucknow, Math science tutor in varanasi, Ladies tutor in Varanasi, Class 9, 10, 11, 12, tutor in Varanasi">
      <meta name="description" content="For class 9, 10, 11, 12 best and professional home tutor in Varanasi & Lucknow are available now. Find math's science ladies tutor by checking their rating, review and fee">

     <!--Header Start-->
     @include('frontend/include/header')
     <!--Header End-->

      <!-- Main content Start -->
      <div class="main-content">
         <!-- Breadcrumbs Start -->
         <div class="rs-breadcrumbs breadcrumbs-overlay">
               <div class="breadcrumbs-text white-color">
                     <h1 class="page-title">Professional home tutors</h1>
                     <ul>
                        <li>
                           <a class="active" href="/">Home</a>
                        </li>
                        <li>All Tutor</li>
                     </ul>
               </div>
         </div>
         <!-- Breadcrumbs End -->
         <!-- Blog Section Start -->
         <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-md-12">
                     <div class="widget-area">
                       <div class="widget-archives mb-50 d-block d-sm-none">
                            <div>
                             <button class="btn btn-primary w-100" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Filter</button>
                            </div>
                           <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <form  action="#" method="GET" id="search_form_mobile">
                            @csrf
                             <div class="search-widget mb-25">
                               <div class="search-wrap">
                                   <input type="search" onkeyup="filter_mobile()" id="search_mobile"  placeholder="Name/Id/City/Pincode" name="key" class="search-input" value="">
                               </div>
                             </div>
                           <div class="form-group">
                                <label for="" class="form-labell dd">By Language</label>
                                <select class="form-control " name="language[]"
                                    onchange="filter_mobile()" >
                                    <option value="">Select Language</option>
                                    @foreach(App\Language::where('status','enable')->get() as
                                    $language)
                                    <option value="{{$language->name}}">{{$language->name}}
                                    </option>@endforeach
                                </select>
                            </div>
                        <div class="form-group">
                            <label for="" class="form-label dd">By Class/Course</label>
                            <select class="form-control " name="class[]" onchange="filter_mobile()"
                               >
                                <option value="">Select Class/Course</option>
                                @foreach(App\Course::where('status','enable')->get() as
                                $class)
                                <option value="{{$class->name}}">{{$class->name}}</option>
                                @endforeach
                            </select>
                        </div>
                      <div class="form-group">
                        <label for="" class="form-label dd">By Subject</label>
                        <select class="form-control " name="subject[]" onchange="filter_mobile()"
                            >
                            <option value="">Select Subject</option>
                            @foreach(App\Subject::where('status','enable')->get() as
                            $subject)
                            <option value="{{$subject->name}}">{{$subject->name}}
                            </option>@endforeach
                        </select>
                      </div>
                     </form>
                     </div>
                        </div>

                        <div class="widget-archives mb-50 d-none d-md-block">
                           <h3 class="widget-title">Filter By</h3>
                           <div class="filter-widget">
                               <!-- Skills Form -->
                               <div class="filter-form">
                                   <form  action="#" method="GET" id="search_form">
                                    @csrf
                                     <div class="search-widget mb-25">
                                       <div class="search-wrap">
                                          <input type="search" onkeyup="filter()" id="search"  placeholder="Name/Id/City/Pincode" name="key" class="search-input" value="">
                                       </div>
                                     </div>
                                    <div class="wd_50">
                                    <h5>By Language</h5>
                                    <div class="single-filter mb-30">
                                        @foreach(App\Language::where('status','enable')->get() as $language)
                                       <div class="check-box form-group mb-0">
                                           <input type="checkbox" name="language[]" onchange="filter()" id="check1" value="{{$language->name}}">
                                           <label for="check1">{{$language->name}}</label>
                                       </div>
                                       @endforeach
                                   </div>  
                                   
                                   <h5>By Class</h5>
                                   <div class="single-filter mb-30">
                                      @foreach(App\Course::where('status','enable')->get() as $class)
                                       <div class="check-box form-group mb-0">
                                           <input type="checkbox" name="class[]" onchange="filter()" value="{{$class->name}}">
                                           <label for="check1">{{$class->name}} </label>
                                       </div>
                                       @endforeach
                                   </div> 
                                   </div>
<!--                                   <div class="single-filter mb-30">
                                       <h5>By Specilization</h5>
                                       @foreach(App\Specilization::where('status','enable')->get() as $specilization)
                                       <div class="check-box form-group mb-0">
                                           <input type="checkbox" name="specilization[]"  onchange="filter()" value="{{$specilization->name}}">
                                           <label for="check1">{{$specilization->name}}</label>
                                       </div>
                                        @endforeach
                                   </div>-->
                                    <h5>By Subject</h5>
                                   <div class="single-filter mb-30">
                                       @foreach(App\Subject::where('status','enable')->get() as $subject)
                                       <div class="check-box form-group mb-0">
                                           <input type="checkbox" name="subject[]" onchange="filter()" value="{{$subject->name}}">
                                           <label for="check1">{{$subject->name}}</label>
                                       </div>
                                        @endforeach
                                   </div>       
                                   </form>
                               </div>                                 
                           </div>
                       </div>  
<!--                        <div class="recent-posts-widget mb-50">
                           <h3 class="widget-title">Recent Added Teacher</h3>
                           @foreach($teach as $item)
                           <div class="show-featured ">
                               <div class="post-img">
                                   <a href="/teacher_details/{{$item->id}}"><img src="{{ URL::asset('images/profile.png') }}" alt=""></a>
                               </div>
                               <div class="post-desc">
                                   <a href="/teacher_details/{{$item->id}}">{{$item->name}}</a>
                                   <span class="date">
                                    <i class="fa fa-book"></i>
                                       {{$item->user_details->qualification}}
                                   </span>
                               </div>
                           </div> 
                           @endforeach
                       </div>-->
                     </div>
                  </div>
                  <div class="col-lg-9 md-pr-15" id="search_data" style="display:block;">
                   @include('frontend/include/tutor')
                  </div>
                  <div class="col-lg-9 md-pr-15" id="search_data1" style="display:none;">
                      <div class="alert alert-info">
                          <strong><i class="fa fa-meh-o" aria-hidden="true"></i> !</strong> Data Not Found.
                           <a href="#" class="close" data-dismiss="alert">&times;</a>
                       </div>
                  </div>
               </div>
            </div>
            
         </div>
         <!-- Blog Section End -->
                     <div class="rs-newsletter style6 bg4 pt-100 md-pt-70 md-pb-60">
                <div class="container">
                    <div class="newsletter-wrap">
                        <div class="content-part mb-45 md-mb-30">
                            <h1 class="title mb-10">Best and Professional home tutor in Varanasi, Lucknow, and in other cities</h1>
                            <div class="sub-title">
                                <p class="pmr">Qalp Edu provides selected, well versed tutors  for your ward bright future at a reasonable cost for all subjects, especially for English, Maths and Science.</p>
                                 <p class="pmr">Tutors who are experts in their fields and subjects are selected by Qalp Edu after a short interview and verification process.</p>  
                                  <p class="pmr">Select your best & suitable tutors by analysing their review and Details, which will be helpful in enhancing  the student's skills and knowledge. 
</p>
                                   <p class="pmr">home tutors at our platform are retired experienced teaching professionals and educational experts, school and college working teachers & Professors, College going selected brilliant and bright students with teaching skills. 
                                    </p>
                                    <p class="pmr">Home based tuitions offer focused attention on the pupil and aid them in learning better.</p>
                                    <p class="pmr">Maths and science tutors may be necessary for students who are weak in the subject and intend to take up courses that involve arithmetic, calculus, advanced trigonometry, physics, Organic chemistr, Physical chemistry, biology & others. </p>
                                    <p class="pmr">These specialized tutors may factor in different aspects before commissioning a fee for their services. Above is a vast list of Home Tutors in  Lucknow, Varanasi and in other cities, feel free to contact them and book your free demo now.
                                        </p><br>
                            <h2 class="title mb-10">How can Qalpedu helps in find the best home tutor</h2> 
                            <div class="sub-title">
                                <p>With the increasing competition among students to work hard and excel in their academic results, home tutors are here to help them. They have the exact expertise and guidance to teach students with effective learning techniques. They have a systematic teaching approach that helps the students learn everything that they should within the specified time frame. They make sure to solve the doubts and also arrange competitive tests to make sure how much the students have understood. For parents or students who are looking for the best home tutors in varanasi and lucknow, Qalpedu is their one-stop destination. We will help you connect with the best home tutors in your city and also have all the information about their contact details, fees charged by them, the subjects they teach, their years of experience in teaching, and also the ratings and reviews given by other students.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      <!-- Main content End --> 


                <!--- Start footer -->
       @include('frontend/include/footer')
      <!--- End Footer -->

    
     <script type="text/javascript">
   
   $(document).on('click', '.tutor a', function(event){
   event.preventDefault(); 
   var page = $(this).attr('href').split('page=')[1];
   fetch_data(page);
   fetch_data_mobile(page);
   
   });

    function fetch_data(page){
        
             var key=$('#search').val();
            
            $.ajax({
                type:"GET",
                async: false,
                dataType: 'json',
                url:  '/search?page='+page, // script to validate in server side
                data: $("#search_form").serialize(),
                success: function(data) {
                    console.log(data.html);
                    var empty=data.html;
                    if(empty == '')
                    {
                        $('#search_data').empty();
                        $('#search_data').html(data.html);
                        $('#search_data1').css("display", "block");
                        $('#search_data').css("display", "none");
                        return false;
                    }
                    else
                    {
                    $('#search_data').empty();
                    $('#search_data').html(data.html);
                    $('#search_data').css("display", "block");
                    $('#search_data1').css("display", "none");
                    }


                }
            });
        }
        
    function fetch_data_mobile(page){
        
             var key=$('#search_mobile').val();
            
            $.ajax({
                type:"GET",
                async: false,
                dataType: 'json',
                url:  '/search?page='+page, // script to validate in server side
                data: $("#search_form_mobile").serialize(),
                success: function(data) {
                    console.log(data.html);
                    var empty=data.html;
                    if(empty == '')
                    {
                        $('#search_data').empty();
                        $('#search_data').html(data.html);
                        $('#search_data1').css("display", "block");
                        $('#search_data').css("display", "none");
                        return false;
                    }
                    else
                    {
                    $('#search_data').empty();
                    $('#search_data').html(data.html);
                    $('#search_data').css("display", "block");
                    $('#search_data1').css("display", "none");
                    }


                }
            });
        }    
        
    function filter(){
           var page = $('#current_page_number').val();
            fetch_data(page);
      }
        
    function filter_mobile(){
           var page = $('#current_page_number').val();
            fetch_data_mobile(page);
      }  




     </script>