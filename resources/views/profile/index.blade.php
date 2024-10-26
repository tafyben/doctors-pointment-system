@extends('layouts.frontend')

<!-- Header -->
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Profile</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar dct-dashbd-lft">

                    <!-- Profile Widget -->
                    <div class="card widget-profile pat-widget-profile">
                        <div class="card-body">
                            <div class="pro-widget-content">
                                <div class="profile-info-widget">
                                    <a href="#" class="booking-doc-img">
                                        <img src="https://picsum.photos/id/13/200/300" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3>{{auth()->user()->name}}</h3>

                                        <div class="patient-details">
                                            <h5><b>Patient ID :</b> UC{{auth()->user()->id}}</h5>
                                            <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> {{auth()->user()->email}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="patient-info">
                                <ul>
                                    <li>Phone <span>{{auth()->user()->phone}}</span></li>
                                    <li>Gender <span>{{auth()->user()->gender}}</span></li>
{{--                                    <li>Blood Group <span>AB+</span></li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Profile Widget -->

                    <!-- Last Booking -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Last Booking</h4>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="media align-items-center">
                                    <div class="mr-3">
                                        <img alt="Image placeholder" src="https://picsum.photos/id/20/200/300" class="avatar  rounded-circle">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="d-block mb-0">Dr. Darren Elder </h5>
                                        <span class="d-block text-sm text-muted">Dentist</span>
                                        <span class="d-block text-sm text-muted">14 Nov 2019 5.00 PM</span>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media align-items-center">
                                    <div class="mr-3">
                                        <img alt="Image placeholder" src="https://picsum.photos/id/23/200/300" class="avatar  rounded-circle">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="d-block mb-0">Dr. Darren Elder </h5>
                                        <span class="d-block text-sm text-muted">Dentist</span>
                                        <span class="d-block text-sm text-muted">12 Nov 2019 11.00 AM</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /Last Booking -->

                </div>

                <div class="col-md-7 col-lg-8 col-xl-9 dct-appoinment">
                    <div class="card">
                        <div class="card-body pt-0">
                            <div class="user-tabs">
                                <ul class="nav nav-tabs nav-tabs-bottom nav-justified flex-wrap">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#pat_appointments" data-toggle="tab">Appointments</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#pres" data-toggle="tab"><span>Prescription</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#medical" data-toggle="tab"><span class="med-records">Medical Records</span></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="tab-content">

                                <!-- Appointment Tab -->
                                <div id="pat_appointments" class="tab-pane fade show active">
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="card-body">
                                                <form action="{{route('profile.store')}}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{auth()->user()->name}}">
                                                        @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="text" name="address" class="form-control" value="{{auth()->user()->address}}">

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Phone number</label>
                                                        <input type="text" name="phone_number" class="form-control" value="{{auth()->user()->phone_number}}">

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                                            <option value="">select gender</option>
                                                            <option value="male" @if(auth()->user()->gender==='male')selected @endif >Male</option>
                                                            <option value="female" @if(auth()->user()->gender==='female')selected @endif>Female</option>
                                                        </select>
                                                        @error('gender')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror

                                                        <div class="form-group">
                                                            <label>Bio</label>
                                                            <textarea name="description" class="form-control">{{auth()->user()->description}}</textarea>

                                                        </div>
                                                        <div class="form-group">

                                                            <button class="btn btn-primary" type="submit">Update</button>

                                                        </div>

                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Appointment Tab -->

                                <!-- Prescription Tab -->
                                <div class="tab-pane fade" id="pres">
                                    <div class="text-right">
{{--                                        <a href="add-prescription.html" class="add-new-btn">Add Prescription</a>--}}
                                    </div>
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <h1 class="text-center m-5">Coming Soon</h1>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Prescription Tab -->

                                <!-- Medical Records Tab -->
                                <div class="tab-pane fade" id="medical">
                                    <div class="text-right">
{{--                                        <a href="#" class="add-new-btn" data-toggle="modal" data-target="#add_medical_records">Add Medical Records</a>--}}
                                    </div>
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <h1 class="text-center m-5">Coming Soon</h1>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Medical Records Tab -->



                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->
@endsection
