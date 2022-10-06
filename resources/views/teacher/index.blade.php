@include('layout/header')
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
        <!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>
<script>
  $(function() {
    $('.tog').change(function() {
      var status= $(this).prop('checked');
        var c= $(this).val();
      
      
      if(status==true){
        
        var state="enable";
      }
      if(status==false){
        var state="disable";
      }

       
        $.ajax({
               type:'POST',
               url:'/update_status_teacher',
               data:{ 
                _token:'{{ csrf_token() }}',
                stat: state,
                id:c
            },
            success: function (data) {

if (data.msg.status == 'enable') {
  $.growl.active({
      title: "Teacher",
      message: "Teacher Active!"
  });
}
else {
$.growl.inactive({
    title: "Teacher",
    message: "Teacher Inactive!"
});
}

}

            });
    })
  })
  
</script>

<script>
  $(function() {
    $('.tog1').change(function() {
      var status= $(this).prop('checked');
        var c= $(this).val();
      
      
      if(status==true){
        
        var state="verified";
      }
      if(status==false){
        var state="unverified";
      }

       
        $.ajax({
               type:'POST',
               url:'/update_verification_status',
               data:{ 
                _token:'{{ csrf_token() }}',
                stat1: state,
                id:c
            },
            success: function (data) {

if (data.msg.verification == 'verified') {
  $.growl.active({
      title: "Teacher",
      message: "Teacher Verified!"
  });
}
else {
$.growl.inactive({
    title: "Teacher",
    message: "Teacher Not Verified!"
});
}

}

            });
    })
  })
  
</script>

<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: red;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: green;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
 a.btn {
     -webkit-transform: scale(0.8);
     -moz-transform: scale(0.8);
     -o-transform: scale(0.8);
     -webkit-transition-duration: 0.5s;
     -moz-transition-duration: 0.5s;
     -o-transition-duration: 0.5s;
 }
 body {font-family: Arial, Helvetica, sans-serif;}
</style>

