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
                    <h3 class="card-title">Help Center</h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-responsive table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Class Mode</th>
                                <th>Name</th>
                                <th>Phone</th> 
                                <th>Class</th>
                                <th>Subject</th>
                                <th>Language</th>
                                <th>Fee Range</th>
                                <th>Massage</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @foreach($data as $item)
                        
                        @php 
                        $user_data=App\User::where('id',$item->user_id)->first();
                        @endphp
                         @if(!empty($user_data))
                            <tr> 
                              <td>{{$i++}}</td>
                              <td>{{$item->class_mode}}</td>
                               <td>{{$user_data->name}}</td>
                              <td>{{$user_data->phone_number}}</td>
                              <td>{{$item->class}}</td>
                              <td>{{$item->subject}}</td>
                              <td>{{$item->language}}</td>
                              <td>{{$item->fee_range}}</td>
                              <td>{{$item->massage}}</td>
                              <td>{{$item->created_at}}</td>
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



  @include('layout/footer')