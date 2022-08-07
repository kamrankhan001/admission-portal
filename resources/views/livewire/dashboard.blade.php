<div class="card">
    <div class="my-3 px-3">
        <form>
            <div class="clearfix">
                <div class="float-start">
                    <input type="search" wire:model="search" class="form-control" placeholder="Serach..">
                </div>
            </div>
        </form>
    </div>

    <div class="card-body">
        <div class="row">
            @foreach ($programs as $program)
                <div class="col-md-4 col-12">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-header">{{$program->degree_name." ".$program->program_name}}</div>
                        <div class="card-body bg-light text-dark">
                            <table class="table">
                                <tr>
                                    <th>Degree Name</th>
                                    <td>{{$program->degree_name}}</td>
                                </tr>
                                <tr>
                                    <th>Program Name</th>
                                    <td>{{$program->program_name}}</td>
                                </tr>
                                <tr>
                                    <th>Total Years</th>
                                    <td>{{$program->total_year}}</td>
                                </tr>
                                <tr>
                                    <th>Total Semester</th>
                                    <td>{{$program->total_semtr}}</td>
                                </tr>
                                <tr>
                                    <th>Registration Fee</th>
                                    <td>{{$program->register_fee}}</td>
                                </tr>
                                <tr>
                                    <th>Fee per Semeter</th>
                                    <td>{{$program->fee_per_semtr}}</td>
                                </tr>
                            </table>
                            <a href="{{route('show_form', ['degree'=>$program->degree_name." ".$program->program_name])}}" class="btn btn-dark btn-sm my-2">Apply</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <nav class="container">
        {{$programs->links()}}
      </nav>
</div>
