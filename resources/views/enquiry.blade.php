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
                <div class="card-header">
                    <h3 class="card-title">Enquiry List</h3>
                    <button id="myBtn" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-info" style="float:right;"><i class="fas fa-plus" aria-hidden="true"></i>Add</button>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-responsive table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Purpose</th>
                                <th>Massege</th>
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
                              <td>{{$item->phone}}</td>
                              <td>{{$item->email}}</td>
                              <td>{{$item->purpose}}</td>
                              <td>{{$item->massege}}</td>
                              <td>{{$item->created_at}}</td>
                                <td>
                                    <div class="btn-group">
                                            <form action="{{ route('enquiry.destroy', $item->id) }}" method="POST">
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
 <!-- Modal -->
 
 <script type="text/javascript">
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
<div id="myModal" class="modal fade" role="dialog" style="z-index:999999;">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Enquiry</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('enquiry.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                     <div class="col-md-6">
                         
                    <div class="form-group">   
                        <label>Enquiry</label>
                        <input type="text" placeholder="Name" class="form-control" name="name" required>
                    </div>
                     </div>
                     
                     
                     <div class="col-md-6">
                     <div class="form-group">
                        <label>Contact</label>
                        <input type="number" placeholder="Phone" class="form-control" name="phone">
                    </div>
                     </div>
                     
                     <div class="col-md-6">
                     <div class="form-group">
                        <label>Email</label>
                        <input type="email" placeholder="Email" class="form-control" name="email">
                    </div>
                     </div>

                      <div class="col-md-6">
                          <div class="form-group">
                        <label>Purpose</label>
                        <input type="text" placeholder="Purpose" class="form-control" name="purpose" required>
                    </div>
                         
                     </div>
                     
                     <div class="col-md-12">
                          <div class="form-group">
                        <label>Massege</label>
                        <textarea type="text" placeholder="Massege" class="form-control" name="massege" required></textarea>
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


  @include('layout/footer')