@extends('layouts.app')
@section('title', 'Login')

@section('login')
    @include('interface.auth.navbar')
    <section class="p-3">
        <div class="container">
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <div class="card">
                <div class="card-header text-white bg-dark">
                  Login
                </div>
                <div class="card-body">
                  <form action="" method="POST">
                      @csrf
                      <div class="form-outline mb-4">
                          <label class="form-label" for="cnic">CNIC</label>
                          <input type="text" id="cnic" name="cnic" class="form-control"
                              placeholder="Enter CNIC number" value="{{ old('cnic') }}" autocomplete="off" />
                          @error('cnic')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
      
                      <div class="form-outline mb-3">
                          <label class="form-label" for="password">Password</label>
                          <input type="password" id="password" name="password" class="form-control"
                              placeholder="Enter password" />
                          @error('password')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>

                      <div class="mt-1 clearfix">
                        <div class="float-start">
                            <button type="submit" class="btn btn-dark">Login</button>
                        </div>
                        <div class="float-end">
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a
                                    href="{{ route('register') }}" class="link-danger">Register</a></p>
                        </div>
                    </div>
      
                  </form>
                </div>
              </div>
        </div>

    </section>
@endsection

{{-- 2120274747031 --}}