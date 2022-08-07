@extends('layouts.admin-layout')
@section('title', 'Change Credentials')
    
@section('changecredentials')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Change Credentials</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Change Credentials</li>
        </ol>
        @if (session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger">{{ session()->get('error') }}</div>
        @endif
        <div class="card mb-3">
            <div class="card-header text-white bg-dark">
                Change Credentials
            </div>
            <div class="card-body text-primary overflow-auto">
                <form action="" method="POST">
                    @csrf
                    <div class="row"> 
                        <div class="form-outline mb-3 col-10 offset-1">
                            <label class="form-label text-dark" for="email">Email</label>
                            <input type="email" id="email" name="email"
                                class="form-control" placeholder="Email" value="{{$credentials->email}}" />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-outline mb-3 col-10 offset-1">
                            <label class="form-label text-dark" for="old_password">Old Password</label>
                            <input type="password" id="old_password" name="old_password" class="form-control"
                                placeholder="Enter old password" />
                            @error('old_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-outline mb-3 col-10 offset-1">
                            <label class="form-label text-dark" for="password">New Password</label>
                            <input type="password" id="password" name="password"
                                class="form-control" placeholder="Enter new Password" />
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                 @enderror
                        </div>
                        <div class="col-10 offset-1 my-3">
                            <input type="submit" value="Change" class="btn btn-dark">
                            <a href="{{route('admin_dashboard')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

</main>
@endsection