@extends('layouts.admin-layout')

@section('title', 'Add New Program')

@section('addprogram')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Add New Program</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Programs / Add Program</li>
            </ol>
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif
            <div class="card mb-3">
                <div class="card-header text-white bg-dark">
                    Add New Program
                </div>
                <div class="card-body text-primary overflow-auto">
                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12 mb-1">
                                <label for="degree_name" class="form-label text-dark">Degree Name</label>
                                <input type="text" name="degree_name" id="degree_name" placeholder="Degree Name"
                                    class="form-control" value="{{old('degree_name')}}">
                                @error('degree_name')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="col-md-6 col-12 mb-1">
                                <label for="program_name" class="form-label text-dark">Program Name</label>
                                <input type="text" name="program_name" id="program_name" placeholder="Program Name"
                                    class="form-control" value="{{old('program_name')}}">
                                @error('program_name')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12 mb-1">
                                <label for="total_year" class="form-label text-dark">Total Year</label>
                                <input type="text" name="total_year" id="total_year" placeholder="Total Year"
                                    class="form-control" value="{{old('total_year')}}">
                                @error('total_year')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="col-md-6 col-12 mb-1">
                                <label for="total_semester" class="form-label text-dark">Total Semester</label>
                                <input type="text" name="total_semester" id="total_semester" placeholder="Total Semester"
                                    class="form-control" value="{{old('total_semester')}}">
                                @error('total_semester')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12 mb-1">
                                <label for="registration_fee" class="form-label text-dark">Registration Fee</label>
                                <input type="text" name="registration_fee" id="registration_fee" placeholder="Registration Fee"
                                    class="form-control" value="{{old('registration_fee')}}">
                                @error('registration_fee')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="col-md-6 col-12 mb-1">
                                <label for="fee_per_semester" class="form-label text-dark">Fee Per Semester</label>
                                <input type="text" name="fee_per_semester" id="fee_per_semester" placeholder="Fee Per Semester"
                                    class="form-control" value="{{old('fee_per_semester')}}">
                                @error('fee_per_semester')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="text-end my-3">
                            <input type="submit" value="Add" class="btn btn-dark">
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </main>

@endsection
