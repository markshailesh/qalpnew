
                           <div class="card-body">
                              <div class="col-lg-12 md-pr-15" id="search_data">@foreach($tutor as $item) @php $user_details = App\UserDetail::where('user_id', $item->id)->first(); @endphp
                                 <div class="job-card-two">
                                    <div class="row align-items-center">
                                       <div class="col-md-2">
                                          <div class="company-logo">
                                            <a href="#">
                                            @if( $user_details->profile_img!=null)
                                            <img src="uploads/teacher_document/{{$user_details->profile_img}}" class="image rounded-circle" alt="Best {{$user_details->subject}} teacher in {{$user_details->district}}">
                                            @else
                                            <img src="{{ URL::asset('/images/profile.png') }}" alt="" />
                                             @endif
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
                                             <li>Class Mode: {{$user_details->class_mode}}</li>
                                             <li>Subject : {{$user_details->subject}}</li>
                                             <li>Language : {{$user_details->language}}</li>
                                             <li>Vaccination : {{$user_details->vaccination}}</li>
                                             <li>Experience : {{$user_details->experience}}</li>
                                             <li>Age : {{$user_details->age}}</li>
                                             <li>Qualification : {{$user_details->qualification}}</li>
                                             <li>Specilization : {{$user_details->specilization}}</li>
                                             <li>Preferred Area : {{$user_details->pincode}}</li>
                                             <li><i class="flaticon-location"></i> : {{$user_details->district}}</li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="col-md-2">
                                          <div class="theme-btn text-end"> 
                                             <a href="tutor-details/{{$item->id}}" class="default-btn">
                                                View <i class="fa fa-chevron-right"></i>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>@endforeach
                                  {!! $tutor->render() !!}
                                 </div>
                           </div>
                        </div>
