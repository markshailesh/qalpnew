@include('layout/header')
@include('layout/sidebar')
<!doctype html>
<html lang="en">
<head>
        
        <meta charset="utf-8" />
        <title>Chat | Chatvia - Responsive Bootstrap 4 Chat App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive Bootstrap 4 Chat App" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        
        <link href="../../css/bootstraps.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="../../css/apps.min.css" id="app-style" rel="stylesheet" type="text/css" />
    </head>
    <body>
        
        <style>
            
            .wrapper .content-wrapper {
    overflow: hidden !important;
}
        </style>
        
        
     <div class="content-wrapper">
      <section class="content">
       <div class="row">
        <div class="col-12">
        <div class="layout-wrapper d-lg-flex">
            <!-- start chat-leftsidebar -->
            <div class="chat-leftsidebar me-lg-1 ms-lg-0">
                <div class="tab-content">
                    <!-- Start chats tab-pane -->
                    <div class="tab-pane fade show" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab">
                        <!-- Start chats content -->
                        <div>
                            <div class="px-4 pt-4">
                                <h4 class="mb-4">Chats</h4>
                                <div class="search-box chat-search-box">            
                                    <div class="input-group mb-3 rounded-3">
                                        <span class="input-group-text text-muted bg-light pe-1 ps-3" id="basic-addon1">
                                            <i class="fa fa-search search-icon font-size-18"></i>
                                        </span>
                                        <input type="text" id="myInput" onkeyup="myFunction()" class="form-control bg-light" placeholder="Search messages or users" aria-label="Search messages or users" aria-describedby="basic-addon1">
                                    </div> 
                                </div> <!-- Search Box-->
                            </div> <!-- .p-4 -->
    
                          

                            <!-- Start chat-message-list -->
                            <div class="px-2">
                                
                                <div class="chat-message-list" data-simplebar>

                                    <h6 class="mb-3 px-3">Recent Chat</h6>
            
                                    <ul class="list-unstyled chat-list chat-user-list" id="myUL">
                                    
                                         
                                        @foreach($recent as $rec)
                                        
                                        <li>
                                            <a href="#" onclick="showDiv({{$rec->id}});">
                                                <div class="d-flex">                            
                                                    <div class="chat-user-img online align-self-center me-3 ms-0">
                                                        <img src="../public/uploads/student/{{$rec->image}}" class="rounded-circle avatar-xs" alt="">
                                                        <span class="user-status"></span>
                                                    </div>
                            
                                                    <div class="flex-1 overflow-hidden">
                                                        <h5 class="text-truncate font-size-13 mb-1">{{$rec->name}}</h5>
                                                        <p class="chat-user-message text-truncate mb-0">{{$rec->phone_number}}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        @endforeach
                                       
                                        
                                 
                                    
                                    <h6 class="mb-3 px-3">All Contact</h6>
                                    
                                         
                                        @foreach($contact as $con)
                                        
                                        <li>
                                            <a href="#" onclick="showDiv({{$con->id}});">
                                                <div class="d-flex">                            
                                                    <div class="chat-user-img online align-self-center me-3 ms-0">
                                                        <img src="../public/uploads/student/{{$con->image}}" class="rounded-circle avatar-xs" alt="">
                                                        <span class="user-status"></span>
                                                    </div>
                            
                                                    <div class="flex-1 overflow-hidden">
                                                        <h5 class="text-truncate font-size-13 mb-1">{{$con->name}}</h5>
                                                        <p class="chat-user-message text-truncate mb-0">{{$con->phone_number}}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        @endforeach
                                         </ul> 
                                </div>
                            </div>
                            <!-- End chat-message-list -->
                        </div>
                        <!-- Start chats content -->
                    </div>
                    <!-- End chats tab-pane -->
                </div>
                <!-- end tab content -->

            </div>
            <!-- end chat-leftsidebar -->

            <!-- Start User chat -->
            <div class="user-chat w-100 overflow-hidden" id="chat">
                <div class="d-lg-flex">

                    <!-- start chat conversation section -->
                    
                    
                    <div class="w-100 overflow-hidden position-relative">
                       <div class="p-lg-4 border-bottom user-chat-topbar">
                            <div class="row align-items-center">
                                <div class="col-sm-4 col-8">
                                    <div class="d-flex align-items-center">
                                        <div class="d-block d-lg-none me-2 ms-0">
                                            <a href="javascript: void(0);" class="user-chat-remove text-muted font-size-16 p-2"><i class="ri-arrow-left-s-line"></i></a>
                                        </div>
                                        <div class="me-3 ms-0">
                                            <img id="user_image" src="https://educational.techuptechnologies.com/public/uploads/student/no-image.png" class="rounded-circle avatar-xs" alt="">
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <input type="hidden" id="user_name">
                                            <h5 class="font-size-16 mb-0 text-truncate"><a href="#" class="text-reset user-profile-show" id="user_name1"></a> <i class="ri-record-circle-fill font-size-10 text-success d-inline-block ms-1"></i>
                                            <br><small id="user_email"></small></h5>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        <!-- end chat user head -->
    
                        <!-- start chat conversation -->
                        
                        <div class="chat-conversation p-3 p-lg-4" data-simplebar="init">
                            <ul class="list-unstyled mb-0" id="user_chat">
                                <li>
                                    <div class="conversation-list">
                                        <div class="chat-avatar">
                                            <img src="https://educational.techuptechnologies.com/public/uploads/student/no-image.png" alt="">
                                        </div>
    
                                        <div class="user-chat-content">
                                            <div class="ctext-wrap">
                                                <div class="ctext-wrap-content">
                                                    <p class="mb-0">
                                                        Good morning
                                                    </p>
                                                    <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span class="align-middle">10:00</span></p>
                                                </div>
                                            </div>
                                            <div class="conversation-name">Doris Brown</div>
                                        </div>
                                    </div>
                                </li>
    
                                <li class="right">
                                    <div class="conversation-list">
                                        <div class="chat-avatar">
                                            <img src="https://educational.techuptechnologies.com/public/uploads/student/no-image.png" alt="">
                                        </div>
    
                                        <div class="user-chat-content">
                                            <div class="ctext-wrap">
                                                <div class="ctext-wrap-content">
                                                    <p class="mb-0">
                                                        Good morning, How are you? What about our next meeting?
                                                    </p>
                                                    <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span class="align-middle">10:02</span></p>
                                                </div>
                                            </div>
                                            
                                            <div class="conversation-name">Patricia Smith</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conversation-list">
                                        <div class="chat-avatar">
                                            <img src="/https://educational.techuptechnologies.com/public/uploads/student/no-image.png" alt="">
                                        </div>
    
                                        <div class="user-chat-content">
                                            <div class="ctext-wrap">
                                                <div class="ctext-wrap-content">
                                                    <p class="mb-0">
                                                        Good morning
                                                    </p>
                                                    <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span class="align-middle">10:00</span></p>
                                                </div>
                                            </div>
                                            <div class="conversation-name">Doris Brown</div>
                                        </div>
                                    </div>
                                </li>
    
                                <li class="right">
                                    <div class="conversation-list">
                                        <div class="chat-avatar">
                                            <img src="https://educational.techuptechnologies.com/public/uploads/student/no-image.png" alt="">
                                        </div>
    
                                        <div class="user-chat-content">
                                            <div class="ctext-wrap">
                                                <div class="ctext-wrap-content">
                                                    <p class="mb-0">
                                                        Good morning, How are you? What about our next meeting?
                                                    </p>
                                                    <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span class="align-middle">10:02</span></p>
                                                </div>
                                            </div>
                                            
                                            <div class="conversation-name">Patricia Smith</div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="conversation-list">
                                        <div class="chat-avatar">
                                            <img src="https://educational.techuptechnologies.com/public/uploads/student/no-image.png" alt="">
                                        </div>
    
                                        <div class="user-chat-content">
                                            <div class="ctext-wrap">
                                                <div class="ctext-wrap-content">
                                                    <p class="mb-0">
                                                        Good morning
                                                    </p>
                                                    <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span class="align-middle">10:00</span></p>
                                                </div>
                                            </div>
                                            <div class="conversation-name">Doris Brown</div>
                                        </div>
                                    </div>
                                </li>
    
                                <li class="right">
                                    <div class="conversation-list">
                                        <div class="chat-avatar">
                                            <img src="https://educational.techuptechnologies.com/public/uploads/student/no-image.png" alt="">
                                        </div>
    
                                        <div class="user-chat-content">
                                            <div class="ctext-wrap">
                                                <div class="ctext-wrap-content">
                                                    <p class="mb-0">
                                                        Good morning, How are you? What about our next meeting?
                                                    </p>
                                                    <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span class="align-middle">10:02</span></p>
                                                </div>
                                            </div>
                                            
                                            <div class="conversation-name">Patricia Smith</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- end chat conversation end -->
    
                        <!-- start chat input section -->
                       
                        <div class="chat-input-section p-3 p-lg-4 border-top mb-0">
                            
                            <div class="row g-0">
                                
                                <div class="col">
                                    <input type="hidden" name="student_id" id="user_name2">
                                    <input type="text" name="message" id="msg" class="form-control form-control-lg bg-light border-light" placeholder="Enter Message...">
                                </div>
                                <div class="col-auto">
                                    <div class="chat-input-links ms-md-2 me-md-0">
                                        <ul class="list-inline mb-0">
                                           
                                            <li class="list-inline-item">
                                                <button id="btnSubmit" class="btn btn-primary font-size-16 btn-lg chat-send waves-effect waves-light">
                                                    <i class="fa fa-arrow-right"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end chat input section -->
                    </div>
                    <!-- end chat conversation section -->
    
                    <!-- start User profile detail sidebar -->
                    
            </div>
            <!-- End User chat -->
        </div>
        <!-- end  layout wrapper -->

    </div>
