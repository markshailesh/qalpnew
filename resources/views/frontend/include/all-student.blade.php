
                           <div class="card-body">
                              <div class="col-lg-12 md-pr-15" >@foreach($student as $item) @php $user_details = App\UserDetail::where('user_id', $item->id)->first(); @endphp
                                 <div class="job-card-two">
                                    <div class="row align-items-center">
                                       <div class="col-md-2">
                                          <div class="company-logo">
                                             <a href="">
                                                <img src="{{ URL::asset('images/student.png') }}" alt="">
                                             </a>
                                          </div>
                                       </div>
                                       <div class="col-md-8">
                                          <div class="job-info">
                                             <h3>
                                                   <a href="#">{{$item->name}}</a>
                                                </h3>
                                             <h5 class="margin-0"><a> Classes: {{$user_details->class}} </a></h5>
                                             <ul>
                                                <li><i class="fa fa-book" aria-hidden="true"></i>  <b>Subject :</b> {{$user_details->subject}}</li>
                                                <li> <i class="fa fa-language"></i>  <b>Language :</b> {{$user_details->language}}</li>
                                                <li> <i class="fa fa-briefcase"></i>  <b>Fee Range :</b> {{$user_details->fee_range}}</li>
                                                <li> <i class="fa fa-briefcase"></i>  <b>City :</b> {{$user_details->district}}</li>
                                                <li> <i class="fa fa-briefcase"></i>  <b>Board :</b> {{$user_details->board}}</li>
                                                <li> <i class="fa fa-map-marker"></i>  <b>Pincode :</b> {{$user_details->pincode}}</li>
                                                <li> <i class="fa fa-comments"></i>  <b>Massage :</b> {{$user_details->massage}}</li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="col-md-2">
                                        @php
                                            $student_number = App\ViewNumber::where('viewed_user_id', $item->id)->where('viewed_by_user', Auth::user()->id)->where('user_type', 'teacher')->first();
                                        @endphp
                                        @if(empty($student_number))
                                            <div class="view number_show" id="view_number_{{$item->id}}">
                                                <span data-toggle="modal" class="view_number" id="view_number_id_btn_{{$item->id}}" value="{{$item->id}}" data-target="#viewno_student">View No.</span>
                                            </div>
                                        @else
                                            <div class="view">
                                                <span><a href="tel:+91 - {{$item->phone_number}}"> +91 - {{$item->phone_number}}</a></span>
                                            </div>
                                        @endif
                                       </div>
                                    </div>
                                 </div>
                                 
                                 @endforeach
                                 {!! $student->links() !!}
                                 </div>
                           </div>
                        </div>
                        <div class="modal fade" id="viewno_student" role="dialog">
                          <div class="modal-dialog modal-sm">
                             <div class="modal-content">
                                <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLongTitle">Are You Sure?</h5>
                                   <button type="button" class="close" data-dismiss="modal">×</button>
                                </div>
                                <!--<div class="modal-body">
                                 <p>Confirmation</p>
                                </div>-->
                                <div class="modal-footer">
                                <a href="#" value="" id="cnf_url" type="button" class="btn btn-primary" data-dismiss="modal">Yes</a>
                                <a type="#" class="btn btn-secondary" data-dismiss="modal" style="color:#fff;">Close</a>
                                </div>
                                </div>
                          </div>
                       </div>
                       
                       <script>
                            $(document).ready(function () {
                                
                                $(".view_number").click(function () {
                                   var id = $(this).attr('value');
                                   //var url = "/student_number_view/"+id;
                                   $('#cnf_url').attr("value", id);
                                });
                                
                                
                                $("#cnf_url").click( function () {
                                    var id = $(this).attr('value');
                                    $.ajax({
                                        type:'GET',
                                        url: "/student_number_view/"+id,
                                        data:{
                                            id : id
                                        },
                                        success: function (data) { 
                                            console.log(data);
                                            if(data.student_view != null){
                                                $('#view_number_id_btn_'+id).hide();
                                                $('#view_number_'+id).append('<span> +91 -'+ data.student_details.phone_number +'</span>');
                                                $('#user_balance').text(data.user_data.balance);
                                                if(data.user_wallet_history.length > 0){
                                                    $('#user_wallet_history_tbl').empty();
                                                    var i = 1;
                                                    $.each(data.user_wallet_history, function(index, wallet_history){
                                                        if(wallet_history.status == "success"){
                                                            $('#user_wallet_history_tbl').append('<tr><td class="footable-first-visible">' + i++ + '</td><td>Rs ' + wallet_history.amount  + '</td><td>' + wallet_history.transaction_id + '</td><td>' + wallet_history.created_at + '</td><td>Lifetime</td><td class="text-right footable-last-visible"><span class="badge badge-inline badge-success">Credit</span></td></tr>')
                                                        }else{
                                                            $('#user_wallet_history_tbl').append('<tr><td class="footable-first-visible">' + i++ + '</td><td>Rs ' + wallet_history.amount  + '.00</td><td>' + wallet_history.transaction_id + '</td><td>' + wallet_history.created_at + '</td><td>Lifetime</td><td class="text-right footable-last-visible"><span class="badge badge-inline badge-danger">Debit</span></td></tr>')
                                                        }
                                                    });
                                                }
                                                 $.growl.active({
                                                    title: "Success",
                                                    message: "Number View"
                                                });
                                            }
                                            if(data.status=='danger'){
                                                $.growl.inactive({
                                                    title: "Error",
                                                    message: "Low Amount , Please Recharge Your Wallet."
                                                });
                                            }
                                        }
                                    });
                                });
                            });
                       </script>