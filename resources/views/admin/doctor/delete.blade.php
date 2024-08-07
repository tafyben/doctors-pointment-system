@extends('admin.layouts.app')

@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Doctors</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('doctor.index')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Delete</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->
    <div class="row">
        <div class="col-md-12">

            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Delete Form</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('doctor.destroy',[$user->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="card-title">Delete Doctor - <p class="font-weight-bold">{{$user->name}}</p> </h4>

                            </div>
                        </div>
                       <div class="card-footer">
                               <button type="submit" class="btn btn-primary mr-2">Delete</button>
                               <a href="{{route('doctor.index')}}" class="btn btn-secondary">Cancel</a>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
