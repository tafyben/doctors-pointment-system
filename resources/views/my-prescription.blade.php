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
                            <li class="breadcrumb-item active" aria-current="page">Prescriptions</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Prescriptions</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <!-- Profile Sidebar -->
                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
                    <div class="profile-sidebar">
                        <div class="widget-profile pro-widget-content">
                            <div class="profile-info-widget">
                                <a href="#" class="booking-doc-img">
                                    <img src="assets/img/patients/patient.jpg" alt="User Image">
                                </a>
                                <div class="profile-det-info">
                                    <h3>Richard Wilson</h3>
                                    <div class="patient-details">
                                        <h5><i class="fas fa-birthday-cake"></i> 24 Jul 1983, 38 years</h5>
                                        <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Newyork, USA</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-widget">
                            <nav class="dashboard-menu">
                                <ul>
                                    <li class="active">
                                        <a href="patient-dashboard.html">
                                            <i class="fas fa-columns"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="favourites.html">
                                            <i class="fas fa-bookmark"></i>
                                            <span>Favourites</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="chat.html">
                                            <i class="fas fa-comments"></i>
                                            <span>Message</span>
                                            <small class="unread-msg">23</small>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="profile-settings.html">
                                            <i class="fas fa-user-cog"></i>
                                            <span>Profile Settings</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('logout') }}">
                                            <i class="fas fa-sign-out-alt"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
                <!-- / Profile Sidebar -->

                <div class="col-md-7 col-lg-8 col-xl-9">
                    <div class="card">
                        <div class="card-header">My prescriptions</div>

                        <div class="card-body">

                            <table class="table table-striped">
                                <thead>
                                <tr>

                                    <th scope="col">Date</th>
                                    <th scope="col">Doctor</th>
                                    <th scope="col">Disease</th>
                                    <th scope="col">Symptoms</th>
                                    <th scope="col">medicine</th>
                                    <th scope="col">procedure to use medicine</th>
                                    <th scope="col">Doctor Feedback</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($prescriptions as $prescription)
                                    <tr>

                                        <td>{{$prescription->date}}</td>
                                        <td>{{$prescription->doctor->name}}</td>
                                        <td>{{$prescription->name_of_disease}}</td>
                                        <td>{{$prescription->symptoms}}</td>
                                        <td>{{$prescription->medicine}}</td>
                                        <td>{{$prescription->procedure_to_use_medicine}}</td>
                                        <td>{{$prescription->feedback}}</td>
                                    </tr>
                                @empty
                                    <td>You have no prescriptions</td>
                                @endforelse

                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->


@endsection
