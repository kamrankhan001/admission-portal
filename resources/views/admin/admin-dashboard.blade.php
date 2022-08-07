@extends('layouts.admin-layout')
@section('title', 'Dashboard')
    
@section('dashboard')
    <div class="container my-3">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="my-3">
            <div class="row">
                <div class="col-md-4 col-12">
                    <a href="{{route('register_user')}}" class="card bg-dark text-white mb-4 text-decoration-none">
                        <div class="card-body">Register Students</div>
                        <div class="card-footer d-flex align-items-center justify-content-center">
                            <div>
                                <h4>{{$register_user}}</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-12">
                    <a href="{{route('applications')}}" class="card bg-dark text-white mb-4 text-decoration-none">
                        <div class="card-body">Admission Applications</div>
                        <div class="card-footer d-flex align-items-center justify-content-center">
                            <div>
                                <h4>{{$applications}}</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-12">
                    <a href="{{route('candidates_apply')}}" class="card bg-dark text-white mb-4 text-decoration-none">
                        <div class="card-body">Students Who Apply</div>
                        <div class="card-footer d-flex align-items-center justify-content-center">
                            <div>
                                <h4>{{$apply}}</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-12">
                    <a href="{{route('candidates_doesnt_apply')}}" class="card bg-dark text-white mb-4 text-decoration-none">
                        <div class="card-body">Students Who doesn't Apply</div>
                        <div class="card-footer d-flex align-items-center justify-content-center">
                            <div>
                                <h4>{{$unapply}}</h4>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
@endsection