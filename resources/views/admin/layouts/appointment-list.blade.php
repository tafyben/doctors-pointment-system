<div class="row">
    <div class="col-md-12">
        <!-- Recent Orders -->
        <div class="card card-table">
            <div class="card-header">
                <h4 class="card-title">Appointment List</h4>
            </div>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover table-center mb-0">
                        <thead>
                        <tr>
                            <th>Doctor Name</th>
                            <th>Speciality</th>
                            <th>Patient Name</th>
                            <th>Appointment Time</th>
                            <th>Status</th>
                            <th class="text-right">Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{asset('admin/assets/img/doctors/doctor-thumb-01.jpg')}}" alt="User Image"></a>
                                    <a href="profile.html">Dr. Ruby Perrin</a>
                                </h2>
                            </td>
                            <td>Dental</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="a{{asset('admin/ssets/img/patients/patient1.jpg')}}" alt="User Image"></a>
                                    <a href="profile.html">Charlene Reed </a>
                                </h2>
                            </td>
                            <td>9 Nov 2019 <span class="text-primary d-block">11.00 AM - 11.15 AM</span></td>
                            <td>
                                <div class="status-toggle">
                                    <input type="checkbox" id="status_1" class="check" checked>
                                    <label for="status_1" class="checktoggle">checkbox</label>
                                </div>
                            </td>
                            <td class="text-right">
                                $200.00
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /Recent Orders -->

    </div>
</div>
