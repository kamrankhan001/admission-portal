@extends('layouts.app')
@section('title', 'Dashboard')

@section('dashboard')
    @include('interface.dashboard.navbar')

    @if ($open_date != null)
        @if (strtotime($open_date->opening_date) <= strtotime(date('Y-m-d')) and
            strtotime($open_date->closing_date) >= strtotime(date('Y-m-d')))
            @livewire('dashboard')
        @else
            <div class="container my-4">
                <div class="alert alert-warning">
                    <h1 class="text-center">Admission Closed</h1>
                </div>
            </div>
        @endif
    @else
        <div class="container my-4">
            <div class="alert alert-warning">
                <h1 class="text-center">Admission didn't start yet 🙂</h1>
            </div>
        </div>
    @endif

@endsection
