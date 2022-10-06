@include('layout/header')

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
a.btn:hover {
     -webkit-transform: scale(1.1);
     -moz-transform: scale(1.1);
     -o-transform: scale(1.1);
 }
 a.btn {
     -webkit-transform: scale(0.8);
     -moz-transform: scale(0.8);
     -o-transform: scale(0.8);
     -webkit-transition-duration: 0.5s;
     -moz-transition-duration: 0.5s;
     -o-transition-duration: 0.5s;
 }
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
                    <h3 class="card-title">Notification</h3>
                    <button id="myBtn" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-info mybtn" style="float:right;"><i class="fas fa-plus" aria-hidden="true"></i>Course</button>
                    <button id="myBtn1" data-toggle="modal" data-target="#myModal1" class="btn btn-primary btn-info mybtn1" style="float:right;margin: 0 5px 0 5px;"><i class="fas fa-plus" aria-hidden="true"></i>Year</button>
                    <button id="myBtn2" data-toggle="modal" data-target="#myModal2" class="btn btn-primary btn-info mybtn2" style="float:right;"><i class="fas fa-plus" aria-hidden="true"></i>Student</button>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Student</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($data as $item)
                            <tr> 
                                <td>{{$i++}}</td>
                        	    <td>{{$item->title}}</td>
                	            <td>{{$item->content}}</td>
                	            <td>{{$item->student}}</td>
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
  $(".mybtn").click(function(){
      var id = $(this).attr('id');
      $.ajax({
    	            type:'GET',
                    url:'/get_courses',
                    data:{ 
                            _token:'{{ csrf_token() }}',
                        },
                    success:function(data) {
                        //console.log(data.msg.name);
                        $("#myModal").modal('show');
                        $('.student_search').select2(); 
                         
                         $("#student").empty();
                $("#student").append('<option value="">Select Course</option>');
               $.each(data.msg,function(item,i){
                   //console.log(data.msg);
                 var sub_cat_name=i.id;
                  $("#student").append('<option value='+sub_cat_name+'>'+i.name+'</option>');
               });
                        
}
                });
  });
});

$(document).ready(function(){
  $(".mybtn1").click(function(){
      var id = $(this).attr('id');
      $.ajax({
    	            type:'GET',
                    url:'/get_year',
                    data:{ 
                            _token:'{{ csrf_token() }}',
                        },
                    success:function(data) {
                        //console.log(data.msg.name);
                        $("#myModal1").modal('show');
                         $('.student_search').select2();
                         
                         $("#student1").empty();
                $("#student1").append('<option value="">Select Year</option>');
               $.each(data.msg,function(item,i){
                   //console.log(data.msg);
                 var sub_cat_name=i.student_session;
                  $("#student1").append('<option value='+sub_cat_name+'>'+i.student_session+'</option>');
               });
                        
}
                });
  });
});

$(document).ready(function(){
     $(".mybtn2").click(function(){
      var id = $(this).attr('id');
      $.ajax({
    	            type:'GET',
                    url:'/get_student',
                    data:{ 
                            _token:'{{ csrf_token() }}',
                        },
                    success:function(data) {
                        //console.log(data.msg.name);
                        $("#myModal2").modal('show');
                        $('.student_search').select2();
                         
                         $("#student2").empty();
                $("#student2").append('<option value="">Select Student</option>');
               $.each(data.msg,function(item,i){
                   //console.log(data.msg);
                 var sub_cat_name=i.id;
                  $("#student2").append('<option value='+sub_cat_name+'>'+i.name+'('+i.phone_number+')</option>');
               });
                        
}
                });
  });
});


var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

var modal1 = document.getElementById("myModal1");
var btn1 = document.getElementById("myBtn1");
var span = document.getElementsByClassName("close")[0];

var modal2 = document.getElementById("myModal2");
var btn2 = document.getElementById("myBtn2");
var span = document.getElementsByClassName("close")[0];

</script>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Send Notification</h4>
            </div>
            <div class="modal-body">
                <form action="/post_course" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                     <div class="col-md-6">
                         
                    <div class="form-group">   
                        <label label="title" >Title</label>
                        <input type="text" placeholder="Title" class="form-control" name="title" required>
                    </div>
                     </div>
                     
                     
                     <div class="col-md-6">
                     <div class="form-group">
                        <label name="content" >Content</label>
                        <input type="text" placeholder="Content" class="form-control" name="content">
                    </div>
                     </div>
                     
                     <div class="col-md-6">
                     <div class="form-group">
                        <label name="course" >Course</label>
                        <select name="course" id="student" class="form-control student_search">
                            
                        </select>
                    </div>
                     </div>
                      <div class="col-md-6"></div>
                       <div class="col-md-6">
                           <button type="submit" class="btn btn-primary">Send Notification</button>
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
<div id="myModal1" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Send Notification1</h4>
            </div>
            <div class="modal-body">
                <form action="/post_year" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                     <div class="col-md-6">
                         
                    <div class="form-group">   
                        <label label="title" >Title</label>
                        <input type="text" placeholder="Title" class="form-control" name="title" required>
                    </div>
                     </div>
                     
                     
                     <div class="col-md-6">
                     <div class="form-group">
                        <label name="content" >Content</label>
                        <input type="text" placeholder="Content" class="form-control" name="content">
                    </div>
                     </div>
                     
                     <div class="col-md-6">
                     <div class="form-group">
                        <label name="student1" >Batch</label>
                        <select name="student1" id="student1" class="form-control student_search">
                            
                        </select>
                    </div>
                     </div>
                      <div class="col-md-6"></div>
                       <div class="col-md-6">
                           <button type="submit" class="btn btn-primary">Send Notification</button>
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
<div id="myModal2" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Send Notification2</h4>
            </div>
            <div class="modal-body">
                <form action="/post_student" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                     <div class="col-md-6">
                         
                    <div class="form-group">   
                        <label label="title" >Title</label>
                        <input type="text" placeholder="Title" class="form-control" name="title" required>
                    </div>
                     </div>
                     
                     
                     <div class="col-md-6">
                     <div class="form-group">
                        <label name="content" >Content</label>
                        <input type="text" placeholder="Content" class="form-control" name="content">
                    </div>
                     </div>
                     
                     <div class="col-md-6">
                     <div class="form-group">
                        <label name="student2" >Student</label>
                        <select name="student2" id="student2" class="form-control student_search">
                            
                        </select>
                    </div>
                     </div>
                      <div class="col-md-6"></div>
                       <div class="col-md-6">
                           <button type="submit" class="btn btn-primary">Send Notification</button>
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

  @include('layout/footer')