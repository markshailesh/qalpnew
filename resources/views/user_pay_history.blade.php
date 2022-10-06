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
                    @php
                    $user=App\User::where('id',$data[0]->user_id)->first();
                    @endphp
                    <h3 class="card-title">{{$user->name}}  <span>({{$user->user_type}})</span> </h3>

                   
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-responsive table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Transaction Id</th>
                                <th>amount</th>
                                <th>Date</th>
                                <th>status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($data as $item)
                            <tr> 
                              <td>{{$i++}}</td>
                              <td>{{$item->transaction_id}}</td>
                              <td>{{$item->amount}}</td>
                              <td>{{$item->created_at}}</td>
                              <td>@if($item->status == "success")
                                                <span class="badge badge-inline badge-success">Credit</span>
                                            @else
                                                <span class="badge badge-inline badge-danger">Debit</span> 
                                            @endif</td>
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
  @include('layout/footer')