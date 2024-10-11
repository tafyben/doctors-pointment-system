<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>UclanDoc</title>

    <!-- Favicons -->


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

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

            <!-- Right-aligned login and registration buttons -->
            <div class="navbar-nav">
                <a href="#" class="btn btn-primary mx-2">Login</a>
                <a href="#" class="btn btn-secondary mx-2">Register</a>
            </div>
        </nav>
    </header>

    <!-- Header -->

    <!-- Home Banner -->
    <section class="section section-search">
        <div class="container-fluid">
            <div class="banner-wrapper">
                <div class="banner-header text-center">
                    <h1>Search Doctor, Make an Appointment</h1>
                    <p>Discover the best doctors, clinic & hospital the city nearest to you.</p>
                </div>

                <!-- Search -->
                <div class="search-box">
                    <form action="#">
                        <div class="form-group search-location">
                            <input type="text" class="form-control" placeholder="Search Location (N/A)" disabled>
                            <span class="form-text">(Not available yet)</span>
                        </div>


                        <div class="form-group search-info">

                            <input type="text" class="form-control datetimepicker-input" id="main-datetime" data-toggle="datetimepicker" data-target="#main-datetime" name="date" placeholder="Search Doctors.">
                            <span class="form-text">Ex : Check available doctors</span>
                        </div>
                        <button type="submit" class="btn btn-primary search-btn"><i class="fas fa-search"></i> <span>Search</span></button>
                    </form>

                </div>
                <!-- Search -->

            </div>
        </div>
    </section>
    <section class="section mt-5">
        <div class="container-fluid">
            <div class="banner-wrapper">
                <div class="banner-header text-center">
                    <h1>Doctors available today</h1>

                </div>

                <!-- Search -->
                <div class="card mt-1">
                    <div class="card-header"> Doctors available today</div>
                    <div class="card-body">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Department</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($doctors as $doctor)
                                <tr>
                                    <th scope="row">{{$doctor->doctor->id}}</th>
                                    {{--<td><img src="#" width="80" style="border-radius: 50%;">
                                    </td>--}}
                                    <td>{{$doctor->doctor->name}}</td>
                                    <td>{{$doctor->doctor->department}}</td>
                                    <td>
                                        <button class="btn btn-success">Book Appointment</button>
                                    </td>
                                </tr>
                            @empty
                                <p>No doctors today</p>
                            @endforelse



                            </tbody>
                        </table>


                    </div>

                </div>
                <!-- Search -->

            </div>
        </div>
    </section>
    <!-- Home Banner -->

    <!-- Clinic and Specialities -->
    <section class="section section-specialities">
        <div class="container-fluid">
            <div class="section-header text-center">
                <h2>Clinic and Specialities</h2>
                <p class="sub-title">
                    Our clinic offers a wide range of specialized medical services, ensuring compassionate, expert care tailored to each patient’s unique needs.
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <!-- Slider -->
                    <div class="specialities-slider slider">

                        <!-- Slider Item -->
                        <div class="speicality-item text-center">
                            <div class="speicality-img">
                                <img src="assets/img/specialities/specialities-01.png" class="img-fluid" alt="Speciality">
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            </div>
                            <p>Urology</p>
                        </div>
                        <!-- Slider Item -->

                        <!-- Slider Item -->
                        <div class="speicality-item text-center">
                            <div class="speicality-img">
                                <img src="assets/img/specialities/specialities-02.png" class="img-fluid" alt="Speciality">
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            </div>
                            <p>Neurology</p>
                        </div>
                        <!-- Slider Item -->

                        <!-- Slider Item -->
                        <div class="speicality-item text-center">
                            <div class="speicality-img">
                                <img src="assets/img/specialities/specialities-03.png" class="img-fluid" alt="Speciality">
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            </div>
                            <p>Orthopedic</p>
                        </div>
                        <!-- Slider Item -->

                        <!-- Slider Item -->
                        <div class="speicality-item text-center">
                            <div class="speicality-img">
                                <img src="assets/img/specialities/specialities-04.png" class="img-fluid" alt="Speciality">
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            </div>
                            <p>Cardiologist</p>
                        </div>
                        <!-- Slider Item -->

                        <!-- Slider Item -->
                        <div class="speicality-item text-center">
                            <div class="speicality-img">
                                <img src="assets/img/specialities/specialities-05.png" class="img-fluid" alt="Speciality">
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            </div>
                            <p>Dentist</p>
                        </div>
                        <!-- Slider Item -->

                    </div>
                    <!-- Slider -->

                </div>
            </div>
        </div>
    </section>
    <!-- Clinic and Specialities -->



    <!-- Availabe Features -->
    <section class="section section-features">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 features-img">
                    <img src="{{asset('assets/img/features/feature.png')}}" class="img-fluid" alt="Feature">
                </div>
                <div class="col-md-7">
                    <div class="section-header">
                        <h2 class="mt-2">Availabe Features in Our Clinic</h2>
                        <p>
                            Discover our clinic’s advanced features, including modern facilities, specialized care options, online consultations, and a dedicated support team for patients.
                        </p>
                    </div>
                    <div class="features-slider slider">
                        <!-- Slider Item -->
                        <div class="feature-item text-center">
                            <img src="{{asset('assets/img/features/feature-01.jpg')}}" class="img-fluid" alt="Feature">
                            <p>Patient Ward</p>
                        </div>
                        <!-- Slider Item -->

                        <!-- Slider Item -->
                        <div class="feature-item text-center">
                            <img src="{{asset('assets/img/features/feature-02.jpg')}}" class="img-fluid" alt="Feature">
                            <p>Test Room</p>
                        </div>
                        <!-- Slider Item -->

                        <!-- Slider Item -->
                        <div class="feature-item text-center">
                            <img src="{{asset('assets/img/features/feature-03.jpg')}}" class="img-fluid" alt="Feature">
                            <p>ICU</p>
                        </div>
                        <!-- Slider Item -->

                        <!-- Slider Item -->
                        <div class="feature-item text-center">
                            <img src="{{asset('assets/img/features/feature-04.jpg')}}" class="img-fluid" alt="Feature">
                            <p>Laboratory</p>
                        </div>
                        <!-- Slider Item -->

                        <!-- Slider Item -->
                        <div class="feature-item text-center">
                            <img src="{{asset('assets/img/features/feature-05.jpg')}}" class="img-fluid" alt="Feature">
                            <p>Operation</p>
                        </div>
                        <!-- Slider Item -->

                        <!-- Slider Item -->
                        <div class="feature-item text-center">
                            <img src="{{asset('assets/img/features/feature-06.jpg')}}" class="img-fluid" alt="Feature">
                            <p>Medical</p>
                        </div>
                        <!-- Slider Item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Availabe Features -->

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

<!-- Custom JS -->
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('admin/assets/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script type="text/javascript">
    $(function () {
        $('#main-datetime').datetimepicker({
            format: 'YYYY-MM-DD'
        });
    });
</script>
</body>

</html>
