<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="active">
                    <a href="#"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>
                @if(auth()->check()&& auth()->user()->role->name === 'admin')
                <li class="submenu">
                    <a href="#"><i class="fe fe-layout"></i> <span> Doctors</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{route('doctor.index')}}">All Doctors</a></li>
                        <li><a href="{{route('doctor.create')}}">Create Appointment</a></li>
                    </ul>
                </li>
                @endif
                @if(auth()->check()&& auth()->user()->role->name === 'doctor')
                <li class="submenu">
                    <a href="#"><i class="fe fe-users"></i> <span> Appointments</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{route('appointment.index')}}">All Appointments</a></li>
                        <li><a href="{{route('appointment.create')}}">Add Appointment</a></li>
                    </ul>
                </li>
                @endif
                <li class="submenu">
                    <a href="#"><i class="fe fe-user-plus"></i> <span> Users</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{route('doctor.index')}}">All Users</a></li>
                        <li><a href="#">Add User</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fe fe-star-o"></i> <span>Reviews</span></a>
                </li>
                <li>
                    <a href="#"><i class="fe fe-activity"></i> <span>Transactions</span></a>
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
