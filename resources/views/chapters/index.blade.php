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
 
 
 
 body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.cntr{
    text-align:center;
        margin-bottom: -40px;
}

<style>
img{
  max-width:180px;

}
input[type=file]{
padding:10px;
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
                    <h3 class="card-title">Chapter List</h3><br>
                    <a href="{{ route('courses.index') }}">Course(@php $yea=\App\Course::where('id',$course->course_id)->first()  @endphp   {{$yea->name}})</a> / <a href="/get_subject/{{$course->course_id}}">Subject(@php $yea=\App\Subject::where('id',$id)->first()  @endphp   {{$yea->name}})</a> / All Chapters
                    <button id="myBtn" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-info" style="float:right;"><i class="fas fa-plus" aria-hidden="true"></i>Add</button>
                </div>
                <div class="card-body">
                    <h1 class="cntr">@php $yea=\App\Subject::where('id',$id)->first()  @endphp   {{$yea->name}}</h1>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($data as $item)
                            <tr> 
                                <td>{{$i++}}</td>
                	            <td><a href="/get_topic/{{$item->id}}">{{$item->name}}</a></td>
                	            <td><img id="blah" src="{{ URL::asset('public/uploads/chapter/'.$item->image)  }}" alt="your image"  style="height:50px;width:100px;" /></td>
                	            <td>
                	                <label class="switch">
                	                    <input type="checkbox" class="tog" data-toggle="toggle" value="{{$item->id}}" @if($item->status=='enable') {{$checked}} else {{$unchecked}}  @endif >
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        @can('employee-edit')   
                                           <a href="#" class="btn btn-primary btn-sm mybtn1" id="{{$item->id}}"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Edit</a>
                                        @endcan
                                        @can('employee-delete')
                                            <form action="{{ route('chapters.destroy', $item->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger btn-sm" onclick="return areyousure();  "> <i class="fas fa-trash" aria-hidden="true"></i>Delete</button>
                                            </form>
                                        @endcan
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
      $.ajax({
    	            type:'GET',
                    url:'/chapter_edit/'+id,
                    data:{ 
                            _token:'{{ csrf_token() }}',
                        },
                    success:function(data) {
                        $("#myModal1").modal('show');
                         $("#chapter_id").val(data.msg.id);
                        $("#name").val(data.msg.name);
                        $("#blah2").attr('src','/public/uploads/chapter/'+data.msg.image);
                        var status=data.msg.status;
                        if(status=='enable')
                        {
                            $('#status').prop('checked', true);
                        }
                        
                    }

                });
  });
});
    $(function() 
    {
        $('.tog').change(function() 
        {
    	    var status= $(this).prop('checked');
            var c= $(this).val();
    	    if(status==true)
    	    {
    		    var state="enable";
    	    }
    	    if(status==false)
    	    {
    		    var state="disable";
    	    }
    	    $.ajax({
    	            type:'POST',
                    url:'/update_status_chapter',
                    data:{ 
                            _token:'{{ csrf_token() }}',
                            stat: state,
                            e_id:c
                        },
                    success:function(data) {
                    if (data.msg.status == 'enable') 
                    {
                        $.growl.active({
                                            title: "Chapter",
                                            message: "Chapter Active!"
                                        });
                    } 
                    else 
                    {
                        $.growl.inactive({
                        title: "Chapter",
                        message: "Chapter Inactive!"
                        });
                    }
                    }

                });
        })
    })
    
    $(function() 
    {
        $('.tog1').change(function() 
        {
            
    	    var status= $(this).prop('checked');
            var c= $(this).val();
    	    if(status==true)
    	    {
    		    var state="paid";
    	    }
    	    if(status==false)
    	    {
    		    var state="free";
    	    }
    	    $.ajax({
    	            type:'POST',
                    url:'/update_status_course_fee',
                    data:{ 
                            _token:'{{ csrf_token() }}',
                            stat: state,
                            e_id:c
                        },
                    success:function(data) {
                    if (data.msg.course_status == 'paid') 
                    {
                        $.growl.active({
                                            title: "Student",
                                            message: "Course Paid!"
                                        });
                    } 
                    else 
                    {
                        $.growl.inactive({
                        title: "Student",
                        message: "Course Free!"
                        });
                    }
                    }

                });
        })
    })
  
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
<div id="myModal" class="modal fade" role="dialog" style="z-index:99999999999999999999;">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Chapter</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('chapters.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <input type="text" hidden placeholder="your name" class="form-control" name="course_id" value="{{$course->course_id}}">
                        <input type="text" hidden placeholder="your name" class="form-control" name="subject_id" value="{{$id}}">
                        
                     <div class="col-md-12">
                         
                    <div class="form-group">   
                        <label label="name" >Chapter Name</label>
                        <input type="text" placeholder="your name" class="form-control" name="name" required>
                    </div>
                     </div>
                     <div class="col-md-12">
                     <div class="form-group">
                        <label name="image" >Image</label>
                        <input type="file" name="image" id="textfield1">
                        <img id="blah1" src="/public/uploads/no-image.png" alt="your image" / style="height: 100px;width: 180px;margin-left: -10%;">
                        <i  style="font-size:24px;position: absolute;margin-left: -9px;margin-top: -11px;color: red;" class="fa" type="button" onclick="ClearFields();">&#xf00d;</i>
                    </div>
                     </div>
                     
                    <div class="col-md-12">
                        <div class="form-group">
                            <label name="status" >Status</label>
                            <label class="switch">
                	            <input type="checkbox" data-on="enable" data-off="disable" name="status">
                                <span class="slider round"></span>
                            </label>
                        </div>
                         
                    </div>
                       <div class="col-md-6">
                           <button type="submit" class="btn btn-primary">Submit</button>
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
<div id="myModal1" class="modal fade" role="dialog" style="z-index:99999999999999999999;">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Chapter</h4>
            </div>
            <div class="modal-body">
                <form action="/chapter_update" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <input type="hidden" id="chapter_id" name="chapter_id">
                        
                        
                     <div class="col-md-12">
                         
                    <div class="form-group">   
                        <label label="name" >Chapter Name</label>
                        <input type="text" placeholder="your name" class="form-control" id="name" name="name">
                    </div>
                     </div>
                     <div class="col-md-12">
                     <div class="form-group">
                        <label name="image" >Image</label>
                        <input type="file" name="image" id="textfield2">
                        <img id="blah2" src="/public/uploads/no-image.png" alt="your image" / style="height: 100px;width: 180px;margin-left: -10%;">
                        <i  style="font-size:24px;position: absolute;margin-left: -9px;margin-top: -11px;color: red;" class="fa" type="button" onclick="ClearFields();">&#xf00d;</i>
                    </div>
                     </div>
                     
                    <div class="col-md-12">
                        <div class="form-group">
                            <label name="status" >Status</label>
                            <label class="switch">
                	            <input type="checkbox" id="status" name="status">
                                <span class="slider round"></span>
                            </label>
                        </div>
                         
                    </div>
                       <div class="col-md-6">
                           <button type="submit" class="btn btn-primary">Submit</button>
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

<!--- modal is end here ----> <!-- MOdel End-->
<script>
function ClearFields() {

     document.getElementById("textfield1").value = "";
      document.getElementById("blah1").src = "/public/uploads/no-image.png";
      
      document.getElementById("textfield2").value = "";
      document.getElementById("blah2").src = "/public/uploads/no-image.png";
}
 textfield1.onchange = evt => {
  const [file] = textfield1.files
  if (file) {
    blah1.src = URL.createObjectURL(file)
  }
}

textfield2.onchange = evt => {
  const [file] = textfield2.files
  if (file) {
    blah2.src = URL.createObjectURL(file)
  }
}
</script>


  @include('layout/footer')