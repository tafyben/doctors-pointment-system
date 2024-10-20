@extends('layouts.frontend')

@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Appointments</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Appointments</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

                    <!-- Profile Sidebar -->
                    <div class="profile-sidebar">
                        <div class="widget-profile pro-widget-content">
                            <div class="profile-info-widget">
                                <a href="#" class="booking-doc-img">
                                    <img src="#" alt="User Image">
                                </a>
                                <div class="profile-det-info">
                                    <h3>{{$user->name}}</h3>

                                    <div class="patient-details">
                                        <h5 class="mb-0">{{$user->education}}</h5>
                                    </div>
                                    <div class="patient-details">
                                        <h5 class="mb-0">{{$user->department}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-widget">
                            <nav class="dashboard-menu">
                                <ul>
                                    <li>
                                        <a href="doctor-dashboard.html">
                                            <i class="fas fa-columns"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="appointments.html">
                                            <i class="fas fa-calendar-check"></i>
                                            <span>Appointments</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="my-patients.html">
                                            <i class="fas fa-user-injured"></i>
                                            <span>My Patients</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="schedule-timings.html">
                                            <i class="fas fa-hourglass-start"></i>
                                            <span>Schedule Timings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="invoices.html">
                                            <i class="fas fa-file-invoice"></i>
                                            <span>Invoices</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="reviews.html">
                                            <i class="fas fa-star"></i>
                                            <span>Reviews</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="chat-doctor.html">
                                            <i class="fas fa-comments"></i>
                                            <span>Message</span>
                                            <small class="unread-msg">23</small>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="doctor-profile-settings.html">
                                            <i class="fas fa-user-cog"></i>
                                            <span>Profile Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="social-media.html">
                                            <i class="fas fa-share-alt"></i>
                                            <span>Social Media</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="doctor-change-password.html">
                                            <i class="fas fa-lock"></i>
                                            <span>Change Password</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-2.html">
                                            <i class="fas fa-sign-out-alt"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- /Profile Sidebar -->

                </div>

                <div class="col-md-7 col-lg-8 col-xl-9">
                    <div class="appointments">
                        <form action="" method="post">
                            @csrf

                        <!-- Appointment List -->
                            <div class="card">
                                <div class="card-header">{{$date}}</div>

                                <div class="card-body">
                                    <div class="row">
                                        @foreach($times as $time)
                                            <div class="col-md-3">
                                                <label class="btn btn-outline-primary">
                                                    <input type="radio" name="status" value="1">
                                                    <span>{{$time->time}}</span>
                                                </label>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="card-footer">
                                    @if(Auth::check())
                                        <button type="submit" class="btn btn-success" style="width: 100%;">Book Appointment</button>
                                    @else
                                        <p class="lead font-weight-light">Please login to your account to make an appointment.</p>
                                        <a href="/register" class="btn btn-outline-primary">Register</a>
                                        <a href="/login" class="btn btn-outline-info">Login</a>
                                    @endif
                                </div>
                            </div>
                        <!-- /Appointment List -->
                        </form>




                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->

@endsection