</div>
</div>
</section>
</div>
        
        

        <!-- JAVASCRIPT -->
        <script src="../../js/simplebar.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script>
            $(document).ready(function() {
         $("#btnSubmit").click(function(){
           

                 var id=$("#user_name2").val();
                 var msg=$("#msg").val();
               $.ajax({
               type:'POST',
               url:'../save_chat',
               data:{
                _token:'{{ csrf_token() }}',
                student_id: id,
                message: msg
            },
               success:function(data) {
           $("#msg").val('');
               }
            });
              
            }); 
          });
        </script>
        <script>
        
        setInterval(function(){ 
            var id=    $("#user_name").val();
           
            showDiv(id);
            }, 2000);
        
        
         $(document).ready(function(){
         
             //$('#chat').empty();
          
         });
         
        function showDiv(pageid)
          {
        
         
        $.ajax({
               type:'POST',
               url:'../get_chat',
               data:{
                _token:'{{ csrf_token() }}',
                id: pageid
            },
               success:function(data) {
                   
            console.log(data);
                $("#user_name").val(data[0].stu_id);
                $("#user_name2").val(data[0].stu_id);
                $("#user_name1").html(data[0].name);
                $("#user_email").html(data[0].email);
                $("#user_image").attr('src','../public/uploads/student/'+data[0].stu_image);
                  $("#user_chat").empty();
                  
               $.each(data,function(item,i){
                   if(i.message)
                   {
                if(i.sender!='admin'){
                  $("#user_chat").append('<li><div class="conversation-list"><div class="chat-avatar"><img src="https://educational.techuptechnologies.com/public/uploads/student/'+i.stu_image+'" alt=""></div><div class="user-chat-content"><div class="ctext-wrap"><div class="ctext-wrap-content"><p class="mb-0">'+i.message+'</p><p class="chat-time mb-0"><i class="ri-time-line align-middle"></i></p></div><span class="align-middle">'+i.time+'<br>'+i.date+'</span></div><div class="conversation-name">'+i.name+'</div></div></div></li>'); }
                  else{
                      
                     $("#user_chat").append('<li class="right"><div class="conversation-list"><div class="chat-avatar"><img src="https://educational.techuptechnologies.com/public/uploads/Etopper.png" alt=""></div><div class="user-chat-content"><div class="ctext-wrap"><div class="ctext-wrap-content"><p class="mb-0">'+i.message+'</p><p class="chat-time mb-0"><i class="ri-time-line align-middle"></i></p></div><span class="align-middle">'+i.time+'<br>'+i.date+'</span></div><div class="conversation-name">Admin</div></div></div></li>' );
                      
                  }
                   }
               });
               }
            });
     }
        
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>


</body>
</html>

@include('layout/footer')