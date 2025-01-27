<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Doctor Appointment - Dashboard</title>



    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/assets/img/')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/font-awesome.min.css')}}">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/feathericon.min.css')}}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/select2.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/plugins/morris/morris.css')}}">
    <!-- Datatables CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/datatables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css')}}">

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.38.0/css/tempusdominus-bootstrap-4.min.css" crossorigin="anonymous" />--}}
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!--[if lt IE 9]>
    <script src="{{asset('admin/assets/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper" id="app">

    <!-- Header -->
    <div class="header">

        <!-- Logo -->
        <div class="header-left">
            <a href="#" class="logo">
                <img src="{{asset('admin/assets/img/logo.png')}}" alt="Logo">
            </a>
            <a href="#" class="logo logo-small">
                <img src="{{asset('admin/assets/img/logo-small.png')}}" alt="Logo" width="30" height="30">
            </a>
        </div>
        <!-- /Logo -->

        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fe fe-text-align-left"></i>
        </a>

        <div class="top-nav-search">
            <form>
                <input type="text" class="form-control" placeholder="Search here">
                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

        <!-- Mobile Menu Toggle -->
        <a class="mobile_btn" id="mobile_btn">
            <i class="fa fa-bars"></i>
        </a>
        <!-- /Mobile Menu Toggle -->

        <!-- Header Right Menu -->
        <ul class="nav user-menu">

            <!--notification bar right side -->
            <li class="nav-item dropdown noti-dropdown">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{asset('admin/assets/img/doctors/doctor-thumb-01.jpg')}}">
												</span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Dr. Ruby Perrin</span> Schedule <span class="noti-title">her appointment</span></p>
                                            <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="{{asset('admin/assets/img/patients/patient1.jpg')}}">
												</span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Charlene Reed</span> has booked her appointment to <span class="noti-title">Dr. Ruby Perrin</span></p>
                                            <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="#">View all Notifications</a>
                    </div>
                </div>
            </li>
            <!-- notification bar right side -->

            <!-- user navbar -->
            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img"><img class="rounded-circle" src="{{asset('admin/assets/img/profiles/avatar-01.jpg')}}" width="31" alt="Ryan Taylor"></span>
                </a>
                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm">
                            <img src="{{asset('admin/assets/img/profiles/avatar-01.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
                        </div>
                        <!-- show authenticated username and role here start -->
                        <div class="user-text">
                            <h6> {{ Auth::user()->name }}</h6>
                            <p class="text-muted mb-0"> {{ Auth::user()->role->name }}</p>
                        </div>
                        <!-- show authenticated username and role here end -->
                    </div>
                    <!-- profile page view link to be placed here -->
                    <a class="dropdown-item" href="#">My Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <!-- Logout functionality  -->
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            <!-- user navbar -->

        </ul>
        <!-- /Header Right Menu -->

    </div>
    <!-- main header -->

    <!-- sidebar -->

    <!--  sidebar -->

    <!-- page wrapper(main content wrapper - usazokanganwa) -->
    <div class="page-wrapper">

        <div class="content container-fluid">
            <!-- main content area -->
            @yield('content')
            <!-- main content area -->
        </div>
    </div>
    <!-- page wrapper(main content wrapper) -->

</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="{{asset('admin/assets/js/jquery-3.2.1.min.js')}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
<script src="{{asset('admin/assets/js/moment/moment.js')}}"></script>
<script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>

<!-- Slimscroll JS -->
<script src="{{asset('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<script src="{{asset('admin/assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/morris/morris.min.js')}}"></script>
<!-- Select2 JS -->
<script src="{{asset('admin/assets/js/select2.min.js')}}"></script>
<script src="{{asset('admin/assets/js/chart.morris.js')}}"></script>

<!-- Datatables JS -->
<script src="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables/datatables.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.38.0/js/tempusdominus-bootstrap-4.min.js" crossorigin="anonymous"></script>

<script src="{{asset('admin/assets/plugins/datedropper/datedropper.min.js')}}"></script>
<!-- Custom JS -->
<script  src="{{asset('admin/assets/js/script.js')}}"></script>




@stack('scripts')
</body>

</html>
