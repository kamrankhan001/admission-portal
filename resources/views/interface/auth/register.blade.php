@extends('layouts.app')
@section('title', 'Register')

@section('register')
    @include('interface.auth.navbar')
    <section class="p-3">
        <div class="px-3 h-100">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Registration
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="first_name">First name</label>
                                    <input type="text" id="first_name" name="first_name" class="form-control"
                                        value="{{ old('first_name') }}" placeholder="Ali" autocomplete="off" />
                                    @error('first_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="last_name">Last name</label>
                                    <input type="text" id="last_name" name="last_name" class="form-control"
                                        value="{{ old('last_name') }}" placeholder="Khan" autocomplete="off" />
                                    @error('last_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 mb-4 col-md-4 col-12">
                                <label class="form-label" for="gender">Gender</label>

                                <select name="gender" id="gender" name="gender" class="form-control">
                                    <option value="">Gender</option>
                                    <option value="Men">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                                @error('gender')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-4">
                                <label class="form-label" for="state">State</label>

                                <select class="form-control" name="state" name="state" id="state">
                                    <option value="">State</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Sindh">Sindh</option>
                                    <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
                                    <option value="Balochistan">Balochistan</option>
                                </select>
                                @error('state')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-4 col-12 mb-4">

                                <label class="form-label" for="city">City</label>
                                <input type="text" id="city" name="city" class="form-control"
                                    value="{{ old('city') }}" placeholder="Bahawalpur" autocomplete="off" />
                                @error('city')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>

                            <div class="mb-4 col-md-4 col-12">
                                <label class="form-label" for="postcode">Post Code</label>
                                <input type="text" id="postcode" name="postcode" class="form-control"
                                    value="{{ old('postcode') }}" placeholder="63100" autocomplete="off" />
                                @error('postcode')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4 col-md-4 col-12">
                                <label class="form-label" for="date_of_birth">Date of Birth</label>
                                <input type="date" id="date_of_birth" name="date_of_birth" class="form-control"
                                    value="{{ old('date_of_birth') }}" />
                                @error('date_of_birth')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4 col-md-4 col-12">
                                <label class="form-label" for="picture">Picture</label>
                                <input type="file" id="picture" name="picture" class="form-control" />
                                @error('picture')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4 col-md-4 col-12">
                                <label class="form-label" for="email">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control"
                                    value="{{ old('email') }}" placeholder="alikhan@gmail.com" autocomplete="off" />
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4 col-md-4 col-12">
                                <label class="form-label" for="cnic">CNIC</label>
                                <input type="text" id="cnic" name="cnic" class="form-control"
                                    value="{{ old('cnic') }}"placeholder="2130398127031" autocomplete="off" />
                                @error('cnic')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4 col-md-4 col-12">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control"
                                    placeholder="Password" />
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4 col-md-4 col-12">
                                <label class="form-label" for="password_confirmation">Confirm Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="form-control" placeholder="Confirm Password" />
                            </div>
                        </div>

                        <div class="mt-1 clearfix">
                            <div class="float-start">
                                <button type="submit" class="btn btn-dark">Register</button>
                            </div>
                            <div class="float-end">
                                <p class="small fw-bold mt-2 pt-1 mb-0">Already have account? <a
                                        href="{{ route('login') }}" class="link-danger">Login</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
@endsection
