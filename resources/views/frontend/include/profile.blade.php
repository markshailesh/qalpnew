
<style>
.position-ref {

    display: none !important;

}
.wizard-content-left {
  background-blend-mode: darken;
  background-color: rgba(0, 0, 0, 0.45);
  background-image: url("https://i.ibb.co/X292hJF/form-wizard-bg-2.jpg");
  background-position: center center;
  background-size: cover;
  height: 100vh;
  padding: 30px;
}
.wizard-content-left h1 {
  color: #ffffff;
  font-size: 38px;
  font-weight: 600;
  padding: 12px 20px;
  text-align: center;
}

.form-wizard {
}
.form-wizard .wizard-form-radio {
  display: inline-block;
  margin-left: 5px;
  position: relative;
}
.form-wizard .wizard-form-radio input[type="radio"] {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  background-color: #dddddd;
  height: 25px;
  width: 25px;
  display: inline-block;
  vertical-align: middle;
  border-radius: 50%;
  position: relative;
  cursor: pointer;
}
.form-wizard .wizard-form-radio input[type="radio"]:focus {
  outline: 0;
}
.form-wizard .wizard-form-radio input[type="radio"]:checked {
  background-color: #3a7f79;
}
.form-wizard .wizard-form-radio input[type="radio"]:checked::before {
  content: "";
  position: absolute;
  width: 10px;
  height: 10px;
  display: inline-block;
  background-color: #ffffff;
  border-radius: 50%;
  left: 1px;
  right: 0;
  margin: 0 auto;
  top: 8px;
}
.form-wizard .wizard-form-radio input[type="radio"]:checked::after {
  content: "";
  display: inline-block;
  webkit-animation: click-radio-wave 0.65s;
  -moz-animation: click-radio-wave 0.65s;
  animation: click-radio-wave 0.65s;
  background: #000000;
  content: '';
  display: block;
  position: relative;
  z-index: 100;
  border-radius: 50%;
}
.form-wizard .wizard-form-radio input[type="radio"] ~ label {
  padding-left: 10px;
  cursor: pointer;
}
.form-wizard .form-wizard-header {
  text-align: center;
}
.form-wizard .form-wizard-next-btn, .form-wizard .form-wizard-previous-btn, .form-wizard .form-wizard-submit {
  background-color: #3a7f79;
  color: #ffffff;
  display: inline-block;
  min-width: 100px;
  min-width: 120px;
  padding: 10px;
  text-align: center;
}
.form-wizard .form-wizard-next-btn:hover, .form-wizard .form-wizard-next-btn:focus, .form-wizard .form-wizard-previous-btn:hover, .form-wizard .form-wizard-previous-btn:focus, .form-wizard .form-wizard-submit:hover, .form-wizard .form-wizard-submit:focus {
  color: #ffffff;
  opacity: 0.6;
  text-decoration: none;
}
.form-wizard .wizard-fieldset {
  display: none;
}
.form-wizard .wizard-fieldset.show {
  display: block;
}
.form-wizard .wizard-form-error {
  display: none;
  background-color: #dc3545;
  position: absolute;
  left: 10px;
  right: 0;
  bottom: 0;
  height: 2px;
  width: 95%;
}
.form-wizard .form-wizard-previous-btn {
  background-color: #3a7f79;
}
.form-wizard .form-control {
  font-weight: 300;
  height: auto !important;
    padding: 7px 5px;
  border: none;
}
label {
    display: inline-block;
    margin-bottom: 0.5rem;
    font-weight: 300;
    margin-top: 4px;
}

.form-wizard .form-group {
  position: relative;
  margin: 10px 0;
}
.form-wizard .wizard-form-text-label {
    position: absolute;
    left: 10px;
    top: 0px;
    transition: 0.2s linear all;
}
.form-wizard .focus-input .wizard-form-text-label {
  color: #3a7f79;
  top: -28px;
  transition: 0.2s linear all;
  font-size: 12px;
}
.form-wizard .form-wizard-steps {
  margin: 10px 0;
}
.form-wizard .form-wizard-steps li {
    width: 32.2%;
    float: left;
    position: relative;
    background: #3a7f791c none repeat scroll 0 0;
    margin-right: 7px;
    padding: 5px;
    color: #3a7f79;
    font-weight: 600;
}
.form-wizard .form-wizard-steps li .active{
    background:#333;
}
.form-wizard .form-wizard-steps li span {
  border-radius: 50%;
  display: inline-block;
  height: 40px;
  line-height: 40px;
  position: relative;
  text-align: center;
  width: 40px;
  z-index: 1;
  border: 2px solid;
}
.form-wizard .form-wizard-steps li:last-child::after {
  width: 50%;
}
.form-wizard .form-wizard-steps li.active span, .form-wizard .form-wizard-steps li.activated span {
  background-color: #3a7f79;
  color: #ffffff;
}
.form-wizard .wizard-password-eye {
  position: absolute;
  right: 32px;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
}

