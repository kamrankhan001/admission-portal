@extends('layouts.app')
@section('title', 'My Application')

@section('passwordchange')
    @include('interface.dashboard.navbar')

    <div class="container my-4">
        <div>
            <h3>Your Applications</h3>
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif

            @if ($empty)    
                @foreach ($applications as $application)
                    <div class="card my-4">
                        <div class="card-header bg-dark">
                            <h3 class="text-light">{{ $application->program }}</h3>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Candidate Name</th>
                                        <td>{{ $candidate->first_name }} {{ $candidate->last_name }}</td>
                                        <th>Apply For</th>
                                        <td>{{ $application->program }}</td>
                                    </tr>
                                    <tr>
                                        <th>Apply Date</th>
                                        <td>{{ date('M/d/y', strtotime($application->created_at)) }}</td>
                                        <th>Challan Status</th>
                                        <td>{{ $application->status }}</td>

                                    </tr>
                                    <tr>
                                        <th>Download Challan</th>
                                        <td>
                                            <a href="{{ route('challan_download', ['program' => $application->program]) }}" class="btn btn-light"><i
                                                    class="fa-solid fa-download"></i></a>
                                        </td>
                                        <th>Upload Challan</th>
                                        @if ($application->challan == null) 
                                            <td>
                                                <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                                    data-bs-target="#upload" data-id={{ $application->id }}>
                                                    <i class="fa-solid fa-upload"></i>
                                                </button>
                                            </td>
                                        @else
                                            <td>
                                                <a href="{{asset('storage/challans/'.$application->challan)}}" target="_blank" class="btn">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                            </td>
                                        @endif
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-end">
                                <a href="{{ route('candidate_info', ['id' => $application->user_id, 'program' => $application->program]) }}"
                                    class="btn btn-dark"><i class="fa-solid fa-file-pdf"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="my-4 text-center alert alert-warning">
                    <h1>You didn't apply in any program yet 🙂</h1>
                </div>
            @endif

        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="upload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Challan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('challan_upload')}}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id">
                        <input type="file" name="challan" id="challan" class="form-control">
                        @error('challan')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-dark">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $('#upload').on('show.bs.modal', function(e) {

            //get data-id attribute of the clicked element
            var id = $(e.relatedTarget).data('id');

            //populate the textbox
            $(e.currentTarget).find('input[name="id"]').val(id);
        });
    </script>
@endsection
