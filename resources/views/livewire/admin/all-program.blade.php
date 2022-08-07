<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">All Program</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Programs / All Program</li>
        </ol>
        @if (session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif
        <div class="card mb-3">
            <div class="card-header text-white bg-dark">
                All Program
            </div>
            <div class="row my-2 px-3">
                <div class="col-md-6 col-12 mb-3">
                    <a href="{{route('program_export')}}" class="btn btn-dark">Excel</a>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <input type="search" wire:model="search" id="search" class="form-control"
                                placeholder="Search...">
                        </div>
                        <div class="col-6 mb-3">
                            <select wire:model="searchby" id="searchby" class="form-control">
                                <option value="program_name">Name</option>
                                <option value="fee_per_semtr">Fee</option>
                                <option value="total_year">Total Year</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body text-primary overflow-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Degree Name</th>
                            <th>Program Name</th>
                            <th>Total Year</th>
                            <th>Total Semester</th>
                            <th>Registration Fee</th>
                            <th>Fee per Semester</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($programs as $program)
                            <tr>
                                <td>{{ $program->degree_name }}</td>
                                <td>{{ $program->program_name }}</td>
                                <td>{{ $program->total_year }}</td>
                                <td>{{ $program->total_semtr }}</td>
                                <td>{{ $program->register_fee }}</td>
                                <td>{{ $program->fee_per_semtr }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm text-warning"
                                        data-bs-toggle="modal" data-bs-target="#update"
                                        wire:click="edit({{ $program->id }})")><i
                                            class="fa-solid fa-user-pen"></i></button>
                                    <button type="button" class="btn btn-sm text-danger" data-bs-toggle="modal"
                                        data-bs-target="#delete" wire:click="edit({{ $program->id }})"><i
                                            class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{ $programs->links() }}

    </div>

    <!-- update Modal -->
    <div wire:ignore.self class="modal fade" id="update" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="close_modal"></button>
                </div>
                <form wire:submit.prevent="student_update">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-12 mb-1">
                                <label for="degree_name" class="form-label text-dark">Degree Name</label>
                                <input type="text" wire:model="degree_name" placeholder="Degree Name"
                                    class="form-control">
                                @error('degree_name')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="col-md-6 col-12 mb-1">
                                <label for="program_name" class="form-label text-dark">Program Name</label>
                                <input type="text" wire:model="program_name" id="program_name" placeholder="Program Name"
                                    class="form-control">
                                @error('program_name')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12 mb-1">
                                <label for="total_year" class="form-label text-dark">Total Year</label>
                                <input type="text" wire:model="total_year" id="total_year" placeholder="Total Year"
                                    class="form-control">
                                @error('total_year')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="col-md-6 col-12 mb-1">
                                <label for="total_semester" class="form-label text-dark">Total Semester</label>
                                <input type="text" wire:model="total_semester" id="total_semester" placeholder="Total Semester"
                                    class="form-control">
                                @error('total_semester')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12 mb-1">
                                <label for="registration_fee" class="form-label text-dark">Registration Fee</label>
                                <input type="text" wire:model="registration_fee" id="registration_fee" placeholder="Registration Fee"
                                    class="form-control">
                                @error('registration_fee')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="col-md-6 col-12 mb-1">
                                <label for="fee_per_semester" class="form-label text-dark">Fee Per Semester</label>
                                <input type="text" wire:model="fee_per_semester" id="fee_per_semester" placeholder="Fee Per Semester"
                                    class="form-control">
                                @error('fee_per_semester')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                            wire:click="close_modal">Close</button>
                        <button type="submit" class="btn btn-dark">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div wire:ignore.self class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="close_modal"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal"
                        wire:click="close_modal">Cancel</button>
                    <button type="submit" class="btn btn-danger" wire:click="delete">Delete</button>
                </div>
            </div>
        </div>
    </div>
    
</main>



<script>
    window.addEventListener('close-modal', event => {
        $('#add').modal('hide');
        $('#update').modal('hide');
        $('#delete').modal('hide');
    })
</script>