@keyframes click-radio-wave {
  0% {
    width: 25px;
    height: 25px;
    opacity: 0.35;
    position: relative;
  }
  100% {
    width: 60px;
    height: 60px;
    margin-left: -15px;
    margin-top: -15px;
    opacity: 0.0;
  }
}
@media screen and (max-width: 767px) {
  .wizard-content-left {
    height: auto;
  }
  .form-wizard .form-wizard-steps li span {
    border-radius: 50%;
    display: inline-block;
    height: 30px;
    line-height: 28px;
    position: relative;
    text-align: center;
    width: 30px;
    z-index: 1;
    border: 2px solid;
}
.form-wizard .form-wizard-steps li {
    width: 32.2%;
    float: left;
    position: relative;
    background: #3a7f791c none repeat scroll 0 0;
    margin-right: 3px;
    padding: 2px;
    color: #3a7f79;
    font-weight: 600;
    font-size: 11px;
}
}

</style>

<script>
    jQuery(document).ready(function() {
	// click on next button
	jQuery('.form-wizard-next-btn').click(function() {
		var parentFieldset = jQuery(this).parents('.wizard-fieldset');
		var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
		var next = jQuery(this);
		var nextWizardStep = true;
		parentFieldset.find('.wizard-required').each(function(){
			var thisValue = jQuery(this).val();

			if( thisValue == "") {
				jQuery(this).siblings(".wizard-form-error").slideDown();
				nextWizardStep = false;
			}
			else {
				jQuery(this).siblings(".wizard-form-error").slideUp();
			}
		});
		if( nextWizardStep) {
			next.parents('.wizard-fieldset').removeClass("show","400");
			currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',"400");
			next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show","400");
			jQuery(document).find('.wizard-fieldset').each(function(){
				if(jQuery(this).hasClass('show')){
					var formAtrr = jQuery(this).attr('data-tab-content');
					jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
						if(jQuery(this).attr('data-attr') == formAtrr){
							jQuery(this).addClass('active');
							var innerWidth = jQuery(this).innerWidth();
							var position = jQuery(this).position();
							jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
						}else{
							jQuery(this).removeClass('active');
						}
					});
				}
			});
		}
	});
	//click on previous button
	jQuery('.form-wizard-previous-btn').click(function() {
		var counter = parseInt(jQuery(".wizard-counter").text());;
		var prev =jQuery(this);
		var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
		prev.parents('.wizard-fieldset').removeClass("show","400");
		prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show","400");
		currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',"400");
		jQuery(document).find('.wizard-fieldset').each(function(){
			if(jQuery(this).hasClass('show')){
				var formAtrr = jQuery(this).attr('data-tab-content');
				jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
					if(jQuery(this).attr('data-attr') == formAtrr){
						jQuery(this).addClass('active');
						var innerWidth = jQuery(this).innerWidth();
						var position = jQuery(this).position();
						jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
					}else{
						jQuery(this).removeClass('active');
					}
				});
			}
		});
	});
	//click on form submit button
	jQuery(document).on("click",".form-wizard .form-wizard-submit" , function(){
		var parentFieldset = jQuery(this).parents('.wizard-fieldset');
		var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
		parentFieldset.find('.wizard-required').each(function() {
			var thisValue = jQuery(this).val();
			if( thisValue == "" ) {
				jQuery(this).siblings(".wizard-form-error").slideDown();
			}
			else {
				jQuery(this).siblings(".wizard-form-error").slideUp();
			}
		});
	});
	// focus on input field check empty or not
	jQuery(".form-control").on('focus', function(){
		var tmpThis = jQuery(this).val();
		if(tmpThis == '' ) {
			jQuery(this).parent().addClass("focus-input");
		}
		else if(tmpThis !='' ){
			jQuery(this).parent().addClass("focus-input");
		}
	}).on('blur', function(){
		var tmpThis = jQuery(this).val();
		if(tmpThis == '' ) {
			jQuery(this).parent().removeClass("focus-input");
			jQuery(this).siblings('.wizard-form-error').slideDown("3000");
		}
		else if(tmpThis !='' ){
			jQuery(this).parent().addClass("focus-input");
			jQuery(this).siblings('.wizard-form-error').slideUp("3000");
		}
	});
});

