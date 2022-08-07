<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Applications</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Admission / Applications</li>
        </ol>
        @if (session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif
        <div class="card mb-3">
            <div class="card-header text-white bg-dark">
                All Applications
            </div>
            <div class="row my-2 px-3">
                <div class="col-md-6 col-12 mb-3">
                    <a href="{{route('applications_export')}}" class="btn btn-dark">Excel</a>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <input type="search" wire:model="search" id="search" class="form-control"
                                placeholder="Search..">
                        </div>
                        <div class="col-6 mb-3">
                            <select wire:model="searchby" id="searchby" class="form-control">
                                <option value="cnic">CNIC</option>
                                <option value="email">Email</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body text-primary overflow-auto">
                <table class="table" style="width: 4000px">
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
                            <th>Father Name</th>
                            <th>Father CNIC</th>
                            <th>Father Mobile Number</th>
                            <th>Father Occupation</th>
                            <th>Father Salary</th>
                            <th>Address</th>
                            <th>Hafiz Quran</th>
                            <th>Mobile Number</th>
                            <th>Metric Total Marks</th>
                            <th>Metric Obtain Marks</th>
                            <th>Inter Total Marks</th>
                            <th>Inter Obtain Marks</th>
                            <th>CNIC Picture</th>
                            <th>Metric Result Picture</th>
                            <th>Inter Result Picture</th>
                            <th>Domicile Picture</th>
                            <th>Challan Upload</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($applications as $application)
                            <tr class="text-center">
                                <td>
                                    <img src="{{ asset('storage/candidate-avatar/' . $application->picture) }}"
                                        class="rounded-circle" alt="avatar" width="30px" height="30px">
                                </td>
                                <td>{{ $application->first_name }} {{ $application->last_name }}</td>
                                <td>{{ $application->gender }}</td>
                                <td>{{ $application->state }}</td>
                                <td>{{ $application->city }}</td>
                                <td>{{ $application->post_code }}</td>
                                <td>{{ $application->dob }}</td>
                                <td>{{ $application->email }}</td>
                                <td>{{ $application->cnic }}</td>
                                <td>{{ $application->father_name }}</td>
                                <td>{{ $application->father_cnic }}</td>
                                <td>{{ $application->father_mobile_number }}</td>
                                <td>{{ $application->father_occupation }}</td>
                                <td>{{ $application->father_salary }}</td>
                                <td>{{ $application->address }}</td>
                                <td>{{ $application->hafiz_quran }}</td>
                                <td>{{ $application->mobile_number }}</td>
                                <td>{{ $application->total_marks_metric }}</td>
                                <td>{{ $application->obtain_marks_metric }}</td>
                                <td>{{ $application->total_marks_inter }}</td>
                                <td>{{ $application->obtain_marks_inter }}</td>
                                <td>
                                    <a href="{{ asset('storage/' . $application->cnic_card) }}" target="_blank">
                                        <img src="{{ asset('storage/' . $application->cnic_card) }}"
                                            class="rounded-circle" alt="cnic picture" width="30px" height="20px">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ asset('storage/' . $application->matriculation_result) }}"
                                        target="_blank">
                                        <img src="{{ asset('storage/' . $application->matriculation_result) }}"
                                            class="rounded-circle" alt="cnic picture" width="30px" height="20px">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ asset('storage/' . $application->intermediate_result) }}"
                                        target="_blank">
                                        <img src="{{ asset('storage/' . $application->intermediate_result) }}"
                                            class="rounded-circle" alt="cnic picture" width="30px" height="20px">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ asset('storage/' . $application->domicile) }}" target="_blank">
                                        <img src="{{ asset('storage/' . $application->domicile) }}"
                                            class="rounded-circle" alt="cnic picture" width="30px" height="20px">
                                    </a>
                                </td>
                                @if ($application->challan == null)
                                    <td>didn't upload</td>
                                @else
                                    <td>
                                        <a href="{{ asset('storage/challans/' . $application->challan) }}"
                                            target="_blank">
                                            <img src="{{ asset('storage/challans/' . $application->challan) }}"
                                                class="rounded-circle" alt="cnic picture" width="30px" height="20px">
                                        </a>
                                    </td>
                                @endif
                                <td>
                                    {{$application->status}}
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#accept" wire:click="edit({{ $application->id }})")><i
                                            class="fa-solid fa-check-to-slot"></i></button>
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#cancel" wire:click="edit({{ $application->id }})"><i
                                            class="fa-solid fa-rectangle-xmark"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{ $applications->links() }}
    </div>

    <!-- Accept Modal -->
    <div wire:ignore.self class="modal fade" id="accept" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Accept Application</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="close_modal"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to accept this application</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal"
                        wire:click="close_modal">NO</button>
                    <button type="submit" class="btn btn-danger" wire:click="accept">Yes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- cancel Modal -->
    <div wire:ignore.self class="modal fade" id="cancel" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reject Application</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="close_modal"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to reject this application</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal"
                        wire:click="close_modal">NO</button>
                    <button type="submit" class="btn btn-danger" wire:click="reject">Yes</button>
                </div>
            </div>
        </div>
    </div>

</main>


<script>
    window.addEventListener('close-modal', event => {
        $('#accept').modal('hide');
        $('#cancel').modal('hide');
    })
</script>
