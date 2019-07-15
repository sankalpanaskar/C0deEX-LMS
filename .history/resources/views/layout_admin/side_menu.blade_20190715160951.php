<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('assets_admin/img/sankalpa.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{auth()->user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success" style="color: green;"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="{{url('/admin_dashboard')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{url('/online_applicant_list')}}">
                    <i class="fa fa-book"></i> <span>Applied Student</span></a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>User Management</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/user_list')}}"><i class="fa fa-circle-o"></i>User</a></li>
                    <li><a href="{{url('/role_list')}}"><i class="fa fa-circle-o"></i> Role</a></li>
                    <li><a href="{{url('/user_permission')}}"><i class="fa fa-circle-o"></i> Permission</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Student</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add_student')}}"><i class="fa fa-circle-o"></i> Add Student</a></li>
                    <li><a href="{{url('/student_list')}}"><i class="fa fa-circle-o"></i> Student List</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Teacher</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add_teacher')}}"><i class="fa fa-circle-o"></i> Add Teacher</a></li>
                    <li><a href="{{url('/teacher_list')}}"><i class="fa fa-circle-o"></i> Teacher List</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Course Details</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/rank_list')}}"><i class="fa fa-circle-o"></i> Rank</a></li>
                    <li><a href="{{url('/course_list')}}"><i class="fa fa-circle-o"></i> Course</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Payment</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i> Pay</a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i> Payment List</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i>
                    <span>SMS</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i> Write Message</a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i> Send Message</a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i> SMS Settings</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Settings</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i> General Settings</a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i> Report Settings</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-blue">17</small>
            </span>
                </a>
            </li>

            <li class="header">Student</li>

            <li class="active">
                <a href="{{url('/student_dashboard')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>