$(document).ready(function(){
    $(".img_file_size").on("change", function () {
        //alert(this.files[0].size);
        // if(this.files[0].size > 300000) {
        //   alert("Please upload file less than 300Kb. Thanks!!");
        //   $(this).val('');
        // }else{
            uploadFile($(this).attr('id'));
        //}
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



});

</script>

@if (Auth::user()->user_type == "teacher")
<!-- -- Teacher Details -- -->
<section class="wizard-section">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic Info</h5>
        </div>
        <div class="card-body">
            <div class="form-wizard">
               <form id="upload_form" action="{{route('update_teacher', Auth::user()->id)}}" , method="POST" enctype="multipart/form-data">
            		@csrf
                    <div class="form-wizard-header">
                        <ul class="list-unstyled form-wizard-steps clearfix">
                            <li class="active"><span>1.</span> Basic Information</li>
                            <li><span>2.</span> Qualification & Experience</li>
                            <li><span>3.</span> Upload Documents</li>
                        </ul>
                    </div>
                    <fieldset class="wizard-fieldset show">
                        <h5> Basic Information</h5>
                        <div class="col-md-12">
                            <label>Full Name*</label>
                            <input type="text" class="form-control wizard-required" placeholder="Full name" name="name"
                                value="{{ Auth::user()->name }}" disabled="">
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label>Registered Mobile No.*</label>
                                <input type="number" class="form-control wizard-required" placeholder="Phone"
                                    name="phone_number" value="{{ Auth::user()->phone_number }}" disabled="">
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="col-md-6">
                                <label>Email*</label>
                                <input type="email" class="form-control" placeholder="Email" name="email"
                                    value="{{ Auth::user()->email }}" disabled="">
                                <div class="wizard-form-error"></div>
                            </div>

                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label>Alternate Mobile No.*</label>
                                <input type="number" class="form-control wizard-required" placeholder="Alternate No."
                                    name="second_phone"
                                    value="@if(isset($user_details)){{$user_details->second_phone}}@endif">
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="col-md-6">
                                <label for="dob">Date Of Birth*</label>
                                <input type="Date" class="form-control  wizard-required" placeholder="DOB" name="dob"
                                    value="@if(isset($user_details)){{$user_details->dob}}@endif">
                                <div class="wizard-form-error"></div>
                            </div>
                        </div>
                        <div class="row form-group">

                            <div class="col-md-6">
                                <label for="dob">Age*</label>
                                <input type="text" class="form-control wizard-required" placeholder="Age" name="age"
                                    value="@if(isset($user_details)){{$user_details->age}}@endif">
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="col-md-6" style="margin-top:43px;">
                                <label for="dob">Gender*</label>
                                <div class="wizard-form-radio">
                                    <input type="radio" name="gender" value="male" @if($user_details->gender ==
                                    'male'){{"checked"}} @endif>
                                    <label>Male</label>
                                </div>
                                <div class="wizard-form-radio">
                                    <input type="radio" name="gender" value="female" @if($user_details->gender ==
                                    'female'){{"checked"}} @endif>
                                    <label for="radio2">Female</label>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6">
                                <label>Country*</label>
                                <input type="text" class="form-control wizard-required" placeholder="Country"
                                    name="country" value="@if(isset($user_details)){{$user_details->country}}@endif">
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="col-md-6">
                                <label>State*</label>
                                <input type="text" class="form-control wizard-required" placeholder="State" name="state"
                                    value="@if(isset($user_details)){{$user_details->state}}@endif">
                                <div class="wizard-form-error"></div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6">
                                <label>City*</label>
                                <select class="form-control wizard-required" name="district">
                                    <option value="" >Select City</option>
                                       <option value="Azamgadh"  @if($user_details->district == 'Azamgadh'){{"selected"}}
                                        @endif>Azamgadh</option>
                                       <option value="Gorakhpur" @if($user_details->district == 'Gorakhpur'){{"selected"}}
                                        @endif>Gorakhpur</option>
                                       <option value="Jaunpur" @if($user_details->district == 'Jaunpur'){{"selected"}}
                                        @endif>Jaunpur</option>
                                       <option value="Jhanshi" @if($user_details->district == 'Jhanshi'){{"selected"}}
                                        @endif>Jhanshi</option>
                                       <option value="Lucknow" @if($user_details->district == 'Lucknow'){{"selected"}}
                                        @endif>Lucknow</option>
                                       <option value="Merath" @if($user_details->district == 'Merath'){{"selected"}}
                                        @endif>Merath</option>
                                       <option value="Mirzapur" @if($user_details->district == 'Mirzapur'){{"selected"}}
                                        @endif>Mirzapur</option>
                                       <option value="Mughalsarai" @if($user_details->district == 'Mughalsarai'){{"selected"}}
                                        @endif>Mughalsarai</option>
                                       <option value="Noida" @if($user_details->district == 'Noida'){{"selected"}}
                                        @endif>Noida</option>
                                       <option value="Patna" @if($user_details->district == 'Patna'){{"selected"}}
                                        @endif>Patna</option>
                                       <option value="Prayagraj" @if($user_details->district == 'Prayagraj'){{"selected"}}
                                        @endif>Prayagraj</option>
                                       <option value="Varanasi" @if($user_details->district == 'Varanasi'){{"selected"}}
                                        @endif>Varanasi </option>
                                </select>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="col-md-6">
                                <label>Full Address*</label>
                                <textarea type="text" class="form-control  wizard-required" placeholder="Full Address"
                                    name="full_address">@if(isset($user_details)){{$user_details->full_address}}@endif</textarea>
                                <div class="wizard-form-error"></div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Pincode*</label>
                                <input type="text" class="form-control wizard-required" placeholder="Pincode" name="pincode"
                                    value="@if(isset($user_details)){{$user_details->pincode}}@endif">
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="col-md-4">
                                <label>Area Location*</label>
                                <input type="text" class="form-control wizard-required" placeholder="Area Location" name="area_location"
                                    value="@if(isset($user_details)){{$user_details->area_location}}@endif">
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="col-md-4">
                                <label>Vaccination*</label>
                                <select class="form-control wizard-required" name="vaccination">
                                    <option value="">Select Status</option>
                                    <option value="vaccinated" @if($user_details->vaccination ==
                                        'vaccinated'){{"selected"}} @endif>Vaccinated</option>
                                    <option value="notvaccinated" @if($user_details->vaccination ==
                                        'notvaccinated'){{"selected"}} @endif>Not Vaccinated</option>
                                </select>
                                <div class="wizard-form-error"></div>
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                        </div>
                    </fieldset>
                    <fieldset class="wizard-fieldset">
                        <h5> Qualification & Experience</h5>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label>Highest Qualification*</label>
                                <input type="text" class="form-control wizard-required" placeholder="Qualification" name="qualification"
                                    value="@if(isset($user_details)){{$user_details->qualification}}@endif">
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="col-md-6">
                                <label>Teaching Experience*</label>
                                <input type="text" class="form-control wizard-required" placeholder="Experience" name="experience"
                                    value="@if(isset($user_details)){{$user_details->experience}}@endif" required="">
                                <div class="wizard-form-error"></div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6">
                                <label>Class Covering Range* <small style="color:red;">This Field is Required.</small></label>
                                @php
                                $classs=explode(",",$user_details->class);
                                @endphp
                                <select data-style="bg-white rounded-pill " class="selectpicker w-100"
                                    data-live-search="true" title="Select Class" name="class[]" multiple required>
                                    @foreach(App\Course::where('status','enable')->get() as $clas)
                                    <option value="{{$clas->name}}" @foreach($classs as $cl) @if($cl==$clas->
                                        name){{"selected"}} @endif
                                        @endforeach
                                        >{{$clas->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Covering Subject* <small style="color:red;">This Field is Required.</small></label>
                                @php
                                $subjects=explode(",",$user_details->subject);
                                @endphp
                                <select data-style="bg-white rounded-pill" class="selectpicker w-100" name="subject[]"
                                    multiple data-max-options="3" title="Select Subject" data-live-search="true" required>
                                    @foreach(App\Subject::where('status','enable')->get() as $subject)
                                    <option value="{{$subject->name}}" @foreach($subjects as $sub) @if($sub==$subject->
                                        name){{"selected"}} @endif
                                        @endforeach
                                        >{{$subject->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6">
                                <label>Teaching Mode*</label>
                                <select class="form-control wizard-required" name="class_mode">
                                    <option value="">Select Class Mode</option>
                                    <option value="Online" @if($user_details->class_mode == 'Online'){{"selected"}}
                                        @endif>Online</option>
                                    <option value="Offline" @if($user_details->class_mode == 'Offline'){{"selected"}}
                                        @endif>Offline</option>
                                </select>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="col-md-6">
                                <label>Specilization*</label>
                                <select class="form-control wizard-required" name="specilization">
                                    <option value="">Select Specilization</option>
                                    @foreach(App\Specilization::where('status','enable')->get() as $specilization)
                                    <option value="{{$specilization->name}}" @if($user_details->specilization ==
                                        $specilization->name){{"selected"}} @endif>{{$specilization->name}} </option>
                                    @endforeach
                                </select>
                                <div class="wizard-form-error"></div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label>Language Known*</label>
                                <select class="form-select selct wizard-required" aria-label="Default select example" name="language"
                                    required="">
                                    <option value="" >Select Language</option>
                                    @foreach(App\Language::where('status','enable')->get() as $language)
                                    <option value="{{$language->name}}" @if($user_details->language ==
                                        $language->name){{"selected"}} @endif>{{$language->name}} </option>
                                    @endforeach
                                </select>
                                <div class="wizard-form-error"></div>
                            </div>

                            <div class="col-md-6">
                                <label>Aadhar No.*</label>
                                <input type="number" class="form-control wizard-required" placeholder="Aadhar No." name="audhar_no"
                                    value="@if(isset($user_details)){{$user_details->audhar_no}}@endif" required="">
                                <div class="wizard-form-error"></div>
                            </div>
                        </div>

                        <div class="form-group clearfix">
                            <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                            <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                        </div>
                    </fieldset>
                    <fieldset class="wizard-fieldset">
                        <h5> Upload Documents</h5>
                             <div class="ajax-loader">
  <img src="https://qalpedu.com/images/loader.gif" class="img-responsive" />
</div>
                        <div class="row form-group">
                            <!--<div class="col-md-6">
                                <label>Upload Aadhar*</label>
                                <input type="file" class="form-control" placeholder="Aadhar Photo" name="audhar_img"
                                    value="@if(isset($user_details)){{$user_details->audhar_img}}@endif">
                                @if($user_details->audhar_img!=null)
                                <img src="uploads/teacher_document/{{$user_details->audhar_img}}" style="width:100px;">
                                @endif
                            </div>-->
                            <div class="col-md-6">
                                <label>Upload Profile Photo*</label>
                                <input type="file" class="form-control wizard-required img_file_size"  id="profile_image" >
                                     <input type="hidden" id="img_profile_image" name="profile_img">
                                     <div class="wizard-form-error"></div>
                                @if($user_details->profile_img!=null)
                                <img src="uploads/teacher_document/{{$user_details->profile_img}}" style="width:100px;">
                                @endif
                            </div>

                        </div>

                        <div class="col-md-12">

                            <b>Upload Highest Qualification Certificate*</b>
                            <a href="javascript:void(0);"
                                class="btn btn-sm rounded-circle bg-white border border-dark add_button" id="btn2"><i
                                    class="fa fa-plus" aria-hidden="true"></i></a>
                            <div class="field_wrapper">
                            	<div class="field_wrapper_copy" style="margin-top: 10px;">
								    <div class="row"><label for="example-text-input" class="col-md-2">Document Name:</label>
								        <div class="col-md-4">
								            <input class="form-control result_name" type="text"  name="result_name[]" @if(count($result)==0) required @endif>
								        </div>
								        <div class="col-md-5">
								            <input type="file" id="result_file_1"  class="form-control form-border img_file_size" @if(count($result)==0) required @endif>
								            <input type="hidden" id="img_result_file_1" name="result_file[]" >
								        </div>
								    </div>
								</div>
                            </div>

                            <div class="increment2" style="margin-top: 10px;">

                                @foreach($result as $result_item)
                                <div class="row">
                                    <label class="col-md-2 dd">Document Name:</label>
                                    <div class="col-md-4">
                                        <input class="form-control result_name" type="text" id="result_name"
                                            name="result_name[]" value="{{$result_item->result_name}}" disabled="">
                                    </div>
                                    <div class="col-md-6">
                                        @if($result_item->result_file!=null)
                                        <embed src="uploads/teacher_document/{{$result_item->result_file}}"
                                            width="300px" height="200px">
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-12">
                                <b>Upload Aadhar (Both Front & Back) *</b>
                                @if(count($certificate)<2)

                            	<div class="certificate_field_copy" style="margin-top: 10px;">
								    <div class="row"><label for="example-text-input" class="col-md-2"></label>
								        <div class="col-md-4"><input class="form-control certificate_name" type="text" @if(count($certificate)<=2) value="Aadhar Front" @endif readonly id="certificate_name"
								                name="certificate_name[]" @if(count($certificate)<=0) required @endif></div>
								        <div class="col-md-5"><input type="file" id="certificate_file_default_1"
								                class="form-control form-border img_file_size" @if(count($certificate)<=2) required @endif>
								                <input type="hidden" id="img_certificate_file_default_1"  name="certificate_file[]">
								                </div>
								    </div>
								</div>
								<div class="certificate_field_copy" style="margin-top: 10px;">
								    <div class="row"><label for="example-text-input" class="col-md-2"></label>
								        <div class="col-md-4"><input class="form-control certificate_name" @if(count($certificate)<=2) value="Aadhar Back" @endif readonly type="text" id="certificate_name"
								                name="certificate_name[]" @if(count($certificate)<=0) required @endif></div>
								        <div class="col-md-5"><input type="file" id="certificate_file_default_2"
								                class="form-control form-border img_file_size" @if(count($certificate)<=2) required @endif>
								                 <input type="hidden" id="img_certificate_file_default_2"  name="certificate_file[]"></div>
								    </div>
								</div>
								@endif
								<div class="increment2" style="margin-top: 10px;">

                                @foreach($certificate as $certificate_item)
                                <div class="row">
                                    <label class="col-md-2 dd">Document Name:</label>
                                    <div class="col-md-4">
                                        <input class="form-control certificate_name" type="text" id="certificate_name"
                                            name="certificate_name[]" value="{{$certificate_item->certificate_name}}" disabled="">
                                    </div>
                                    <div class="col-md-6">
                                        @if($certificate_item->certificate_file!=null)
                                        <embed src="uploads/teacher_document/{{$certificate_item->certificate_file}}"
                                            type="application/pdf" width="300px" height="200px" />
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <b>Upload Other Certificate</b>
                             <a href="javascript:void(0);"
                                class="btn btn-sm rounded-circle  bg-white border border-dark add_certificate"
                                id="btn2"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                <div class="certificate_field">
                                </div>

                        </div>

                        <div class="col-md-12">
                            <lable>About Me</lable>
                            <textarea class="form-control" placeholder="Write your bio in short..."
                                name="about">@if(isset($user_details)){{$user_details->about}}@endif</textarea>
                        </div>

                        <div class="form-group clearfix">
                            <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                            <button type="submit" class="form-wizard-submit float-right">Submit</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- End Teacher Details -->
@else
<!-- Student Details --->
<section class="wizard-section">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic Info</h5>
        </div>
        <div class="card-body">
            <div class="form-wizard">
               <form action="{{route('update_student', Auth::user()->id)}}" , method="POST" enctype="multipart/form-data">
            		@csrf
                    <div class="form-wizard-header">
                        <ul class="list-unstyled form-wizard-steps clearfix">
                            <li class="active"><span>1.</span> Basic <br/>Information</li>
                            <li><span>2.</span> Address<br/> Details</li>
                            <li><span>3.</span> Class &<br/>Course</li>
                        </ul>
                    </div>
                    <fieldset class="wizard-fieldset show">
                        <h5> Basic Information</h5>
                        <div class="col-md-12">
                            <label>Full Name*</label>
                            <input type="text" class="form-control" placeholder="Full name" name="name"
                            value="{{ Auth::user()->name }}" disabled="">
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label>Registered Mobile No.*</label>
                                <input type="number" class="form-control" placeholder="Phone" name="phone_number"
                                value="{{ Auth::user()->phone_number }}" disabled="">
                            </div>
                            <div class="col-md-6">
                                <label>Email*</label>
                                <input type="text" class="form-control" placeholder="Email" name="email"
                                  value="{{ Auth::user()->email }}" disabled="">
                            </div>

                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label>Alternate Mobile No.*</label>
                                <input type="number" class="form-control wizard-required" placeholder="Alternate No." name="second_phone"
                                  value="@if(isset($user_details)){{$user_details->second_phone}}@endif">
                                <div class="wizard-form-error"></div>
                            </div>

                            <div class="col-md-6">
                                <label for="dob">Date Of Birth*</label>
                                <input type="Date" class="form-control wizard-required" placeholder="DOB" name="dob"
                                    value="@if(isset($user_details)){{$user_details->dob}}@endif">
                                <div class="wizard-form-error"></div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6" style="margin-top:20px;">
                                <label for="dob">Gender*</label>
                                <div class="wizard-form-radio">
                                    <input type="radio" name="gender" value="male" @if($user_details->gender ==
                                    'male'){{"checked"}} @endif>
                                    <label>Male</label>
                                </div>
                                <div class="wizard-form-radio">
                                    <input type="radio" name="gender" value="female" @if($user_details->gender ==
                                    'female'){{"checked"}} @endif>
                                    <label for="radio2">Female</label>
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-top:20px;">
                               <div class="upload-btn-wrappers">
                        <button class="btn btn-info btn-sm remove">Upload Photo</button>
                        <input type="file" class="form-control" name="profile_img" /><br />
                        @if($user_details->profile_img!=null)
                        <img src="uploads/teacher_document/{{$user_details->profile_img}}" width="100px"
                            height="100px" />
                        @endif
                    </div>

                            </div>

                       <div class="col-md-6">
                                <label>Vaccination*</label>
                                <select class="form-control wizard-required" name="vaccination">
                                    <option value="">Select Status</option>
                                    <option value="vaccinated" @if($user_details->vaccination ==
                                        'vaccinated'){{"selected"}} @endif>Vaccinated</option>
                                    <option value="notvaccinated" @if($user_details->vaccination ==
                                        'notvaccinated'){{"selected"}} @endif>Not Vaccinated</option>
                                </select>
                                <div class="wizard-form-error"></div>
                            </div>
                        </div>

                        <div class="form-group clearfix">
                            <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                        </div>
                    </fieldset>
                    <fieldset class="wizard-fieldset">
                        <h5> Address Details</h5>
                          <div class="row form-group">
                            <div class="col-md-6">
                                <label>Country*</label>
                                <input type="text" class="form-control wizard-required" placeholder="Country"
                                    name="country" value="@if(isset($user_details)){{$user_details->country}}@endif">
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="col-md-6">
                                <label>State*</label>
                                <input type="text" class="form-control wizard-required" placeholder="State" name="state"
                                    value="@if(isset($user_details)){{$user_details->state}}@endif">
                                <div class="wizard-form-error"></div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6">
                                <label>City*</label>
                                <select class="form-control wizard-required" name="district">
                                    <option value="" >Select City</option>
                                       <option value="Azamgadh"  @if($user_details->district == 'Azamgadh'){{"selected"}}
                                        @endif>Azamgadh</option>
                                       <option value="Gorakhpur" @if($user_details->district == 'Gorakhpur'){{"selected"}}
                                        @endif>Gorakhpur</option>
                                       <option value="Jaunpur" @if($user_details->district == 'Jaunpur'){{"selected"}}
                                        @endif>Jaunpur</option>
                                       <option value="Jhanshi" @if($user_details->district == 'Jhanshi'){{"selected"}}
                                        @endif>Jhanshi</option>
                                       <option value="Lucknow" @if($user_details->district == 'Lucknow'){{"selected"}}
                                        @endif>Lucknow</option>
                                       <option value="Merath" @if($user_details->district == 'Merath'){{"selected"}}
                                        @endif>Merath</option>
                                       <option value="Mirzapur" @if($user_details->district == 'Mirzapur'){{"selected"}}
                                        @endif>Mirzapur</option>
                                       <option value="Mughalsarai" @if($user_details->district == 'Mughalsarai'){{"selected"}}
                                        @endif>Mughalsarai</option>
                                       <option value="Noida" @if($user_details->district == 'Noida'){{"selected"}}
                                        @endif>Noida</option>
                                       <option value="Patna" @if($user_details->district == 'Patna'){{"selected"}}
                                        @endif>Patna</option>
                                       <option value="Prayagraj" @if($user_details->district == 'Prayagraj'){{"selected"}}
                                        @endif>Prayagraj</option>
                                       <option value="Varanasi" @if($user_details->district == 'Varanasi'){{"selected"}}
                                        @endif>Varanasi </option>
                                </select>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="col-md-6">
                                <label>Pincode*</label>
                                <input type="text" class="form-control wizard-required" placeholder="Pincode" name="pincode"
                                    value="@if(isset($user_details)){{$user_details->pincode}}@endif">
                                <div class="wizard-form-error"></div>
                            </div>

                        </div>

                        <div class="row form-group">
                        <div class="col-md-12">
                                <label>Full Address*</label>
                                <textarea type="text" class="form-control wizard-required" placeholder="Full Address"
                                    name="full_address">@if(isset($user_details)){{$user_details->full_address}}@endif</textarea>
                                <div class="wizard-form-error"></div>
                            </div>
                        </div>


                        <div class="form-group clearfix">
                            <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                            <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                        </div>
                    </fieldset>
                    <fieldset class="wizard-fieldset">
                        <h5>Education</h5>

                         <div class="row form-group">
                            <div class="col-md-6">
                               <label>School/College*</label>
                                <input type="text" class="form-control wizard-required" placeholder="School / College Name" name="school_college"
                                value="@if(isset($user_details)){{$user_details->school_college}}@endif" required="">
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="col-md-6">
                                <label>Board*</label>
                                <select class="form-control wizard-required" name="board"  required="">
                                <option value="">Select Board</option>
			                        <option value="UP" @if($user_details->board == 'UP'){{"selected"}} @endif>UP</option>
			                        <option value="CBSE" @if($user_details->board == 'CBSE'){{"selected"}} @endif>CBSE</option>
			                        <option value="ICSE" @if($user_details->board == 'ICSE'){{"selected"}} @endif>ICSE</option>
			                        <option value="BIHAR" @if($user_details->board == 'BIHAR'){{"selected"}} @endif>BIHAR</option>
			                    </select>
                                <div class="wizard-form-error"></div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6">
                                <label>Course/Class*</label>
                               <select class="form-select selct wizard-required" aria-label="Default select example" name="class" required="">
                        <option value="">Select Class/Course</option>
                        @foreach(App\Course::where('status','enable')->get() as $class)
                        <option value="{{$class->name}}" @if($user_details->class == $class->name){{"selected"}}
                            @endif>{{$class->name}} </option>
                        @endforeach
                    </select>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="col-md-6">
                                <label>Class Mode*</label>
                               <select class="form-control wizard-required" name="class_mode" required="">
                        <option value="">Select Class Mode</option>
                        <option value="Online" @if($user_details->class_mode == 'Online'){{"selected"}} @endif>Online
                        </option>
                        <option value="Offline" @if($user_details->class_mode == 'Offline'){{"selected"}} @endif>Offline
                        </option>
                    </select>
                                <div class="wizard-form-error"></div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6">
                                <label>Language*</label>
                                <select class="form-select selct wizard-required" aria-label="Default select example" name="language" required="">
                                <option value="">Select Language</option>
                                 @foreach(App\Language::where('status','enable')->get() as $language)
                                 <option value="{{$language->name}}" @if($user_details->language ==
                                 $language->name){{"selected"}} @endif>{{$language->name}} </option>
                                 @endforeach
                                </select>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="col-md-6">
                                <label>Subject*</label>
                               @php
                    $subjects=explode(",",$user_details->subject);
                    @endphp
                    <select data-style="bg-white rounded-pill" class="selectpicker w-100 wizard-required" multiple data-max-options="3"
                        data-live-search="true" title="Select Subject" name="subject[]" multiple required="">
                        @foreach(App\Subject::where('status','enable')->get() as $subject)


                        <option value="{{$subject->name}}" @foreach($subjects as $sub) @if($sub==$subject->
                            name){{"selected"}} @endif


                            @endforeach

                            >{{$subject->name}} </option>

                        @endforeach
                    </select>
                                <div class="wizard-form-error"></div>
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                            <button type="submit" class="form-wizard-submit float-right">Submit</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>
@endif
<!-- End Student --->
