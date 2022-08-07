@extends('layouts.admin-layout')

@section('title', 'Set Admission Date')

@section('setadmissiondate')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Set Admission Date</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Admission / Set Admission Date</li>
            </ol>
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif
            <div class="card mb-3">
                <div class="card-header text-white bg-dark">
                    Set Admission Date
                </div>
                <div class="card-body text-primary overflow-auto">
                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12 mb-1">
                                <label for="opening_date" class="form-label text-dark">Opening date</label>
                                <input type="date" name="opening_date" id="opening_date" placeholder="Opening date"
                                    class="form-control">
                                @error('opening_date')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="col-md-6 col-12 mb-1">
                                <label for="closing_date" class="form-label text-dark">Closing Date</label>
                                <input type="date" name="closing_date" id="closing_date" placeholder="Closing Date"
                                    class="form-control">
                                @error('closing_date')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12 mb-1">
                                <label for="challan_no" class="form-label text-dark">Challan Start From</label>
                                <input type="text" name="challan_no" id="challan_no" placeholder="Challan No"
                                    class="form-control">
                                @error('challan_no')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="col-md-6 col-12 mb-1">
                                <label for="batch_no" class="form-label text-dark">Batch No</label>
                                <input type="text" name="batch_no" id="batch_no" placeholder="Batch No"
                                    class="form-control">
                                @error('batch_no')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="text-end my-3">
                            <input type="submit" value="Set" class="btn btn-dark">
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </main>

@endsection
