@extends('layouts.app')
@section('title', 'Admission Form')
    
@section('admissionform')
    @include('interface.dashboard.navbar')

    @livewire('admission-form', ['degree'=>$degree])
@endsection