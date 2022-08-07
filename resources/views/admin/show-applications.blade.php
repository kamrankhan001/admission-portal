@extends('layouts.admin-layout')
@section('title', 'Applications')
    
@section('applications')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Applications</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Admission / Applications</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header text-white bg-dark">
                Applications
            </div>
            <div class="card-body text-primary overflow-auto">
                <div class="row">
                    @foreach ($programs as $program)
                        <div class="col-md-4 col-12">
                            <a href="{{route('single_application',['name'=>$program->degree_name." ".$program->program_name])}}" class="card bg-dark text-white mb-4 text-decoration-none">
                                <div class="card-body">{{$program->degree_name}} {{$program->program_name}}</div>
                            </a>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>

    </div>

</main>
@endsection