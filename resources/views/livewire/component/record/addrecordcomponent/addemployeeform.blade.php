<form wire:submit.prevent="employeeForm" method="POST" enctype="multipart/form-data">
    @csrf
    @if (session()->has('success_message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="tio-checkmark-circle mt-1 mr-1"></i> {{ session('success_message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="tio-clear tio-lg"></i>
        </button>
    </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h5 class="card-header-title">Personal Information</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <!-- End Form Group -->
                    <div class="form-group">
                        <label class="col col-form-label input-label">Employment
                            Date</label>
                        <div class="col-sm-12">
                            <!-- Form Group -->
                            <input type="date" class="form-control {{ $errors->has('date') ? ' is-invalid' : '' }}"
                                placeholder="Select dates" name="date">
                            <!-- End Form Group -->
                            @if ($errors->has('date'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('date') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="organizationLabel1" class="col col-form-label input-label">Employee
                            Identification Number</label>

                        <div class="col-sm-12">
                            <input wire:model="employee_number" type="text"
                                class="form-control {{ $errors->has('employee_number') ? ' is-invalid' : '' }}"
                                name="employee_number" id="Identification Numbe" placeholder="Identification Number"
                                aria-label="Htmlstream">
                            <div>
                                <div class="col-sm-12">
                                    <small>{{ $employee_number }}</small>
                                </div>
                            </div>
                            @if ($errors->has('employee_number'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('employee_number') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="firstname" class="col col-form-label input-label">First name</label>

                        <div class="col-sm-12">
                            <input wire:model="firstname" type="text"
                                class="form-control {{ $errors->has('firstname') ? ' is-invalid' : '' }}"
                                name="firstname" id="firstname" placeholder="first name" aria-label="firstname">
                            <div class="col-sm-12">
                                <small>{{ $firstname }}</small>
                            </div>
                            @if ($errors->has('firstname'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('firstname') }}</strong>
                            </span>
                            @endif
                        </div>

                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="middlename" class="col col-form-label input-label">Middle name</label>

                        <div class="col-sm-12">
                            <input wire:model="middlename" type="text"
                                class="form-control {{ $errors->has('middlename') ? ' is-invalid' : '' }}"
                                name="middlename" id="middlename" placeholder="middle name" aria-label="middlename">
                            <div class="col-sm-12">
                                <small>{{ $middlename }}</small>
                            </div>
                            @if ($errors->has('middlename'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('middlename') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="lastname" class="col col-form-label input-label">Last name</label>

                        <div class="col-sm-12">
                            <input wire:model="lastname" type="text"
                                class="form-control {{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname"
                                id="lastname" placeholder="last name" aria-label="lastname">
                            <div class="col-sm-12">
                                <small>{{ $lastname }}</small>
                            </div>
                            @if ($errors->has('lastname'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('lastname') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="suffix" class="col col-form-label input-label">Suffix</label>

                        <div class="col-sm-12">
                            <input wire:model="suffix" type="text" class="form-control" name="suffix" id="suffix"
                                placeholder="suffix" aria-label="suffix">
                            <div class="col-sm-12">
                                <small>{{ $suffix }}</small>
                            </div>
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="emailLabel" class="col col-form-label input-label">Email <span
                                class="input-label-secondary">(Optional)</span></label>


                        <div class="col-sm-12">
                            <input wire:model="email" type="email" class="form-control" name="email" id="emailLabel"
                                placeholder="yourname@example.com" aria-label="clarice@example.com">
                            <div class="col-sm-12">
                                <small>{{ $email }}</small>
                            </div>
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="emailLabel" class="col col-form-label input-label">Address</label>

                        <div class="col-sm-12">
                            <input wire:model="address" type="text"
                                class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" name="address"
                                id="AddressLabel" placeholder="Address" aria-label="Address">
                            <div class="col-sm-12">
                                <small>{{ $address }}</small>
                            </div>
                            @if ($errors->has('address'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <!-- End Form Group -->
                </div>
                <div class="col-md-6">
                    <!-- Form Group -->
                    <div class="js-add-field  form-group" data-hs-add-field-options='{
                                            "template": "#addPhoneFieldTemplate",
                                            "container": "#addPhoneFieldContainer",
                                            "defaultCreated": 0
                                        }'>
                        <label for="phoneLabel" class="col col-form-label input-label">Phone <span
                                class="input-label-secondary">(Optional)</span></label>

                        <div class="col-sm-12">
                            <div class="input-group input-group-sm-down-break align-items-center">
                                <input wire:model="contact_number" type="text" class="js-masked-input form-control"
                                    name="contact_number" id="phoneLabel" placeholder="+xx xxx-xxxx-xx"
                                    aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                                                    "template": "+63 0000000000"
                                                    }'>
                            </div>
                            <div class="col-sm-12">
                                <small>{{ $contact_number }}</small>
                            </div>
                            <!-- Container For Input Field -->
                            <div id="addPhoneFieldContainer"></div>
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="organizationLabel2" class="col col-form-label input-label">Emergency
                            Contact
                            Person</label>

                        <!-- Ask HR if emergency contact person is required for the entry -->
                        <div class="col-sm-12">
                            <input wire:model="emergency_contact_person" type="text"
                                class="form-control {{ $errors->has('emergency_contact_person') ? ' is-invalid' : '' }}"
                                name="emergency_contact_person" id="organizationLabel2"
                                placeholder="Emergency Contact Person" aria-label="Htmlstream">
                            <div class="col-sm-12">
                                <small>{{ $emergency_contact_person }}</small>
                            </div>
                            @if ($errors->has('emergency_contact_person'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('emergency_contact_person') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="organizationLabel3" class="col col-form-label input-label">Emergency
                            Contact
                            #</label>

                        <div class="col-sm-12">
                            <input wire:model="ecp_contact_number" type="text"
                                class="form-control {{ $errors->has('ecp_contact_number') ? ' is-invalid' : '' }}"
                                name="ecp_contact_number" id="organizationLabel3" placeholder="+xx xxx-xxxx-xx"
                                aria-label="Htmlstream">
                            <div class="col-sm-12">
                                <small>{{ $ecp_contact_number }}</small>
                            </div>
                            @if ($errors->has('ecp_contact_number'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('ecp_contact_number') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="emailLabel" class="col col-form-label input-label"> Emergency
                            Contact Person Email</label>

                        <div class="col-sm-12">
                            <input wire:model="ecp_email" type="email"
                                class="form-control {{ $errors->has('ecp_email') ? ' is-invalid' : '' }}"
                                name="ecp_email" id="ecpemailLabel" placeholder="yourname@example.com"
                                aria-label="clarice@example.com">
                            <div class="col-sm-12">
                                <small>{{ $ecp_email }}</small>
                            </div>
                        </div>
                    </div>
                    <!-- End Form Group -->
                    <div class="form-group">
                        <label class="col col-form-label input-label">Position</label>
                        <div class="col-sm-12">
                            <!-- Select -->
                            <div class=" dldl" wire:ignore>
                                <div>
                                    <select wire:model="positions_id" data-pharaonic="select2"
                                        data-component-id="{{ $this->id }}">
                                        <option>Select Position</option>
                                        @foreach($positions as $position)
                                        <option value="{{$position->id}}">{{ $position->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- End Select -->
                        </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="form-group">
                        <label class="col col-form-label input-label">Office</label>
                        <div class="col-sm-12">
                            <!-- Select -->
                            <div class=" dldl" wire:ignore>
                                <div>
                                    <select wire:model="offices_id" data-pharaonic="select2"
                                        data-component-id="{{ $this->id }}">
                                        <option>Select offices</option>
                                        @foreach($offices as $office)
                                        <option value="{{$office->id}}">{{ $office->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- End Select -->
                        </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="form-group">
                        <label class="col col-form-label input-label">Classification</label>
                        <div class="col-sm-12">
                            <!-- Select -->
                            <div class=" dldl" wire:ignore>
                                <div>
                                    <select wire:model="classifications_id" data-pharaonic="select2"
                                        data-component-id="{{ $this->id }}">
                                        <option>Select Classification</option>
                                        @foreach($classifications as $classification)
                                        <option value="{{$classification->id}}">{{ $classification->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- End Select -->
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label class="col col-form-label input-label">Status</label>
                        <div class="col-sm-12">
                            <!-- Select -->
                            <div class=" dldl" wire:ignore>
                                <div>
                                    <select wire:model="employment_statuses_id" data-pharaonic="select2"
                                        data-component-id="{{ $this->id }}">
                                        <option>Select Employment Status</option>
                                        @foreach($employmentstatuses as $employmentstatus)
                                        <option value="{{$employmentstatus->id}}">{{ $employmentstatus->name
                                            }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- End Select -->
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
            </div>
            <div class="col-md-12" align="right">
                <button class="btn btn-primary" type="submit">save</button>
            </div>
        </div>
    </div>
</form>