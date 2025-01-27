@extends('admin.layouts.app')

@section('content')
    {{-- note page-wrapper class is already include in the global app file --}}
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-7 col-auto">
                <h3 class="page-title">Doctors</h3>
                <ul class="breadcrumb">
                    {{-- main routes to be checked here --}}
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Doctors</li>
                </ul>
            </div>
            {{--<div class="col-sm-5 col">
                <a href="#Add_Specialities_details" data-toggle="modal" class="btn btn-primary float-right mt-2">Add</a>
            </div>--}}

            <div class="col-sm-5 col">
                <a href="{{route('doctor.create')}}" class="btn btn-primary float-right mt-2">Add</a>
            </div>
        </div>
    </div>
    <!-- /Page Header -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    @if(Session::has('message'))
                        <div class="alert bg-success alert-success text-white" role="alert">
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <div class="table-striped-columns">
                        <!-- some changed can noted down below, not everything will need to be included meet-->
                        <table class="datatable table table-hover table-center mb-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Address</th>
                                <th>Phone Number</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($doctors)>0)
                                @foreach($doctors as $user)
                                <tr>
                                    <td>{{$user->id}}</td>

                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar avatar-sm mr-2">
                                                <img class="avatar-img" src="{{asset('images')}}/{{$user->image}}" alt="{{$user->gender}}">
                                            </a>
                                            <a href="#">{{$user->gender}}</a>
                                        </h2>
                                    </td>

                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->department}}</td>
                                    <td>{{$user->address}}</td>
                                    <td>{{$user->phone_number}}</td>


                                    <td class="text-right">
                                        <div class="actions">
                                            <a class="btn btn-sm bg-primary-light" data-toggle="modal" href="#view_details{{$user->id}}">
                                                <i class="fe fe-eye"></i>
                                            </a>
                                            <a class="btn btn-sm bg-purple-light" href="{{route('doctor.edit', $user->id)}}">
                                                <i class="fe fe-pencil"></i>
                                            </a>
                                            {{--<a  data-toggle="modal" href="#delete_modal" class="btn btn-sm bg-danger-light">
                                                <i class="fe fe-trash"></i>
                                            </a>--}}
                                            <a href="{{route('doctor.show', [$user->id])}}" class="btn btn-sm bg-danger-light">
                                                <i class="fe fe-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                    <!-- this is why the other buttons where not working (it has to be included in all the files) -->
                                    @include('admin.doctor.modal')
                                @endforeach

                            @else
                                <td>No users found</td>
                            @endif


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- add user modal-->
    <div class="modal fade" id="Add_Specialities_details" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Specialities</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row form-row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Specialities</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file"  class="form-control">
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- add user modal -->

    <!-- edit details modal -->
        @include('admin.doctor.modal')
    <!-- edit details modal -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" >
            <div class="modal-content">
                <!--	<div class="modal-header">
                        <h5 class="modal-title">Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>-->
                <div class="modal-body">
                    <div class="form-content p-2">
                        <h4 class="modal-title">Delete</h4>
                        <p class="mb-4">Are you sure want to delete?</p>
                        <button type="button" class="btn btn-primary">Save </button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
