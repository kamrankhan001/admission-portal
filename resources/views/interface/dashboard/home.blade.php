@extends('layouts.app')
@section('title', 'Dashboard')

@section('dashboard')
    @include('interface.dashboard.navbar')

    <div class="container my-4">
        <div class="card my-4">
            <div class="card-header bg-dark text-white">
                Home
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <img src="{{asset('storage/candidate-avatar/'.$user->picture)}}" class="class="img-thumbnail"" alt="avatar" width="300px" height="300px">
                    </div>
                    <div class="col-md-8 col-12 my-3">
                        <table class="table table-striped">
                            <tr>
                                <th>First name</th>
                                <td>{{$user->first_name}}</td>
                                <th>Last name</th>
                                <td>{{$user->last_name}}</td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>{{$user->city}}</td>
                                <th>Post Code</th>
                                <td>{{$user->post_code}}</td>
                            </tr>
                            <tr>
                                <th>State</th>
                                <td>{{$user->state}}</td>
                                <th>Gender</th>
                                <td>{{$user->gender}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$user->email}}</td>
                                <th>CNIC</th>
                                <td>{{$user->cnic}}</td>
                            </tr>
                        </table>
                        <div class="py-3">
                            <a href="{{route('dashboard')}}" class="btn btn-dark">Programs</a>
                            <a href="{{route('myapplications')}}" class="btn btn-dark">My Applications</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
