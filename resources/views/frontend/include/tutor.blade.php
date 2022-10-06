              
                  @foreach($tutor as $item)
                   @php
                          $user_details = App\UserDetail::where('user_id', $item->id)->first();
                        @endphp
                     <div class="row">
                        
                        <div class="col-lg-12 mb-30">
                           <div class="blog-item">
                              <div class="row">
                                 <div class="col-lg-3">
                                    <div class="blog-img">
                                        <a href="#">
                                          @if( $user_details->profile_img!=null)
                                          <img src="uploads/teacher_document/{{$user_details->profile_img}}" class="t_img" alt="Best {{$user_details->subject}} tutor in {{$user_details->district}}">
                                           @else
                                          <img src="{{ URL::asset('/images/profile.png') }}"  alt="" class="t_img"  />
                                          @endif
                                       </a>
                                    </div>
                                 </div>
                                 <div class="col-lg-9">
                                    <div class="blog-content">
                                       <h3 class="blog-title">{{$item->name}}
                                        @if( $item->verification=='verified')
                                        <span class="ml-1">
                                        <i class="fa fa-check-circle-o" style="color:#3a7f79; font-size:16px;"></i>
                                        </span>
                                        @endif
                                       </h3>
                                       <h5 class="sbjct">Course/Class: {{$user_details->class}}</h5>
                                       <div class="blog-meta">
                                          <ul class="check-square">
                                             <li>Class Mode: {{$user_details->class_mode}}</li>
                                             <li>Subject : {{$user_details->subject}}</li>
                                             <li>Language : {{$user_details->language}}</li>
                                             <li>Vaccination : {{$user_details->vaccination}}</li>
                                             <li>Experience : {{$user_details->experience}}</li>
                                             <li>Age : {{$user_details->age}}</li>
                                             <li>Qualification : {{$user_details->qualification}}</li>
                                             <li>Specilization : {{$user_details->specilization}}</li>
                                             <li>Preferred Area : {{$user_details->pincode}}</li>
                                             <li>City : {{$user_details->district}}</li>
                                          </ul>
                                       </div>
                                       <div class="blog-button pt-0">
                                          <a class="blog-btn" href="home-tutor/{{$item->slug}}">View More</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     @endforeach
                     @include('pagination',['list' =>$tutor,'class'=>'tutor'])
                    