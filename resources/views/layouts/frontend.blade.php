<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>UclanDoc</title>

    <!-- Favicons -->

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">



</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper" id="app">

    <!-- Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                </a>
                </a>
                <a href="#" class="navbar-brand logo">
                    <img src="#" class="img-fluid" alt="Logo">
                </a>
            </div>

            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="#" class="menu-logo">
                        <img src="#" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="#">Voice Call</a></li>
                            <li><a href="#">Video Call</a></li>
                            <li><a href="#">Search Doctors</a></li>
                            <li><a href="#">Calendar</a></li>
                            <li><a href="#">Components</a></li>
                            <li class="has-submenu">
                                <a href="#">Invoices</a>
                                <ul class="submenu">
                                    <li><a href="#">Invoices</a></li>
                                    <li><a href="#">Invoice View</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Starter Page</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Forgot Password</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" target="_blank">About</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">Services</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">Blog</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">Contact Us</a>
                    </li>
                </ul>
            </div>

            <!-- Right-aligned section for My Booking, Login, and Dropdown -->
            <div class="d-flex align-items-center navbar-right-section">
                <!-- My Booking and Login Buttons -->
                @if(auth()->check() && auth()->user()->role->name === 'patient')
                    <a href="{{ route('my.booking') }}" class="btn btn-primary mx-2">My Booking</a>
                @endif

                @guest
                    <a href="{{ url('/login') }}" class="btn btn-primary mx-2">Login</a>
                    <a href="{{ url('/register') }}" class="btn btn-secondary mx-2">Register</a>
                @endguest

                <!-- Dropdown Menu (only visible for logged-in users) -->
                @if(auth()->check())
                    <li class="nav-item dropdown has-arrow logged-item ml-3">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img">
                        <img class="rounded-circle" src="https://picsum.photos/id/30/200/300" width="31" alt="Darren Elder">
                    </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="user-header">
                                <div class="avatar avatar-sm">
                                    <img src="https://picsum.photos/id/30/200/300" alt="User Image" class="avatar-img rounded-circle">
                                </div>
                                <div class="user-text">
                                    <h6>{{auth()->user()->name}}</h6>
                                    <p class="text-muted mb-0">{{auth()->user()->gender}}</p>
                                </div>
                            </div>
                            <a class="dropdown-item" href="{{url('dashboard')}}">Dashboard</a>
                            @if(auth()->check() && auth()->user()->role->name === 'patient')
                                <a class="dropdown-item" href="{{url('user-profile')}}">Profile Settings</a>
                            @endif
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
                @endif
            </div>
        </nav>
    </header>

    <!-- Header -->

    {{-- main content area start --}}
        @yield('content')
    {{-- main content area end --}}

    <!-- Footer -->
    <footer class="footer">

        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-about">
                            <div class="footer-logo">
                                <img src="#" alt="logo">
                            </div>
                            <div class="footer-about-content">
                                <p>
                                    Discover our clinic’s advanced features, including modern facilities, specialized care options, online consultations, and a dedicated support team for patients.
                                </p>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Footer Widget -->

                    </div>

                    <div class="col-lg-3 col-md-6">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-menu">
                            <h2 class="footer-title">For Patients</h2>
                            <ul>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i> Search for Doctors</a></li>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i> Login</a></li>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i> Register</a></li>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i> Booking</a></li>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i> Patient Dashboard</a></li>
                            </ul>
                        </div>
                        <!-- Footer Widget -->

                    </div>

                    <div class="col-lg-3 col-md-6">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-menu">
                            <h2 class="footer-title">For Doctors</h2>
                            <ul>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i> Appointments</a></li>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i> Chat</a></li>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i> Login</a></li>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i> Register</a></li>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i> Doctor Dashboard</a></li>
                            </ul>
                        </div>
                        <!-- Footer Widget -->

                    </div>

                    <div class="col-lg-3 col-md-6">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-contact">
                            <h2 class="footer-title">Contact Us</h2>
                            <div class="footer-contact-info">
                                <div class="footer-address">
                                    <span><i class="fas fa-map-marker-alt"></i></span>
                                    <p> 1234  Harare St, Harare,<br> Zimbabwe </p>
                                </div>
                                <p>
                                    <i class="fas fa-phone-alt"></i>
                                    +263 156 1890
                                </p>
                                <p class="mb-0">
                                    <i class="fas fa-envelope"></i>
                                    unclandoc@doc.com
                                </p>
                            </div>
                        </div>
                        <!-- Footer Widget -->

                    </div>

                </div>
            </div>
        </div>
        <!-- Footer Top -->

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container-fluid">

                <!-- Copyright -->
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="copyright-text">
                                <p class="mb-0"><a href="#">Final Project</a></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">

                            <!-- Copyright menu start -->
                            <div class="copyright-menu">
                                <ul class="policy-menu">
                                    <li><a href="#">Terms and Conditions</a></li>
                                    <li><a href="#">Policy</a></li>
                                </ul>
                            </div>
                            <!-- Copyright menu end -->

                        </div>
                    </div>
                </div>
                <!-- Copyright end -->

            </div>
        </div>
        <!-- Footer Bottom end -->

    </footer>
    <!-- Footer end -->

</div>
<!-- Main wrapper end -->

<!-- jQuery -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('admin/assets/js/moment/moment.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<!-- Slick JS -->
<script src="{{asset('assets/js/slick.js')}}"></script>

<!-- Sticky Sidebar JS -->
<script src="{{asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
<script src="{{asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>
<script src="{{ mix('js/app.js') }}" defer></script>

<!-- Custom JS -->
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('admin/assets/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script type="text/javascript">
    $(function () {
        $('#main-datetime').datetimepicker({
            format: 'YYYY-MM-DD',
            minDate: moment()

        });
    });
</script>
<style>
    label.btn input{
        opacity: 0;
    }
    label.btn input{
        opacity: 0;
        position: absolute;
    }
    label.btn span{
        text-align: center;
        padding: 2px 8px;
        display: block;
        min-width: 60px;
    }
    label.btn input:checked+span{
        background-color:#09e5ab;
        color:#fff;
    }
</style>
</body>

</html>
