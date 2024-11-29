<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                    <a href="{{ url('/dashboard') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>

                @if(auth()->check() && auth()->user()->role->name === 'admin')
                    <li class="submenu {{ Request::is('doctor*') ? 'active' : '' }}">
                        <a href="#"><i class="fe fe-layout"></i> <span>Doctors</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li class="{{ Request::is('doctor*') && !Request::is('doctor/create') ? 'active' : '' }}">
                                <a href="{{ route('doctor.index') }}">All Doctors</a>
                            </li>
                            <li class="{{ Request::is('doctor/create') ? 'active' : '' }}">
                                <a href="{{ route('doctor.create') }}">Create Appointment</a>
                            </li>
                        </ul>
                    </li>

                @endif
                @if(auth()->check()&& auth()->user()->role->name === 'doctor')
                <li class="submenu">
                    <a href="#"><i class="fe fe-users"></i> <span> Appointment Time</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{route('appointment.index')}}">All Appointments</a></li>
                        <li><a href="{{route('appointment.create')}}">Add Appointment</a></li>
                    </ul>
                </li>
                @endif
                @if(auth()->check()&& auth()->user()->role->name === 'doctor')
                <li class="submenu">
                    <a href="#"><i class="fe fe-users"></i> <span> Patients</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{route('patients.today')}}" class="menu-item">Patients(today)</a></li>
                        <li><a href="{{route('prescribed.patients')}}" class="menu-item">All patients(prescription)</a></li>
                    </ul>
                </li>
                @endif
                @if(auth()->check()&& auth()->user()->role->name === 'admin')
                <li class="submenu">
                    <a href="#"><i class="fe fe-users"></i> <span> Patient Appointment</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{route('patient')}}" class="menu-item">Today Appointment</a></li>
                            <li><a href="{{route('all.appointments')}}" class="menu-item">All Time Appointment</a></li>
                    </ul>
                </li>
                @endif
                @if(auth()->check()&& auth()->user()->role->name === 'admin')
                <li class="submenu">
                    <a href="#"><i class="fe fe-user-plus"></i> <span> Doctors/Users</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{route('doctor.index')}}">All Users</a></li>
                        <li><a href="{{route('doctor.index')}}">View</a></li>
                        <li><a href="#">Add User</a></li>
                    </ul>
                </li>
                @endif
                @if(auth()->check()&& auth()->user()->role->name === 'admin')
                    <li class="submenu">
                        <a href="#"><i class="fe fe-users"></i> <span> Department</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="{{route('department.index')}}" class="menu-item">All Departments</a></li>
                            <li><a href="{{route('department.create')}}" class="menu-item">Add Department</a></li>
                        </ul>
                    </li>
                @endif
                <style>
                    .disabled {
                        pointer-events: none;  /* Prevents clicking */
                        opacity: 0.5;          /* Makes the item look disabled */
                        cursor: not-allowed;   /* Change cursor to indicate it's disabled */
                    }
                </style>

                <li>
                    <a href="#" class="disabled"><i class="fe fe-star-o"></i> <span>Reviews - Coming Soon</span></a>
                </li>
                <li>
                    <a href="#" class="disabled"><i class="fe fe-activity"></i> <span>Transactions</span></a>
                </li>
                <li class="menu-title">
                    <span>Pages</span>
                </li>
                <li>
                    <a href="#"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
