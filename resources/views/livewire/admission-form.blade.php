<div class="my-4 container">
    @if (!$rolled)
        <div class="card">
            <div class="card-header bg-dark text-white">
                {{ $degree }}
            </div>
            <div class="card-body">

                <div class="row my-3 setup-content {{ $currentStep != 1 ? 'display-none' : '' }}" id="step-1">
                    <input type="hidden" wire:model="degree" value="{{ $degree }}">
                    <div class="col-md-4 col-12 mb-3">
                        <div class="form-group">
                            <label class="form-label" for="father_name">Father Name</label>
                            <input type="text" wire:model="father_name" class="form-control" id="father_name"
                                placeholder="Father Name">
                            @error('father_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-12 mb-3">
                        <div class="form-group">
                            <label for="father_cnic" class="form-label">Father CNIC</label>
                            <input type="text" wire:model="father_cnic" class="form-control" id="father_cnic"
                                placeholder="Father CNIC" />
                            @error('father_cnic')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-12 mb-3">
                        <div class="form-group">
                            <label for="father_mobile_number" class="form-label">Father Mobile Number</label>
                            <input type="text" wire:model="father_mobile_number" class="form-control"
                                id="father_mobile_number" placeholder="Father Mobile Number">
                            @error('father_mobile_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-12 mb-3">
                        <div class="form-group">
                            <label for="father_occupation" class="form-label">Father Occupation</label>
                            <input type="text" wire:model="father_occupation" class="form-control"
                                id="father_occupation" placeholder="Father Occupation">
                            @error('father_occupation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-12 mb-3">
                        <div class="form-group">
                            <label for="father_salary" class="form-label">Father Salary</label>
                            <input type="text" wire:model="father_salary" class="form-control" id="father_salary"
                                placeholder="Father Salary">
                            @error('father_salary')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-12 mb-3">
                        <div class="form-group">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" wire:model="address" class="form-control" id="address"
                                placeholder="Address">
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-12 mb-3">
                        <div class="form-group">
                            <label for="hafiz_quran" class="form-label">Hafiz Quran (Candidate)</label>
                            <select wire:model="hafiz_quran" id="hafiz_quran" class="form-control">
                                <option value="">Hafiz Quran</option>
                                <option value="no">No</option>
                                <option value="yes">Yes</option>
                            </select>
                            @error('hafiz_quran')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-12 mb-3">
                        <div class="form-group">
                            <label for="mobile_number" class="form-label">Mobile Number (Candidate)</label>
                            <input type="text" wire:model="mobile_number" class="form-control" id="mobile_number"
                                placeholder="Mobile Number (Candidate)">
                            @error('mobile_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="float-start">
                            <a href="{{ route('dashboard') }}" class="btn btn-danger">Cancel</a>
                        </div>
                        <div class="float-end">
                            <button class="btn btn-dark nextBtn" wire:click="personalinfo" type="button">Next</button>
                        </div>
                    </div>
                </div>

                <div class="row my-3 setup-content {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">
                    <div class="col-md-4 col-12 mb-3">
                        <div class="form-group">
                            <label for="matriculation" class="form-label">Matriculation</label>
                            <select wire:model="matriculation" id="matriculation" class="form-control">
                                <option value="">Matriculation</option>
                                <option value="biology">With Biology</option>
                                <option value="computer">With Computer</option>
                            </select>
                            @error('matriculation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-12 mb-3">
                        <div class="form-group">
                            <label for="total_marks_metric" class="form-label">Total Marks</label>
                            <input type="text" wire:model="total_marks_metric" id="total_marks_metric"
                                class="form-control" placeholder="Total Marks in Metriculation">
                            @error('total_marks_metric')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-12 mb-3">
                        <div class="form-group">
                            <label for="obtain_marks_metric" class="form-label">Obtain Marks</label>
                            <input type="text" wire:model="obtain_marks_metric" id="obtain_marks_metric"
                                class="form-control" placeholder="Obtain Marks in Metriculation">
                            @error('obtain_marks_metric')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4 col-12 mb-3">
                        <div class="form-group">
                            <label for="intermediate" class="form-label">Intermediate</label>
                            <select wire:model="intermediate" id="intermediate" class="form-control">
                                <option value="">Intermediate</option>
                                <option value="pre engineering">Pre Engineering</option>
                                <option value="medical">Medical</option>
                                <option value="ics">ICS</option>
                            </select>
                            @error('intermediate')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-12 mb-3">
                        <div class="form-group">
                            <label for="total_marks_inter" class="form-label">Total Marks</label>
                            <input type="text" wire:model="total_marks_inter" class="form-control"
                                id="total_marks_inter" placeholder="Total Marks in Intermediate">
                            @error('total_marks_inter')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-12 mb-3">
                        <div class="form-group">
                            <label for="obtain_marks_inter" class="form-label">Obtain Marks</label>
                            <input type="text" wire:model="obtain_marks_inter" class="form-control"
                                id="obtain_marks_inter" placeholder="Obtain Marks in Intermediate">
                            @error('obtain_marks_inter')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="float-start">
                            <a href="{{ route('dashboard') }}" class="btn btn-danger">Cancel</a>
                        </div>
                        <div class="float-end">
                            <button class="btn btn-secondary nextBtn" type="button"
                                wire:click="back(1)">Back</button>
                            <button class="btn btn-dark nextBtn" type="button"
                                wire:click="educationinfo">Next</button>
                        </div>
                    </div>
                </div>

                <div class="row my-3 setup-content {{ $currentStep != 3 ? 'display-none' : '' }}" id="step-3">
                    <p class="my-3">
                        All document must be in <span class="text-danger">jpg png jpeg</span> and maximum size <span
                            class="text-danger">2MB</span>
                    </p>
                    <div class="col-md-6 col-12 mb-3">
                        <div class="form-group">
                            <label for="matriculation_result" class="form-label">Matriculation Result Card</label>
                            <input type="file" wire:model="matriculation_result" id="matriculation_result"
                                class="form-control">
                            @error('matriculation_result')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mb-3">
                        <div class="form-group">
                            <label for="intermediate_result" class="form-label">Intermediate Result Card</label>
                            <input type="file" wire:model="intermediate_result" id="intermediate_result"
                                class="form-control">
                            @error('intermediate_result')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mb-3">
                        <div class="form-group">
                            <label for="cnic_card" class="form-label">CNIC Card</label>
                            <input type="file" wire:model="cnic_card" id="cnic_card" class="form-control">
                            @error('cnic_card')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mb-3">
                        <div class="form-group">
                            <label for="domicile" class="form-label">Domicile</label>
                            <input type="file" wire:model="domicile" id="domicile" class="form-control">
                            @error('domicile')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="float-start">
                            <a href="{{ route('dashboard') }}" class="btn btn-danger">Cancel</a>
                        </div>
                        <div class="float-end">
                            <button class="btn btn-secondary nextBtn" type="button"
                                wire:click="back(2)">Back</button>
                            <button class="btn btn-dark" wire:click="submitForm" type="button">Finish!</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @else
        <div class="container my-5 d-flex justify-content-center">
            <div class="alert alert-success">
                You'r application for admission has been submited successfully.
                <br>
                Please download challan and upload the image of paid challan befor due date
            </div>
        </div>
        <div class="my-3 text-center">
            <a href="{{ route('challan_download', ['program'=> $degree]) }}" class="btn btn-dark">Download Challan</a>
            <a href="{{ route('myapplications') }}" class="btn btn-dark">Application</a>
        </div>
    @endif


</div>
