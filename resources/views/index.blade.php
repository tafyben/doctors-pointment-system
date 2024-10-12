@extends('layouts.frontend')

    <!-- Header -->
@section('content')

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
                                        <a href="{{route('create-appointment', [$doctor->user_id, $doctor->date])}}">
                                            <button class="btn btn-success">
                                                Book Appointment
                                            </button>
                                        </a>
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


@endsection
