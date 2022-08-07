<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Candidates Apply</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Candidates / Candidates Apply</li>
        </ol>
        @if (session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif
        <div class="card mb-3">
            <div class="card-header text-white bg-dark">
                Candidates Apply
            </div>
            <div class="row my-2 px-3">
                <div class="col-md-6 col-12 mb-3">
                    <a href="{{route('apply_candidate_export')}}" class="btn btn-dark">Excel</a>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <input type="search" wire:model="search" id="search" class="form-control"
                                placeholder="Search..">
                        </div>
                        <div class="col-6 mb-3">
                            <select wire:model="searchby" id="searchby" class="form-control">
                                <option value="email">Email</option>
                                <option value="cnic">CNIC</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body text-primary overflow-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Picture</th>
                            <th>Full Name</th>
                            <th>Gender</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Post Code</th>
                            <th>Date of Birth</th>
                            <th>Email</th>
                            <th>CNIC</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($candidates as $candidate)
                            <tr>
                                <td>
                                    <img src="{{asset('storage/candidate-avatar/'.$candidate->picture)}}" class="rounded-circle" alt="picture" width="30p" height="30px">
                                </td>
                                <td>{{$candidate->first_name}} {{$candidate->last_name}}</td>
                                <td>{{$candidate->gender}}</td>
                                <td>{{$candidate->state}}</td>
                                <td>{{$candidate->city}}</td>
                                <td>{{$candidate->post_code}}</td>
                                <td>{{$candidate->dob}}</td>
                                <td>{{$candidate->email}}</td>
                                <td>{{$candidate->cnic}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{$candidates->links()}}
    </div>

</main>