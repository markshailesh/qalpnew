<style>
body {
  background-color: #ffffff;
  color: #444444;
  font-family: 'Roboto', sans-serif;
  font-size: 16px;
  font-weight: 300;
  margin: 0;
  padding: 0;
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
  background-color: #3a7f79;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  height: 2px;
  width: 100%;
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
  margin: 25px 0;
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
  margin: 20px 0;
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
/*.form-wizard .form-wizard-steps li::after {
  background-color: #f3f3f3;
  content: "";
  height: 5px;
  left: 0;
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  width: 100%;
  border-bottom: 1px solid #dddddd;
  border-top: 1px solid #dddddd;
}*/
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
/*.form-wizard .form-wizard-steps li.active::after, .form-wizard .form-wizard-steps li.activated::after {
  background-color: #d65470;
  left: 50%;
  width: 50%;
  border-color: #d65470;
}
.form-wizard .form-wizard-steps li.activated::after {
  width: 100%;
  border-color: #d65470;
}
.form-wizard .form-wizard-steps li:last-child::after {
  left: 0;
}*/
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
</script>
                      
                        @if (Auth::user()->user_type == "teacher")
                        {{-- Teacher Details --}}
                        <div class="card">
                        <div class="card-header">
                        <h5 class="mb-0">Basic Info</h5>
                        </div>
                        <div class="card-body">
                        <form action="{{route('update_teacher', Auth::user()->id)}}" , method="POST"
                           enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                        <label class="col-md-2 col-form-label dd">Your name</label>
                        <div class="col-md-5">
                        <input type="text" class="form-control" placeholder="Full name"
                           name="name" value="{{ Auth::user()->name }}" disabled="">
                        </div>
                        <div class="col-md-5">
                         <div class="upload-btn-wrappers">
                          <button class="btn btn-info btn-sm remove">Upload Photo</button>
                          <input type="file" name="profile_img" /><br>
                           @if($user_details->profile_img!=null)
                         <img src="uploads/teacher_document/{{$user_details->profile_img}}" width="100px" height="100px" />
                         @endif
                         </div>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-2 col-form-label dd">Date of Birth</label>
                        <div class="col-md-5" style="margin-top:8px;">
                        <input type="Date" class="form-control" placeholder="DOB" name="dob"
                           value="@if(isset($user_details)){{$user_details->dob}}@endif" required="">
                        </div>
                        <div class="col-md-5" style="margin-top: 12px;">
                        <input type="radio" name="gender" value="male" @if($user_details->gender == 'male'){{"checked"}} @endif>Male
                        <input type="radio" name="gender" value="female"  @if($user_details->gender == 'female'){{"checked"}} @endif>Female
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-2 col-form-label dd">Address</label>
                        <div class="col-md-5">
                        <input type="text" class="form-control" placeholder="Country"
                           name="country"
                           value="@if(isset($user_details)){{$user_details->country}}@endif">
                        </div>
                        <div class="col-md-5">
                        <input type="text" class="form-control" placeholder="State"
                           name="state"
                           value="@if(isset($user_details)){{$user_details->state}}@endif">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-2 col-form-label dd"></label>
                        <div class="col-md-5">
                                <select class="form-control" name="district">
                                    <option>Select City</option>
                                       <option value="Varanasi" @if($user_details->district == 'Varanasi'){{"selected"}} @endif>Varanasi </option>
                                       <option value="Lucknow" @if($user_details->district == 'Lucknow'){{"selected"}} @endif>Lucknow</option>
                                       <option value="Patna" @if($user_details->district == 'Patna'){{"selected"}} @endif>Patna</option>
                                       <option value="Mughalsarai" @if($user_details->district == 'Mughalsarai'){{"selected"}} @endif>Mughalsarai</option>
                                       <option value="Prayagraj" @if($user_details->district == 'Prayagraj'){{"selected"}} @endif>Prayagraj</option>
                                       <option value="Kanpur" @if($user_details->district == 'Kanpur'){{"selected"}} @endif>Kanpur</option>
                                 </select>
                        </div>
                        <div class="col-md-5">
                        <input type="text" class="form-control" placeholder="Pincode"
                           name="pincode"
                           value="@if(isset($user_details)){{$user_details->pincode}}@endif">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-2 col-form-label dd"></label>
                        <div class="col-md-10">
                        <textarea type="text" class="form-control"
                           placeholder="Full Address"
                           name="full_address">@if(isset($user_details)){{$user_details->full_address}}@endif</textarea>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-2 col-form-label dd">Contact info</label>
                        <div class="col-md-5">
                        <input type="number" class="form-control" placeholder="Phone"
                           name="phone_number" value="{{ Auth::user()->phone_number }}" disabled="">
                        </div>
                        <div class="col-md-5">
                        <input type="number" class="form-control" placeholder="Alternate No."
                           name="second_phone"
                           value="@if(isset($user_details)){{$user_details->second_phone}}@endif">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-2 col-form-label dd"></label>
                        <div class="col-md-5">
                        <input type="number" class="form-control" placeholder="Whatsapp"
                           name="whatsapp_no"
                           value="@if(isset($user_details)){{$user_details->whatsapp_no}}@endif">
                        </div>
                        <div class="col-md-5">
                        <input type="text" class="form-control" placeholder="Email"
                           name="email" value="{{ Auth::user()->email }}" disabled="">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-2 col-form-label dd">Language</label>
                        <div class="col-md-5">
                         <select class="form-select selct" aria-label="Default select example" name="language" required="">
                              <option value="nothing">Select Language</option>
                                 @foreach(App\Language::where('status','enable')->get() as $language)
                              <option value="{{$language->name}}" @if($user_details->language == $language->name){{"selected"}} @endif>{{$language->name}} </option>
                                 @endforeach
                        </select>
                        </div>
                        <div class="col-md-5">
                        <select class="form-control" name="specilization">
                        <option value="nothing">Select Specilization</option>
                        @foreach(App\Specilization::where('status','enable')->get() as $specilization)
                        <option value="{{$specilization->name}}" @if($user_details->specilization == $specilization->name){{"selected"}} @endif>{{$specilization->name}} </option>
                        @endforeach
                        </select>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-2 col-form-label dd">class</label>
                        <div class="col-md-5">
                            @php 
                                        $classs=explode(",",$user_details->class);
                                        @endphp
                        <select data-style="bg-white rounded-pill" class="selectpicker w-100"  data-live-search="true" title="Select Class" name="class[]" multiple required="">
                                       @foreach(App\Course::where('status','enable')->get() as $clas)
                                         <option value="{{$clas->name}}" 
                                             @foreach($classs as $cl)
                                          @if($cl == $clas->name){{"selected"}} @endif
                                          @endforeach 
                                          >{{$clas->name}} </option>
                                       
                                       @endforeach
                                    </select>
                        </div>
                        <div class="col-md-5">
                                      @php 
                                        $subjects=explode(",",$user_details->subject);
                                        @endphp
                              <select data-style="bg-white rounded-pill" class="selectpicker w-100"  name="subject[]" multiple data-max-options="3" title="Select Subject" data-live-search="true" required="">
                                    @foreach(App\Subject::where('status','enable')->get() as $subject)
                                         <option value="{{$subject->name}}" 
                                             @foreach($subjects as $sub)
                                          @if($sub == $subject->name){{"selected"}} @endif
                                          @endforeach 
                                          >{{$subject->name}} </option>
                                       
                                       @endforeach
                                  </select>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-2 col-form-label dd">Experience</label>
                        <div class="col-md-5">
                        <input type="text" class="form-control"
                           placeholder="Experience" name="experience" value="@if(isset($user_details)){{$user_details->experience}}@endif" required="">
                        </div>
                        <div class="col-md-5">
                        <select class="form-control" name="class_mode">
                        <option>Select Class Mode</option>
                        <option value="Online" @if($user_details->class_mode == 'Online'){{"selected"}} @endif>Online</option>
                        <option value="Offline" @if($user_details->class_mode == 'Offline'){{"selected"}} @endif>Offline</option>
                        </select>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-2 col-form-label dd">Age</label>
                        <div class="col-md-5">
                        <input type="text" class="form-control"
                           placeholder="Age" name="age" value="@if(isset($user_details)){{$user_details->age}}@endif">
                        </div>
                        <div class="col-md-5">
                        <input type="text" class="form-control"
                           placeholder="Qualification" name="qualification" value="@if(isset($user_details)){{$user_details->qualification}}@endif">
                        </div>
                        </div>
                        <div class="form-group row">
                              <label class="col-md-2 col-form-label dd">Vaccination Status</label>
                              <div class="col-md-10">
                                 <select class="form-control" name="vaccination">
                                    <option>Select Status</option>
                                    <option value="vaccinated" @if($user_details->vaccination == 'vaccinated'){{"selected"}} @endif>Vaccinated</option>
                                    <option value="notvaccinated" @if($user_details->vaccination == 'notvaccinated'){{"selected"}} @endif>Not Vaccinated</option>
                                 </select>
                              </div>
                           </div>

                          <div class="form-group mb-0 text-right">
                           <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </div>
                  </div>
                  <div class="card">
                     <div class="card-body">
                        <div class="form-group row">
                        <label class="col-md-2 col-form-label dd">Aadhar Details</label>
                        <div class="col-md-5">
                        <input type="number" class="form-control" placeholder="Audhar No."
                           name="audhar_no"
                           value="@if(isset($user_details)){{$user_details->audhar_no}}@endif" required="">
                        </div>
                        <div class="col-md-5">
                        <input type="file" class="form-control" placeholder="Audhar Photo"
                           name="audhar_img" value="@if(isset($user_details)){{$user_details->audhar_img}}@endif">
                           @if($user_details->audhar_img!=null)
                         <img src="uploads/teacher_document/{{$user_details->audhar_img}}" style="width:100px;">
                         @endif
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-2 col-form-label dd">Result Document</label>
                        <div class="col-md-10">
                        <b>Add Document</b>
                        <a href="javascript:void(0);"
                           class="btn btn-sm rounded-circle  bg-white border border-dark add_button"
                           id="btn2"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                          <div class="field_wrapper"></div>
                                          
                                          <div class="input-group  increment2" style="margin-top: 10px;">
                                              @foreach($result as $result_item)
                                             <div class="row">
                                                <label class="col-md-2 col-form-label dd">Document Name:</label>
                                                <div class="col-md-4">
                                                   <input class="form-control result_name" type="text" id="result_name" name="result_name[]" value="{{$result_item->result_name}}">
                                                </div>
                                                <div class="col-md-6">
                                                   <input type="file" id="result_file" name="result_file[]" class="form-control form-border" accept="application/pdf,application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                                  @if($result_item->result_file!=null)
                                                  <embed src="uploads/teacher_document/{{$result_item->result_file}}" style="width:200px;">
                                                  @endif
                                                </div>
                                             </div>
                                             @endforeach
                                          </div>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-2 col-form-label dd">Certificate Document</label>
                           <div class="col-md-10"> <b>Add Document</b>
                              <a href="javascript:void(0);" class="btn btn-sm rounded-circle  bg-white border border-dark add_certificate" id="btn2"><i class="fa fa-plus" aria-hidden="true"></i></a>
                              <div class="certificate_field"></div>
                              <div class="input-group increment2" style="margin-top: 10px;">
                                   @foreach($certificate as $certificate_item)
                                 <div class="row">
                                    <label class="col-md-2 col-form-label dd">Document Name:</label>
                                    <div class="col-md-4">
                                       <input class="form-control certificate_name" type="text" id="certificate_name" name="certificate_name[]" value="{{$certificate_item->certificate_name}}">
                                    </div>
                                    <div class="col-md-6">
                                       <input type="file" id="certificate_file" name="certificate_file[]" class="form-control form-border" accept="application/pdf,application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                      @if($certificate_item->certificate_file!=null)
                                      <embed src="uploads/teacher_document/{{$certificate_item->certificate_file}}" type="application/pdf" width="200px" height="100px" />
                                      @endif
                                    </div>
                                 </div>
                                 @endforeach
                              </div>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-2 col-form-label dd">About</label>
                           <div class="col-md-10">
                              <textarea class="form-control" placeholder="About" name="about">@if(isset($user_details)){{$user_details->about}}@endif</textarea>
                           </div>
                        </div>
                        <div class="form-group mb-0 text-right">
                           <button type="submit" class="btn btn-primary">Verified Me</button>
                        </div>
                        </form>
                     </div>
                  </div><!-- End Teacher Details -->
                   @else
                  <!-- Student Details --->
                  <div class="card">
                     <div class="card-header">
                        <h5 class="mb-0">Basic Info</h5>
                     </div>
                     <div class="card-body">
                        <form action="{{route('update_student', Auth::user()->id)}}" , method="POST" enctype="multipart/form-data">@csrf
                           <div class="form-group row">
                              <label class="col-md-2 col-form-label dd">Your name</label>
                              <div class="col-md-5">
                                 <input type="text" class="form-control" placeholder="Full name" name="name" value="{{ Auth::user()->name }}" disabled="">
                              </div>
                           <div class="col-md-5">
                              <div class="upload-btn-wrappers">
                                  <button class="btn btn-info btn-sm remove">Upload Photo</button>
                                  <input type="file" name="profile_img" /><br/>
                                  @if($user_details->profile_img!=null)
                         <img src="uploads/teacher_document/{{$user_details->profile_img}}" width="100px" height="100px" />
                         @endif
                              </div>
                            </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-md-2 col-form-label dd">Date of Birth</label>
                              <div class="col-md-5" style="margin-top:8px;">
                                 <input type="Date" class="form-control" placeholder="DOB" name="dob" value="@if(isset($user_details)){{$user_details->dob}}@endif" required="">
                              </div>
                              <div class="col-md-5" style="margin-top: 12px;">
                                 <input type="radio" name="gender" value="male" @if($user_details->gender == 'male'){{"checked"}} @endif>Male
                                 <input type="radio" name="gender" value="female" @if($user_details->gender == 'female'){{"checked"}} @endif>Female</div>
                           </div>
                           <div class="form-group row">
                              <label class="col-md-2 col-form-label dd">Contact info</label>
                              <div class="col-md-5">
                                 <input type="number" class="form-control" placeholder="Phone" name="phone_number" value="{{ Auth::user()->phone_number }}" disabled="">
                              </div>
                              <div class="col-md-5">
                                 <input type="number" class="form-control" placeholder="Alternate No." name="second_phone" value="@if(isset($user_details)){{$user_details->second_phone}}@endif">
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-md-2 col-form-label dd"></label>
                              <div class="col-md-5">
                                 <input type="number" class="form-control" placeholder="Whatsapp" name="whatsapp_no" value="@if(isset($user_details)){{$user_details->whatsapp_no}}@endif">
                              </div>
                              <div class="col-md-5">
                                 <input type="text" class="form-control" placeholder="Email" name="email" value="{{ Auth::user()->email }}" disabled="">
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-md-2 col-form-label dd">School / College</label>
                              <div class="col-md-5">
                                 <input type="text" class="form-control" placeholder="School / College Name" name="school_college" value="@if(isset($user_details)){{$user_details->school_college}}@endif">
                              </div>
                              <div class="col-md-5">
                                 <select class="form-control" name="board">
                                    <option>Select Board</option>
                                    <option value="UP" @if($user_details->board == 'UP'){{"selected"}} @endif>UP</option>
                                    <option value="CBSE" @if($user_details->board == 'CBSE'){{"selected"}} @endif>CBSE</option>
                                    <option value="ICSE" @if($user_details->board == 'ICSE'){{"selected"}} @endif>ICSE</option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-md-2 col-form-label dd">Course/Class</label>
                              <div class="col-md-5">
                                    <select class="form-select selct" aria-label="Default select example" name="class" required="">
                                       <option selected="">Select Class/Course</option>
                                       @foreach(App\Course::where('status','enable')->get() as $class)
                                       <option value="{{$class->name}}" @if($user_details->class == $class->name){{"selected"}} @endif>{{$class->name}} </option>
                                       @endforeach
                                    </select>
                              </div>
                              <div class="col-md-5">
                                 <select class="form-control" name="class_mode">
                                    <option>Select Class Mode</option>
                                    <option value="Online" @if($user_details->class_mode == 'Online'){{"selected"}} @endif>Online</option>
                                    <option value="Offline" @if($user_details->class_mode == 'Offline'){{"selected"}} @endif>Offline</option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-md-2 col-form-label dd">Language</label>
                              <div class="col-md-5">
                                 <select class="form-select selct" aria-label="Default select example" name="language" required="">
                              <option selected="">Select Language</option>
                                 @foreach(App\Language::where('status','enable')->get() as $language)
                              <option value="{{$language->name}}" @if($user_details->language == $language->name){{"selected"}} @endif>{{$language->name}} </option>
                                 @endforeach
                        </select>
                              </div>
                                    <div class="col-md-5">
                                      @php 
                                        $subjects=explode(",",$user_details->subject);
                                        @endphp
                                <select data-style="bg-white rounded-pill" class="selectpicker w-100"  multiple data-max-options="3" data-live-search="true" title="Select Subject" name="subject[]" multiple>
                                    @foreach(App\Subject::where('status','enable')->get() as $subject)
                                      
                                      
                                         <option value="{{$subject->name}}" 

                                             @foreach($subjects as $sub)

                                          @if($sub == $subject->name){{"selected"}} @endif


                                          @endforeach 

                                          >{{$subject->name}} </option>
                                       
                                       @endforeach
                                  </select>
                        </div>
                           </div>
                            <div class="form-group row">
                              <label class="col-md-2 col-form-label dd">Vaccination Status</label>
                              <div class="col-md-10">
                                 <select class="form-control" name="vaccination">
                                    <option>Select Status</option>
                                    <option value="vaccinated" @if($user_details->vaccination == 'vaccinated'){{"selected"}} @endif>Vaccinated</option>
                                    <option value="notvaccinated" @if($user_details->vaccination == 'notvaccinated'){{"selected"}} @endif>Not Vaccinated</option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-md-2 col-form-label dd">Address</label>
                              <div class="col-md-5">
                                 <input type="text" class="form-control" placeholder="Country" name="country" value="@if(isset($user_details)){{$user_details->country}}@endif" required="">
                              </div>
                              <div class="col-md-5">
                                 <input type="text" class="form-control" placeholder="State" name="state" value="@if(isset($user_details)){{$user_details->state}}@endif">
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-md-2 col-form-label dd"></label>
                              <div class="col-md-5">
                                <select class="form-control" name="district">
                                    <option>Select City</option>
                                       <option value="Varanasi" @if($user_details->district == 'Varanasi'){{"selected"}} @endif>Varanasi </option>
                                       <option value="Lucknow" @if($user_details->district == 'Lucknow'){{"selected"}} @endif>Lucknow</option>
                                       <option value="Patna" @if($user_details->district == 'Patna'){{"selected"}} @endif>Patna</option>
                                       <option value="Mughalsarai" @if($user_details->district == 'Mughalsarai'){{"selected"}} @endif>Mughalsarai</option>
                                       <option value="Prayagraj" @if($user_details->district == 'Prayagraj'){{"selected"}} @endif>Prayagraj</option>
                                       <option value="Kanpur" @if($user_details->district == 'Kanpur'){{"selected"}} @endif>Kanpur</option>
                                 </select>
                              </div>
                              <div class="col-md-5">
                                 <input type="text" class="form-control" placeholder="Pincode" name="pincode" value="@if(isset($user_details)){{$user_details->pincode}}@endif" required="">
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-md-2 col-form-label dd"></label>
                              <div class="col-md-10">
                                 <textarea type="text" class="form-control" placeholder="Full Address" name="full_address">@if(isset($user_details)){{$user_details->full_address}}@endif</textarea>
                              </div>
                           </div>
                           <!-- <div class="form-group row">
                           <label class="col-md-2 col-form-label">Fee Range</label>
                           <div class="col-md-10">
                              <input type="text" class="form-control"
                                   placeholder="Fee Range" name="fee_range" value="@if(isset($user_details)){{$user_details->fee_range}}@endif">
                           </div>
                           </div> -->
 
                           <div class="form-group mb-0 text-right">
                              <button type="submit" class="btn btn-primary">Submit</button>
                           </div>
                        </form>
                     </div>
                  </div>
                  @endif
                  <!-- End Student --->

              <!--    
               <section class="wizard-section">
                        <div class="card">
                        <div class="card-header">
                        <h5 class="mb-0">Basic Info</h5>
                        </div>
                        <div class="card-body">
				<div class="form-wizard">
					<form action="" method="post" role="form">
						<div class="form-wizard-header">
						<p>Fill all form field to go next step</p>
						<ul class="list-unstyled form-wizard-steps clearfix">
							<li class="active"><span>1.</span> Basic Information</li>
							<li><span>2.</span> Qualification & Experience</li>
							<li><span>3.</span> Upload Documents</li>
						</ul>
						</div>
						<fieldset class="wizard-fieldset show">
							<h5>Personal Information</h5>
							<div class="form-group">
								<input type="text" class="form-control wizard-required" id="fname">
								<label for="fname" class="wizard-form-text-label">First Name*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control wizard-required" id="dob">
								<label for="dob" class="wizard-form-text-label">Date Of Birth*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group">
								Gender
								<div class="wizard-form-radio">
									<input name="radio-name" id="radio1" type="radio">
									<label for="radio1">Male</label>
								</div>
								<div class="wizard-form-radio">
									<input name="radio-name" id="radio2" type="radio">
									<label for="radio2">Female</label>
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control wizard-required" id="zcode">
								<label for="zcode" class="wizard-form-text-label">Zip Code*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
							</div>
						</fieldset>	
						<fieldset class="wizard-fieldset">
							<h5>Account Information</h5>
							<div class="form-group">
								<input type="email" class="form-control wizard-required" id="email">
								<label for="email" class="wizard-form-text-label">Email*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control wizard-required" id="username">
								<label for="username" class="wizard-form-text-label">User Name*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group">
								<input type="password" class="form-control wizard-required" id="pwd">
								<label for="pwd" class="wizard-form-text-label">Password*</label>
								<div class="wizard-form-error"></div>
								<span class="wizard-password-eye"><i class="far fa-eye"></i></span>
							</div>
							<div class="form-group">
								<input type="password" class="form-control wizard-required" id="cpwd">
								<label for="cpwd" class="wizard-form-text-label">Confirm Password*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
								<a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
							</div>
						</fieldset>	
						<fieldset class="wizard-fieldset">
							<h5>Bank Information</h5>
							<div class="form-group">
								<input type="text" class="form-control wizard-required" id="bname">
								<label for="bname" class="wizard-form-text-label">Bank Name*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control wizard-required" id="brname">
								<label for="brname" class="wizard-form-text-label">Branch Name*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control wizard-required" id="acname">
								<label for="acname" class="wizard-form-text-label">Account Name*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control wizard-required" id="acon">
								<label for="acon" class="wizard-form-text-label">Account Number*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
								<a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
							</div>
						</fieldset>	
					</form>
				</div>
			</div>
		</div>
	</section>-->