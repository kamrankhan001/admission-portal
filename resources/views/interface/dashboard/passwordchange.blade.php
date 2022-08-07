@extends('layouts.app')
@section('title', 'My Application')

@section('passwordchange')
    @include('interface.dashboard.navbar')

    <div class="container my-4">
        <div class="card my-4">
            <div class="card-header bg-dark text-white">
                Password Change
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="row"> 
                        <div class="form-outline mb-3 col-10 offset-1">
                            <label class="form-label" for="old_password">Old Password</label>
                            <input type="password" id="old_password" name="old_password"
                                class="form-control" placeholder="Enter password" />
                            @error('old_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-outline mb-3 col-10 offset-1">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control"
                                placeholder="Enter password" />
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-outline mb-3 col-10 offset-1">
                            <label class="form-label" for="password_confirmation">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="form-control" placeholder="Confirm Password" />
                        </div>
                        <div class="col-10 offset-1 my-3">
                            <input type="submit" value="Change" class="btn btn-dark">
                            <a href="{{route('home')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