@include('layout/sidebar')
<div class="content-wrapper">
<section class="content">
    <div class="row">
        <div class="col-12">
            @if ($message = Session::get('success'))
                <div class="alert alert-success col-4" style="text-align: center; margin: auto;">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{ $message }}
                </div>
            @endif

            <div class="card">
                
                                           <div class="card-header">
                              <form  method="GET" action=""  id="search_form">
                              <div class="row">
                                 <div class="col-md-2">
                                 <div class="form-group">
                                       <label for="" class="form-label dd">By City</label>
                                       <select class="form-control" aria-label="Default select example" id="city" name="city" onchange="filter()">
                                       <option value="" selected="" disabled="">Select City</option>
                                       <option value="Varanasi" @if($city=='Varanasi'){{'Selected'}} @endif>Varanasi </option>
                                       <option value="Lucknow" @if($city=='Lucknow'){{'Selected'}} @endif>Lucknow</option>
                                       <option value="Patna" @if($city=='Patna'){{'Selected'}} @endif>Patna</option>
                                       <option value="Mughalsarai" @if($city=='Mughalsarai'){{'Selected'}} @endif>Mughalsarai</option>
                                       <option value="Prayagraj" @if($city=='Prayagraj'){{'Selected'}} @endif>Prayagraj</option>
                                       <option value="Kanpur" @if($city=='Kanpur'){{'Selected'}} @endif>Kanpur</option>
                                    </select>
                                    </div>
                                 </div>
                                 <div class="col-md-2">
                                    <div class="form-group">
                                       <label for="" class="form-label dd">By Pincode</label>
                                       <select class="form-control" aria-label="Default select example" id="pincode" name="pincode" onchange="filter()">
                                       <option value="" selected="" disabled="">Select Pincode</option>
                                       @foreach(App\UserDetail::whereNotNull('pincode')->groupBy('pincode')->get() as $pincode)
                                       <option value="{{$pincode->pincode}}" @if($pincodes==$pincode->pincode){{'Selected'}} @endif>{{$pincode->pincode}} </option>
                                       @endforeach
                                    </select>
                                    </div>
                                 </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                       <label for="" class="form-label dd">By Qualification</label>
                                       <select class="form-control" aria-label="Default select example" id="qualificaton" name="qualificaton"  onchange="filter()">
                                       <option value="" selected="" disabled="">Select Qualification</option>
                                     
                                      @foreach(App\UserDetail::whereNotNull('qualification')->groupBy('qualification')->get() as $qualification)
                                       <option value="{{$qualification->qualification}}" @if($qualification->qualification==$qualifiactions_data){{'Selected'}} @endif>{{$qualification->qualification}} </option>
                                       @endforeach
                                    </select>
                                    </div>
                                 </div>
                                 <div class="col-md-2">
                                    <div class="form-group">
                                       <label for="" class="form-label dd">By Class/Course</label>
                                       <select data-style="bg-white" class="selectpicker form-control" data-live-search="true" title="Select Subject" name="class[]" onchange="filter()" id="class" multiple>
                                          <option value="" selected="" disabled="">Select Class/Course</option>@foreach(App\Course::where('status','enable')->get() as $class)
                                          <option value="{{$class->name}}"@if(in_array($class->name,$classes)){{'Selected'}} @endif)>{{$class->name}}</option>@endforeach</select>
                                    </div>
                                 </div>
                                 <div class="col-md-2">
                                    <div class="form-group">
                                       <label for="" class="form-labell dd">By Subject</label>
                                       <select data-style="bg-white" class="selectpicker form-control" data-live-search="true" title="Select Subject"  name="subject[]" onchange="filter()" multiple >
                                          <option value="" selected="" disabled="">Select Subject</option>@foreach(App\Subject::where('status','enable')->get() as $subject)
                                          <option value="{{$subject->name}}" @if(in_array($subject->name,$subjects)){{'Selected'}} @endif>{{$subject->name}}</option>@endforeach</select>
                                    </div>
                                 </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                       <label for="" class="form-labell dd">By Status</label>
                                       <select class="form-control" onchange="filter()" name="status">
                                          <option value="" selected="" disabled="">Select Status</option>
                                         <option value="enable">Active</option>
                                         <option value="disable">In Active</option>
                                         </select>
                                    </div>
                                 </div>
                                 <!--<div class="col-md-1">
                                <div class="form-group" style="margin-top:10px"><br>
                                <button class="btn btn-light btn-sm" type="reset" value="submit">Reset</button>
                                 </div>
                                 </div>-->
                              </div>
                           </form>
                           </div>
                           
                           
