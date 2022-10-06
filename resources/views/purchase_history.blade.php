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
                    <h3 class="card-title">Payment History</h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-responsive table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>User Type</th>
                                <th>Name</th>
                                <th>Phone</th> 
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($data as $item)
                            @php
                                $user_details = App\User::where('id',$item->user_id)->first();
                            @endphp
                            @if(!empty($user_details))
                            <tr> 
                              <td>{{$i++}}</td>
                              <td>{{$user_details->user_type}}</td>
                              <td>{{$user_details->name}}</td>
                              <td>{{$user_details->phone_number}}</td> 
                              <td>{{$user_details->email}}</td> 
                              <td><a href="user_pay_history/{{$item->user_id}}" class="btn btn-primary"> View Payment History </a></td>
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
 <!-- Modal -->
  @include('layout/footer')