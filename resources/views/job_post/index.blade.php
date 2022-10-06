@include('layout/header')

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
                <div class="alert alert-success col-4" style="text-align: center; margin: auto;">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{ $message }}
                </div>
            @endif

            <div class="card">
<!--                 <div class="card-header">
                    <h3 class="card-title">Job Post</h3>
                  <button id="myBtn" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-info" style="float:right;"><i class="fas fa-plus" aria-hidden="true"></i>Add</button>
                </div> -->
                <div class="card-body">
                    <table id="example1" class="table table-responsive table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>City</th>
                                <th>Area Pin</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($data as $item)
                            <tr> 
                              <td>{{$i++}}</td>
                	            <td>{{$item->name}}</td>
                	            <td>{{$item->phone}}</a></td>
                              <td>{{$item->city}}</a></td>
                              <td>{{$item->area_pin}}</td>
                              <td>{{$item->email}}</td>
                              <td>{{$item->created_at}}</td>
                                <td>
                                    <div class="btn-group">
                                            <form action="{{ route('job_post.destroy', $item->id) }}" method="POST">
                                        <button type="button" class="btn btn-info btn-sm mybtn1" id="{{$item->id}}"> <i class="fa fa-eye"></i> </button>
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
      $.ajax({
    	            type:'GET',
                    url:'/job_edit/'+id,
                    data:{ 
                            _token:'{{ csrf_token() }}',
                        },
                    success:function(data) {
                      console.log(data.msg);
                        $("#myModal1").modal('show');
                        $("#name").val(data.name);
                        $("#phone").val(data.phone);
                        $("#f_name").val(data.f_name);
                        $("#dob").val(data.dob);
                        $("#email").val(data.email);
                        $("#address").val(data.address);
                        $("#h_college").val(data.h_college);
                        $("#h_year").val(data.h_year);
                        $("#h_percentage").val(data.h_percentage);
                         $("#i_college").val(data.i_college);
                        $("#i_year").val(data.i_year);
                        $("#i_percentage").val(data.i_percentage);
                         $("#g_college").val(data.g_college);
                        $("#g_year").val(data.g_year);
                        $("#g_percentage").val(data.g_percentage);
                        $("#pg_college").val(data.pg_college);
                        $("#pg_year").val(data.pg_year);
                        $("#pg_percentage").val(data.pg_percentage);
                        $("#degree_desc").val(data.degree_desc);
                        $("#higher_degree").val(data.higher_degree);
                        $("#experience").val(data.experience);
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
 </script>

 
<!---- modal is here ---->
<div id="myModal1" class="modal fade" role="dialog" style="z-index:999999;">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Job Details</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('job_post.store')}}" method="POST" enctype="multipart/form-data">
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
                        <label>Father Name</label>
                        <input type="text" class="form-control" id="f_name" disabled>
                    </div>
                     </div>
                     
                    <div class="col-md-4">
                    <div class="form-group">   
                        <label>Date Of Birth</label>
                        <input type="text" class="form-control" id="dob" disabled>
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
                        <label>Address</label>
                        <input type="text" class="form-control" id="address" disabled>
                    </div>
                     </div>
                     
                     <div class="col-md-4">
                     <div class="form-group">
                        <label>High School College</label>
                        <input type="text" class="form-control" id="h_college" disabled>
                    </div>
                     </div>
                     
                     
                     <div class="col-md-4">
                     <div class="form-group">
                        <label>Year</label>
                        <input type="text" class="form-control" id="h_year" disabled>
                    </div>
                     </div>
                     
                     <div class="col-md-4">
                     <div class="form-group">
                        <label>Percentage</label>
                        <input type="text" class="form-control" id="h_percentage" disabled>
                    </div>
                     </div>
                     
                                          <div class="col-md-4">
                     <div class="form-group">
                        <label>Inter College</label>
                        <input type="text" class="form-control" id="i_college" disabled>
                    </div>
                     </div>
                     
                     
                     <div class="col-md-4">
                     <div class="form-group">
                        <label>Year</label>
                        <input type="text" class="form-control" id="i_year" disabled>
                    </div>
                     </div>
                     
                     <div class="col-md-4">
                     <div class="form-group">
                        <label>Percentage</label>
                        <input type="text" class="form-control" id="i_percentage" disabled>
                    </div>
                     </div>
                      <div class="col-md-4">
                     <div class="form-group">
                        <label>Graducation College</label>
                        <input type="text" class="form-control" id="g_college" disabled>
                    </div>
                     </div>
                    <div class="col-md-4">
                     <div class="form-group">
                        <label>Year</label>
                        <input type="text" class="form-control" id="g_year" disabled>
                    </div>
                     </div>
                     
                     <div class="col-md-4">
                     <div class="form-group">
                        <label>Percentage</label>
                        <input type="text" class="form-control" id="g_percentage" disabled>
                    </div>
                     </div>
                     
                     <div class="col-md-4">
                     <div class="form-group">
                        <label>Post Graducation</label>
                        <input type="text" class="form-control" id="pg_college" disabled>
                    </div>
                     </div>
                    <div class="col-md-4">
                     <div class="form-group">
                        <label>Year</label>
                        <input type="text" class="form-control" id="pg_year" disabled>
                    </div>
                     </div>
                     
                     <div class="col-md-4">
                     <div class="form-group">
                        <label>Percentage</label>
                        <input type="text" class="form-control" id="pg_percentage" disabled>
                    </div>
                     </div>
                     <div class="col-md-4">
                     <div class="form-group">
                        <label>Degree Description</label>
                        <input type="text" class="form-control" id="degree_desc" disabled>
                    </div>
                     </div>
                    <div class="col-md-4">
                     <div class="form-group">
                        <label>Higher Degree</label>
                        <input type="text" class="form-control" id="higher_degree" disabled>
                    </div>
                     </div>
                     <div class="col-md-4">
                     <div class="form-group">
                        <label>Experience</label>
                        <input type="text" class="form-control" id="experience" disabled>
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