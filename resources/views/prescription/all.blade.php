@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">Appointments({{$patients->count()}})</div>



                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Date</th>
                                <th scope="col">User</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Time</th>
                                <th scope="col">Doctor</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($patients as $key=>$patient)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$patient->date}}</td>
                                    <td>{{$patient->user->name}}</td>
                                    <td>{{$patient->user->email}}</td>
                                    <td>{{$patient->user->gender}}</td>
                                    <td>{{$patient->time}}</td>
                                    <td>{{$patient->doctor->name}}</td>
                                    <td>
                                        @if($patient->status==1)
                                            checked
                                        @endif
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->

                                        <a href="{{route('prescription.show',[$patient->user_id,$patient->date])}}" class="btn btn-secondary">View prescription</a>




                                    </td>
                                </tr>
                                @empty
                                    <td>You do not have no any Patients Today.</td>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(function () {
            $('#main-datetime').datetimepicker({
                format: 'YYYY-MM-DD',
                minDate: moment()

            });
        });
    </script>
@endpush
