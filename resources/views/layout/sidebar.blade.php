<head>
  <title>Educational</title>
</head>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ URL::asset('images/dark-logo.png')  }}" class="elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{route('home')}}" class="d-block">Qalp Eduacare</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('home')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
           
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('job_post.index')}}" class="nav-link">
              <i class="fa fa-book"></i> 
              <p>
              Job post
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('teacher.index')}}" class="nav-link">
              <i class="fa fa-book"></i> 
              <p>
               Teacher
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('students.index')}}" class="nav-link">
              <i class="fa fa-graduation-cap"></i> 
              <p>
               Students
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('blog.index')}}" class="nav-link">
              <i class="fa fa-book"></i> 
              <p>
               Blog
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{route('team.index')}}" class="nav-link">
              <i class="fa fa-book"></i> 
              <p>
               Team
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('plan.index')}}" class="nav-link">
              <i class="fa fa-book"></i> 
              <p>
               Plan
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('purchase_history')}}" class="nav-link">
              <i class="fa fa-book"></i> 
              <p>
               Purchase History
              </p>
            </a>
          </li>
          
<!--          <li class="nav-item has-treeview">
            <a href="index_notification" class="nav-link">
              <i class="fa fa-bell"></i> 
              <p>
               Notification
              </p>
            </a>
          </li>-->

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-comment"></i> 
              <p>
             Enquiry
               <i class="fas fa-angle-left right"></i> 
               <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
           <li class="nav-item has-treeview">
            <a href="enquiry" class="nav-link">
              <i class="fa fa-comment"></i> 
              <p>
               Contact Us 
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="stud_enquiry" class="nav-link">
              <i class="fa fa-comment"></i> 
              <p>
               Student New Requirement
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="need_help" class="nav-link">
              <i class="fa fa-comment"></i> 
              <p>
               Help Center
              </p>
            </a>
          </li>
            </ul>
          </li>

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-cog"></i> 
              <p>
              Settings
               <i class="fas fa-angle-left right"></i> 
               <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{route('subject.index')}}" class="nav-link">
              <i class="fa fa-bell"></i> 
              <p>
               Subject
              </p>
            </a>
          </li>

            <li class="nav-item">
            <a href="{{route('course.index')}}" class="nav-link">
              <i class="fa fa-bell"></i> 
              <p>
               Course
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('specilization.index')}}" class="nav-link">
              <i class="fa fa-bell"></i> 
              <p>
               Specilization
              </p>
            </a>
          </li>
                    <li class="nav-item">
            <a href="{{route('language.index')}}" class="nav-link">
              <i class="fa fa-bell"></i> 
              <p>
               Language
              </p>
            </a>
          </li>
            </ul>

          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-cogs"></i> 
              <p>
               Website Setting
               <i class="fas fa-angle-left right"></i> 
               <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('sliders.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
            </ul>
          </li>
    
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>