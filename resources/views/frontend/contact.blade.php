<!DOCTYPE html>
<html lang="zxx">
<head> 
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Contact Us | Best Home Tutors in India | QALP EDU</title>
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
                    <h1 class="page-title">Contact</h1>
                    <ul>
                        <li>
                            <a class="active" href="index">Home</a>
                        </li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->               

    		<!-- Contact Section Start -->
    		<div class="contact-page-section orange-color pt-100 pb-100 md-pt-70 md-pb-70">
            	<div class="container">
                      <div class="row contact-address-section">
        				<div class=" col-lg-4 col-md-12 lg-pl-0 md-mb-30">
        					<div class="contact-info contact-address">
        						<div class="icon-part">
        							<i class="fa fa-map-marker"></i>
        						</div>
        						<div class="content-part">
	        						<h5 class="info-subtitle">Address</h5>
    	        						<h4 class="info-title">Qalpedu, Near Daitraveer baba mandir,<br>Lahuraveer, Varanasi </h4>
	        					</div>
        					</div>
        				</div>
        				<div class=" col-lg-4 col-md-12 md-mb-30">
        					<div class="contact-info contact-mail">
        						<div class="icon-part">
        							<i class="fa fa-envelope-o"></i>
        						</div>
        						<div class="content-part">
	        						<h5 class="info-subtitle">Mail us on</h5>
    	        						<h4 class="info-title"><a href="mailto:support@qalpedu.com"> Support@qalpedu.com</a></h4>
	        					</div>
        					</div>
        				</div>
        				<div class=" col-lg-4 col-md-12 lg-pr-0">
        					<div class="contact-info contact-phone">
        						<div class="icon-part">
        							<i class="fa fa-phone"></i>
        						</div>
        						<div class="content-part">
	        					<h5 class="info-subtitle">Whatsapp us on Head Office number</h5>
    	        						<h4 class="info-title"><a href="tel:+91-7376966308">+91-7376966308</a></h4>
	        					</div>
        					</div>
            			</div>
            		</div>
            		<div class="row align-items-end contact-bg1">
            			<div class="col-lg-4 md-pt-50 lg-pr-0">
            				<div class="contact-image">
            					<img src="images/contact/2.png" alt="Contact Images">
            				</div>
            			</div>
            			<div class="col-lg-8 lg-pl-0">
			        		<div class="rs-quick-contact new-style">
                                <div class="inner-part mb-35">
                                    <h2 class="title mb-15">Get In Touch</h2>
                                </div>
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                <strong>Success!</strong> {{ $message }}
                                </div>
                                 @endif
                                    <form action="{{route('enquiry.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <div class="row">
                                        <div class="col-lg-6 mb-20 col-md-6 col-sm-6">
                                            <input class="from-control" type="text"  name="name" placeholder="Name" required="">
                                        </div> 
                                        <div class="col-lg-6 mb-20 col-md-6 col-sm-6">
                                            <input class="from-control" type="text"  name="email" placeholder="Email" required="">
                                        </div>   
                                        <div class="col-lg-6 mb-20 col-md-6 col-sm-6">
                                            <input class="from-control" type="text" name="phone" placeholder="Phone" required="">
                                        </div>   
                                        <div class="col-lg-6 mb-20 col-md-6 col-sm-6">
                                            <input class="from-control" type="text" name="purpose" placeholder="Subject" required="">
                                        </div>
                                     
                                        <div class="col-lg-12 mb-40">
                                            <textarea class="from-control" name="message" placeholder=" Message" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input class="btn-send" type="submit" name="submit" value="Submit Now">
                                    </div>       
                                </form>
                            </div> 
            			</div>
            		</div>
            	</div>
            </div>
            <!-- Contact Section End -->  
        </div> 
        <!-- Main content End --> 
 
            <!--- Start footer -->
       @include('frontend/include/footer')
      <!--- End Footer -->