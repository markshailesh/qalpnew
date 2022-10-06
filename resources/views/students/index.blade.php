@include('layout/header')
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
        <!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
      title: "Student",
      message: "Student Active!"
  });
}
else {
$.growl.inactive({
    title: "Student",
    message: "Student Inactive!"
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
            @if(Session::get('data')!='')
                <div class="alert alert-success col-4 " style="text-align: center; margin: auto; background: #2ECC71;" >
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{Session::get('data')}}
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-danger col-4" style="text-align: center; margin: auto;">
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
                                       <label for="" class="form-labell dd">By Subject</label>
                                       <select data-style="bg-white" class="selectpicker form-control" data-live-search="true" title="Select Subject"  name="subject[]" onchange="filter()" multiple >
                                          <option value="" selected="" disabled="">Select Subject</option>@foreach(App\Subject::where('status','enable')->get() as $subject)
                                          <option value="{{$subject->name}}" @if(in_array($subject->name,$subjects)){{'Selected'}} @endif>{{$subject->name}}</option>@endforeach</select>
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
                                       <label for="" class="form-labell dd">By Language</label>
                                       <select class="form-control " name="language" id="language" onchange="filter_student()">
                                          <option value="">Select Language</option>@foreach(App\Language::where('status','enable')->get() as $language)
                                          <option value="{{$language->name}}">{{$language->name}}</option>@endforeach</select>
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
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>Active plan</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($data as $item)
                        @php
                          $user_details = App\UserDetail::where('user_id', $item->id)->first();
                        @endphp 

                        @if ($user_details!=null)  
                            <tr> 
                              <td>{{$i++}}</td>
                              <td>
                                  @if( $user_details->profile_img!=null)
                                  <img src="uploads/teacher_document/{{$item->user_details->profile_img}}" style="width:100px; height: 100px;">
                                  @else
                                  <img src="images/profile.png" style="width:100px; height: 100px;">
                                   @endif
                                 </td>
                        	    <td>{{$item->name}}</td>
                	            <td>{{$item->phone_number}}</td>
                                <td>{{$item->email}}</td> 
                                <td>{{$user_details->district}}</td>
                                @php
                                    $user_plan=App\Wallet::where('user_id', $item->id)->whereNotNull('plan_id')->orderBy('id', 'DESC')->first();
                                @endphp
                                <td>
                                    @if($user_plan != null)
                                        @php
                                            $plans=App\Plan::where('id', $user_plan->plan_id)->first();
                                        @endphp
                                        {{$plans->plan_name}}
                                    
                                    @else    
                                        No Any Plan
                                    @endif
                                </td>
                                <td>{{$user_details->created_at}}</td>
                	            <td>
                	                <label class="switch">
                	                    <input type="checkbox" class="tog" data-toggle="toggle" value="{{$item->id}}" @if($item->status=='enable') {{$checked}} else {{$unchecked}}  @endif >
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <td>
                                         <div class="btn-group">   
                                            <form action="{{ route('students.destroy', $item->id) }}" method="POST">
                                        <button type="button" class="btn btn-info btn-sm mybtn1" id="{{$item->id}}"> <i class="fa fa-eye"></i> </button>
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger btn-sm" onclick="return areyousure();  "> <i class="fas fa-trash" aria-hidden="true"></i></button>
                                            </form>
                                    </div>
                                </td>
                            </tr>
                         @endif
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
      //alert (id);
      $.ajax({
    	            type:'GET',
                    url:'/student_edit/'+id,
                    data:{ 
                            _token:'{{ csrf_token() }}',
                        },
                    success:function(data) {
                        //alert(data.message);
                      console.log(data.msg);
                        $("#myModal1").modal('show');
                        $("#name").val(data.user_name);
                        $("#phone").val(data.user_phone_number);
                        $("#email").val(data.user_email);
                        $("#dob").val(data.dob);
                        $("#gender").val(data.gender);
                        $("#classs").val(data.class);
                        $("#subject").val(data.subject);
                        $("#languages").val(data.language);
                        $("#class_mode").val(data.class_mode);
                        $("#fee_range").val(data.fee_range);
                        $("#district").val(data.district);
                        $("#pincodes").val(data.pincode);
                        $("#full_address").val(data.full_address);
                        $("#vaccination").val(data.vaccination);
                        $("#profile_image").attr('src','/uploads/teacher_document/'+data.profile_img);
                    }

                });
  });
});
</script>

<div id="myModal1" class="modal fade" role="dialog" style="z-index:99999999999;">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Student Details</h4>
            </div>
            <div class="modal-body">
                <form action="/teacher_update" method="POST" enctype="multipart/form-data">
                @csrf
                    
                    <div class="row">
                        <input type="hidden" id="id" name="id">
                     <div class="col-md-4">
                         
                    <div class="form-group">   
                        <label>Name</label>
                        <input type="text" class="form-control" id="name" disabled>
                    </div>
                     </div>
                     
                     
                     <div class="col-md-4">
                     <div class="form-group">
                        <label>Contact</label>
                        <input type="text" class="form-control" id="phone" disabled>
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
                        <label>Date Of Birth</label>
                        <input type="date" class="form-control" id="dob" disabled>
                    </div>
                     </div>
                     <div class="col-md-4">
                     <div class="form-group">
                        <label>Gender</label>
                        <input type="text" class="form-control" id="gender" disabled>
                    </div>
                     </div>
                     
                     <div class="col-md-4">
                     <div class="form-group">
                        <label>Class Mode</label>
                        <input type="text" class="form-control" id="class_mode" disabled>
                    </div>
                     </div>
                     <div class="col-md-4">
                     <div class="form-group">
                        <label>Class</label>
                        <input type="text" class="form-control" id="classs" disabled>
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
                        <label>Language</label>
                        <input type="text" class="form-control" id="languages" disabled>
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
                        <label>Area pin</label>
                        <input type="text" class="form-control" id="pincodes" disabled>
                    </div>
                     </div>
                     
                     <div class="col-md-4">
                     <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" id="district" disabled>
                    </div>
                     </div>
                      <div class="col-md-4">
                          <div class="form-group">
                        <label>Full Address</label>
                         <textarea type="text" class="form-control" id="full_address" disabled style="height:120px;"></textarea>
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
                        <label>Profile Image</label><br>
                        <img id="profile_image" src="" style="width:120px; height:120px;">
                     </div>
                     </div>
                      
                   
                       <div class="col-md-12">
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right;">Close</button>
                       </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
  @include('layout/footer')