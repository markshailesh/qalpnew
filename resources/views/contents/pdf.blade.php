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

.button {
  border-size: 5px;
  color: white;
  padding: 7px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 0px;
  cursor: pointer;
}
.btn-info1 {
    color: #000;
    background-color: #fff;
    border-color: #17a2b8;
    box-shadow: none;
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

.btn-primary1.focus, .btn-primary1:focus {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8;
    box-shadow: none,0 0 0 0 rgba(38,143,255,.5);
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
                    <h3 class="card-title">Topics List</h3><br>
                    <a href="{{ route('courses.index') }}">Course(@php $yea=\App\Course::where('id',$chapter->course_id)->first()  @endphp   {{$yea->name}})</a> 
                    / 
                    <a href="/get_subject/{{$chapter->course_id}}">Subject(@php $yea=\App\Subject::where('id',$chapter->subject_id)->first()  @endphp   {{$yea->name}})</a> 
                    / 
                    <a href="/get_chapter/{{$chapter->subject_id}}">Chapter(@php $yea=\App\Chapter::where('id',$chapter->chapter_id)->first()  @endphp   {{$yea->name}})</a>
                    /<br>
                    <a href="/get_topic/{{$chapter->chapter_id}}">Topic(@php $yea=\App\Topic::where('id',$id)->first()  @endphp   {{$yea->name}})</a>
                    /
                    All PDF Content
                    <button id="myBtn" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-info" style="float:right;"><i class="fas fa-plus" aria-hidden="true"></i>Add</button>
                    <div style="margin-left: 70%;margin-top: -3%;">
                    <a href="/get_video_content/{{$chapter->id}}" class="btn btn-primary1 btn-info1">Video</a>
                    <a href="/get_pdf_content/{{$chapter->id}}" class="btn btn-primary1 btn-info">PDF</a>
                    <a href="/get_test/{{$chapter->id}}" class="btn btn-primary1 btn-info1">Test</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3 class="cntr">@php $yea=\App\tOPIC::where('id',$id)->first()  @endphp   {{$yea->name}}</h3>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Title</th>
                                <th>PDF</th>
                                <th>Free/Paid</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($data as $item)
                            <tr> 
                                <td style="padding-top: 7%;">{{$i++}}</td>
                	            <td style="padding-top: 7%;">{{$item->title}}</a></td>
                	            <td>
                	                <iframe src="/public/uploads/content/{{$item->pdf}}" width="100%" height="150px"></iframe>
                	           </td>
                	             <td style="padding-top: 7%;">
                	                <label class="switch">
                	                    <input type="checkbox" class="tog1" data-toggle="toggle" value="{{$item->id}}" @if($item->content_status=='paid') {{$checked}} else {{$unchecked}}  @endif >
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                	            
                	            <td style="padding-top: 7%;">
                	                <label class="switch">
                	                    <input type="checkbox" class="tog" data-toggle="toggle" value="{{$item->id}}" @if($item->status=='enable') {{$checked}} else {{$unchecked}}  @endif >
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <td style="padding-top: 7%;">
                                    <div class="btn-group">
                                         <a data-toggle="tooltip" title="Preview" href="/public/uploads/content/{{$item->pdf}}" target="blank" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        @can('employee-edit')
                                        <a data-toggle="tooltip" title="Edit" href="#" class="btn btn-primary btn-sm mybtn1" id="{{$item->id}}"><i class="fas fa-pencil-alt" aria-hidden="true"></i></a>
                                        @endcan
                                        @can('employee-delete')
                                            <form action="{{ route('contents.destroy', $item->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button data-toggle="tooltip" title="Delete" class="btn btn-danger btn-sm" onclick="return areyousure();  "> <i class="fas fa-trash" aria-hidden="true"></i></button>
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $(".mybtn1").click(function(){
      var id = $(this).attr('id');
      $.ajax({
    	            type:'GET',
                    url:'/content_edit/'+id,
                    data:{ 
                            _token:'{{ csrf_token() }}',
                        },
                    success:function(data) {
                        $("#myModal1").modal('show');
                         $("#content_id").val(data.msg.id);
                        $("#title").val(data.msg.title);
                        $("#blah2").attr('src','/public/uploads/content/'+data.msg.pdf);
                        
                        var content_status=data.msg.content_status;
                        var status=data.msg.status;
                        if(content_status=='paid')
                        {
                            $('#content_status').prop('checked', true);
                        }
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
                    url:'/update_status_content',
                    data:{ 
                            _token:'{{ csrf_token() }}',
                            stat: state,
                            e_id:c
                        },
                    success:function(data) {
                    if (data.msg.status == 'enable') 
                    {
                        $.growl.active({
                                            title: "Content",
                                            message: "Content Active!"
                                        });
                    } 
                    else 
                    {
                        $.growl.inactive({
                        title: "Content",
                        message: "Content Inactive!"
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
                    url:'/update_status_content_fee',
                    data:{ 
                            _token:'{{ csrf_token() }}',
                            stat: state,
                            e_id:c
                        },
                    success:function(data) {
                    if (data.msg.content_status == 'paid') 
                    {
                        $.growl.active({
                                            title: "Content",
                                            message: "Content Paid!"
                                        });
                    } 
                    else 
                    {
                        $.growl.inactive({
                        title: "Content",
                        message: "Content Free!"
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

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>


 <!-- Modal -->
 
<!---- modal is here ---->

<div id="myModal" class="modal fade" role="dialog" style="z-index:99999999999999999999;">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Topic</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('contents.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <input type="text" hidden placeholder="your name" class="form-control" name="course_id" value="{{$chapter->course_id}}">
                        <input type="text" hidden placeholder="your name" class="form-control" name="subject_id" value="{{$chapter->subject_id}}">
                        <input type="text" hidden placeholder="your name" class="form-control" name="chapter_id" value="{{$chapter->chapter_id}}">
                        <input type="text" hidden placeholder="your name" class="form-control" name="topic_id" value="{{$id}}">
                        
                     <div class="col-md-12">
                         
                    <div class="form-group">   
                        <label label="name" >PDF Title</label>
                        <input type="text" placeholder="PDF Title" class="form-control" name="title" required>
                    </div>
                     </div>
                    <div class="col-md-12">
                     <div class="form-group">
                        <label name="pdf" >PDF</label>
                        <input type="file" name="pdf" id="textfield1">
                        <iframe id="blah1" src="/public/uploads/no-image.png" width="100%" height="150px"></iframe>
                        <i  style="font-size:24px;position: absolute;margin-left: -9px;margin-top: -11px;color: red;" class="fa" type="button" onclick="ClearFields();">&#xf00d;</i>
                    </div>
                     </div>
                     
                     <div class="col-md-6">
                        <div class="form-group">
                            <label name="content_status" >Free/Paid</label>
                            <label class="switch">
                	            <input type="checkbox" data-on="enable" data-off="disable" name="content_status">
                                <span class="slider round"></span>
                            </label>
                        </div>
                         
                    </div>
                     
                    <div class="col-md-6">
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
                <h4 class="modal-title">Edit Content</h4>
            </div>
            <div class="modal-body">
                <form action="/content_update" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <input type="hidden" id="content_id" name="content_id">
                        
                        
                     <div class="col-md-12">
                         
                    <div class="form-group">   
                        <label label="title" >Title</label>
                        <input type="text" placeholder="your name" class="form-control" id="title" name="title">
                    </div>
                     </div>
                     <div class="col-md-12">
                     <div class="form-group">
                        <label name="pdf" >PDF</label>
                        <input type="file" name="pdf" id="textfield2">
                        <iframe id="blah2" src="/public/uploads/no-image.png" width="100%" height="150px"></iframe>
                        <i  style="font-size:24px;position: absolute;margin-left: -9px;margin-top: -11px;color: red;" class="fa" type="button" onclick="ClearFields();">&#xf00d;</i>
                    </div>
                     </div>
                     
                     <div class="col-md-6">
                        <div class="form-group">
                            <label name="status" >Content Status</label>
                            <label class="switch">
                	            <input type="checkbox" id="content_status" name="content_status">
                                <span class="slider round"></span>
                            </label>
                        </div>
                         
                    </div>
                     
                    <div class="col-md-6">
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