<!--     <div class="card-header">
                    <h3 class="card-title">Teacher List</h3>
                    <button id="myBtn" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-info" style="float:right;"><i class="fas fa-plus" aria-hidden="true"></i>Add</button>
                </div> -->
                <div class="card-body">
                    <table id="example1" class="table table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>Active Plan</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Verification</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($data as $item)

                            <tr> 
                                <td>{{$i++}}</td>
                        	    <td>
                        	        @if( $item->user_details->profile_img == '')
                        	         <img src="images/profile.png" style="width:100px; height: 100px;">
                        	         @else
                        	         <img src="uploads/teacher_document/{{$item->user_details->profile_img}}" style="width:100px; height: 100px;">
                                    @endif
                        	    </td>
                	            <td>{{$item->name}}<br>({{$item->teacher_id}})</td>
                	            <td>{{$item->phone_number}}</td>
                	            <td>{{$item->email}}</td>
                                <td>{{$item->user_details->district}}</td>
                                @php
                                    $user_plan=App\Wallet::where('user_id', $item->id)->whereNotNull('plan_id')->orderBy('id', 'DESC')->first();
                                @endphp
                                <td>
                                    @if($user_plan != null)
                                        @php
                                            $plans=App\Plan::where('id', $user_plan->plan_id)->first();
                                        @endphp
                                        @if($plans!=null)
                                            {{$plans->plan_name}}
                                        @else
                                            --
                                        @endif
                                    @else    
                                        No Any Plan
                                    @endif
                                </td>
                                 <td>{{$item->user_details->created_at}}</td>
                               <td>
                                 <label class="switch">
                                  <input type="checkbox" class="tog" data-toggle="toggle" value="{{$item->id}}" @if($item->status=='enable'){{'checked'}}  @endif/>
                                  <span class="slider round"></span>
                                 </label>
                               </td>

                                <td>
                                 <label class="switch">
                                  <input type="checkbox" class="tog1" data-toggle="toggle" value="{{$item->id}}" @if($item->verification=='verified'){{'checked'}}  @endif/>
                                  <span class="slider round"></span>
                                 </label>
                               </td>

                                <td>
                                    <div class="btn-group">   
                                           <button type="button" class="btn btn-info btn-sm mybtn1" id="{{$item->id}}"> <i class="fa fa-eye"></i> </button>
                                            <form action="{{ route('teacher.destroy', $item->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger btn-sm" onclick="return areyousure();  "> <i class="fas fa-trash" aria-hidden="true"></i></button>
                                            </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $(".mybtn1").click(function(){
      var id = $(this).attr('id');
           //  alert (id);
      $.ajax({
    	            type:'GET',
                    url:'/teacher_edit/'+id,
                    data:{ 
                            _token:'{{ csrf_token() }}',
                        },
                    success:function(data) {
                      console.log(data);
                        $("#myModal1").modal('show');
                        $("#name").val(data.teacher.user_name);
                        $("#contact").val(data.teacher.user_phone_number);
                        $("#email").val(data.teacher.user_email);
                        $("#age").val(data.teacher.age);
                        $("#dob").val(data.teacher.dob);
                        $("#class").val(data.teacher.class);
                        $("#subject").val(data.teacher.subject);
                        $("#class_mode").val(data.teacher.class_mode);
                        $("#language").val(data.teacher.language);
                        $("#specilization").val(data.teacher.specilization);
                        $("#fee_range").val(data.teacher.fee_range);
                        $("#experience").val(data.teacher.experience);
                        $("#vaccination").val(data.teacher.vaccination);
                        $("#qualification").val(data.teacher.qualification);
                        $("#pincode").val(data.teacher.pincode);
                        $("#full_address").val(data.teacher.full_address);
                        $("#image").val(data.teacher.image);
                        $("#about").val(data.teacher.about);
                        $("#profile_image").attr('src','/uploads/teacher_document/'+data.teacher.profile_img);
                        
                        $('#teacher_certificates').empty();
                                $.each(data.teacher_certificates, function(key,val) {
                               $('#teacher_certificates').append(' <div class="col-md-3"><div class="form-group"><label>Qualification Certificate</label><br><a href="/uploads/teacher_document/'+val.certificate_file+'" target="_blank"> <img  src="/uploads/teacher_document/'+val.certificate_file+'" style="width:100%; height:200px;"> </a></div>')
                              });
                         $('#teacher_results').empty();      
                               $.each(data.teacher_results, function(key,val) {
                               $('#teacher_results').append(' <div class="col-md-3"><div class="form-group"><label>Other Certificate</label><br><a href="/uploads/teacher_document/'+val.result_file+'" target="_blank"> <img  src="/uploads/teacher_document/'+val.result_file+'" style="width:100%; height:200px;"> </a></div>')
                              });

                    }
                    

                });
  });
});
  
    function areyousure()
    {
        if(confirm("Are you sure, you want to delete?"))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    
    
    // Get the modal
var modal = document.getElementById("myModal");
var modal = document.getElementById("myModal1");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


</script>


 <!-- Modal -->
 
<!---- modal is here ---->
<div id="myModal" class="modal fade" role="dialog" style="z-index:9999999;">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Teacher</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                     <div class="col-md-4">
                         
                    <div class="form-group">   
                        <label>Name</label>
                        <input type="text" placeholder="Name" class="form-control" name="name" required>
                    </div>
                     </div>
                     
                     
                     <div class="col-md-4">
                     <div class="form-group">
                        <label>Contact</label>
                        <input type="number" placeholder="Contact" class="form-control" name="phone">
                    </div>
                     </div>
                     
                     <div class="col-md-4">
                     <div class="form-group">
                        <label>Email</label>
                        <input type="email" placeholder="Email" class="form-control" name="email">
                    </div>
                     </div>

                      <div class="col-md-4">
                          <div class="form-group">
                        <label>Classes</label>
                        <input type="text" placeholder="Classes" class="form-control" name="classes" required>
                     </div>
                     </div>

                    <div class="col-md-4">
                          <div class="form-group">
                        <label>experience</label>
                        <input type="text" placeholder="Experience" class="form-control" name="experience" required>
                     </div>
                     </div>

                     <div class="col-md-4">
                          <div class="form-group">
                        <label>Age</label>
                        <input type="text" placeholder="Age" class="form-control" name="age" required>
                     </div>
                     </div>

                    <div class="col-md-4">   
                    <div class="form-group">   
                        <label >Class Mode</label>
                        <select class="form-select form-control" name="class_mode">
                        <option selected="">Choose Class Mode</option>
                        <option value="Online">Online </option>
                        <option value="Offline">Offline</option>
                       </select>
                    </div>
                     </div>

                     <div class="col-md-4">
                          <div class="form-group">
                        <label>Qualification</label>
                        <input type="text" placeholder="Qualification" class="form-control" name="qualification" required>
                     </div>
                     </div>

                     <div class="col-md-4">
                          <div class="form-group">
                        <label>Tutor Type</label>
                        <input type="text" placeholder="Tutor Type" class="form-control" name="tutor_type" required>
                     </div>
                     </div>


                     <div class="col-md-6">
                          <div class="form-group">
                        <label>Prefer Area</label>
                        <input type="text" placeholder="Prefer Area" class="form-control" name="prefer_area" required>
                     </div>
                     </div>

                     <div class="col-md-6">
                          <div class="form-group">
                        <label>Image</label>
                        <input type="file" placeholder="Image" class="form-control" name="image" accept="image/png, image/gif, image/jpeg"  required="">
                     </div>
                     </div>

                     <div class="col-md-6">
                          <div class="form-group">
                        <label>About</label>
                        <input type="text" placeholder="About" class="form-control" name="about" required>
                     </div>
                     </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label name="status" >Status</label>
                            <label class="switch">
                	            <input type="checkbox" data-on="enable" data-off="disable" name="status" value="enable">
                                <span class="slider round"></span>
                            </label>
                        </div>
                         
                    </div>
                       <div class="col-md-6">
                           <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                       </div>

                       <div class="col-md-6">
             
                <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right;">Close</button>
           
                       </div>
                      
                    </div>
                  
                </form>
            </div>
            
        </div>
    </div>
</div>


<div id="myModal1" class="modal fade" role="dialog" style="z-index:99999999999;">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Teacher Details</h4>
            </div>
            <div class="modal-body">
                <form action="#">
                @csrf
                    <div class="row">
                     <div class="col-md-4">
                    <div class="form-group">   
                        <label>Name</label>
                        <input type="text" class="form-control" id="name" disabled>
                    </div>
                     </div>
                     
                     
                     <div class="col-md-4">
                     <div class="form-group">
                        <label>Contact</label>
                        <input type="text" class="form-control" id="contact" disabled>
                    </div>
                     </div>
                     
                     <div class="col-md-4">
                     <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="email" disabled>
                    </div>
                     </div>
                     
                    <div class="col-md-4">
                          <div class="form-group">
                        <label>Age</label>
                        <input type="text" class="form-control" id="age" disabled>
                     </div>
                     </div>
                     <div class="col-md-4">
                          <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="text" class="form-control" id="dob" disabled>
                     </div>
                     </div> 

                      <div class="col-md-4">
                          <div class="form-group">
                        <label>Classes</label>
                        <input type="text" class="form-control" id="class_mode" disabled>
                     </div>
                     </div>

                    <div class="col-md-4">   
                    <div class="form-group">   
                        <label >Class/Course</label>
                        <input type="text" class="form-control" id="class" disabled>
                    </div>
                     </div>
                     <div class="col-md-4">
                          <div class="form-group">
                        <label>Language</label>
                        <input type="text" class="form-control" id="language" disabled>
                     </div>
                     </div>
                     
                     <div class="col-md-4">
                          <div class="form-group">
                        <label>Subject</label>
                        <input type="text" class="form-control" id="subject" disabled>
                     </div>
                     </div>

                     <div class="col-md-4">
                          <div class="form-group">
                        <label>Specilization</label>
                        <input type="text" class="form-control" id="specilization" disabled>
                     </div>
                     </div>
                    <div class="col-md-4">
                          <div class="form-group">
                        <label>Experience</label>
                        <input type="text" class="form-control" id="experience" disabled>
                     </div>
                     </div>
                     <div class="col-md-4">
                          <div class="form-group">
                        <label>Qualification</label>
                         <input type="text" class="form-control" id="qualification" disabled>
                     </div>
                     </div>
                     <div class="col-md-4">
                          <div class="form-group">
                        <label>Fee Range</label>
                         <input type="text" class="form-control" id="fee_range" disabled>
                     </div>
                     </div>

                     <div class="col-md-4">
                          <div class="form-group">
                        <label>Prefer Area</label>
                         <input type="text" class="form-control" id="pincode" disabled>
                     </div>
                     </div>
                     <div class="col-md-4">
                          <div class="form-group">
                        <label>Vaccination</label>
                         <input type="text" class="form-control" id="vaccination" disabled>
                     </div>
                     </div>
                    <div class="col-md-4">
                          <div class="form-group">
                        <label>Full Address</label>
                         <textarea type="text" class="form-control" id="full_address" disabled style="height:150px;"></textarea>
                     </div>
                     </div>
                     <div class="col-md-4">
                          <div class="form-group">
                        <label>About</label>
                         <textarea type="text" class="form-control" id="about" disabled style="height:150px;"></textarea>
                     </div>
                     </div>
                    <div class="col-md-4">
                          <div class="form-group">
                        <label>Profile Image</label><br>
                       <a href="" id="p_img_link" target="_blank"> <img id="profile_image" src="" style="width:100%; height:150px;"> </a>
                        
                     </div>
                     </div>

                          <div id="teacher_certificates" class="row">
                          </div>
                          
                          <div id="teacher_results" class="row">
                          </div>
<!--                     <div class="col-md-6">
                          <div class="form-group">
                        <label>Result Document</label >
                         <embed id="result_image" src="" type="application/pdf" style="width:100%; height:250px;" />
                         <a class="btn btn-info" href="" id="r_img_link" target="_blank"> View </a>
                     </div>
                     </div>
                     <div class="col-md-6">
                          <div class="form-group">
                        <label>Certificate Document</label>
                         
                         <embed id="certiicate_image" src="" type="application/pdf" style="width:100%; height:250px;" /></a>
                         <a class="btn btn-info" href="" id="c_img_link" target="_blank"> View </a>
                     </div>
                     </div>-->
                     
                       <div class="col-md-12">
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right;">Close</button>
                       </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--- modal is end here ----> <!-- MOdel End-->

<script>
    
    function filter(el){
            $('#search_form').submit();
        }
    
</script>

  @include('layout/footer')