<div wire:ignore class="modal fade" id="editrecordmodal" tabindex="-1" role="dialog" aria-labelledby="editRecordModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form wire:submit.prevent="editEmployee" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editeditRecordModal">Edit Employee</h5>
                    <button type="button" class="btn btn-xs btn-icon btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
                        <i class="tio-clear tio-lg"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form Group -->
                    <div class="row form-group">
                        <label class="col-sm-3 col-form-label input-label">Image</label>
                        <div class="col-sm-9">
                            <div class="d-flex align-items-center">
                                <!-- Avatar -->
                                <label class="avatar avatar-xl avatar-circle avatar-uploader mr-5" for="editavatarUploader">
                                    <img id="editavatarImg" class="avatar-img" src="{{ asset('assets/img/160x160/img1.jpg') }}" alt="Image Description">
                                    <input wire:model="image" type="file" name="image" class="js-file-attach avatar-uploader-input" id="editavatarUploader" data-hs-file-attach-options='{
                                                        "textTarget": "#editavatarImg",
                                                        "mode": "image",
                                                        "targetAttr": "src",
                                                        "resetTarget": ".js-file-attach-reset-img",
                                                        "resetImg": "/assets/img/160x160/img1.jpg"
                                                    }'>
                                    <span class="avatar-uploader-trigger">
                                        <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
                                    </span>
                                </label>
                                <!-- End Avatar -->
                                <button type="button" class="js-file-attach-reset-img btn btn-white">Delete</button>
                            </div>
                            <div class="col-sm-12">
                                <!-- <small>{{ $image }}</small> -->
                            </div>
                        </div>
                    </div>
                    <!-- End Form Group -->
                    <div class="row form-group">
                        <label class="col-sm-3 col-form-label input-label">Employment
                            Date</label>
                        <div class="col-sm-9">
                            <!-- Form Group -->
                            <input wire:model="employment_date" type="date" class="form-control {{ $errors->has('employment_date') ? ' is-invalid' : '' }}" placeholder="Select dates" name="employment_date">
                            @if ($errors->has('employment_date'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('employment_date') }}</strong>
                            </span>
                            @endif
                            <!-- End Form Group -->
                        </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row form-group">
                        <label for="organizationLabel1" class="col-sm-3 col-form-label input-label">Employee
                            Identification Number</label>

                        <div class="col-sm-9">
                            <input wire:model="employee_number" type="text" class="form-control {{ $errors->has('employee_number') ? ' is-invalid' : '' }}" name="employee_number" id="editIdentification Numbe" placeholder="Identification Number" aria-label="Htmlstream">
                            @if ($errors->has('employee_number'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('employee_number') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row form-group">
                        <label for="editfirstname" class="col-sm-3 col-form-label input-label">First name</label>

                        <div class="col-sm-9">
                            <input wire:model="firstname" type="text" class="form-control" name="editfirstname" id="editfirstname" placeholder="first name" aria-label="editfirstname">
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="row form-group">
                        <label for="editmiddlename" class="col-sm-3 col-form-label input-label">Middle name</label>

                        <div class="col-sm-9">
                            <input wire:model="middlename" type="text" class="form-control" name="editmiddlename" id="editmiddlename" placeholder="middle name" aria-label="editmiddlename">
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="row form-group">
                        <label for="editlastname" class="col-sm-3 col-form-label input-label">Last name</label>

                        <div class="col-sm-9">
                            <input wire:model="lastname" type="text" class="form-control" name="editlastname" id="editlastname" placeholder="last name" aria-label="editlastname">
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="row form-group">
                        <label for="editsuffix" class="col-sm-3 col-form-label input-label">Suffix</label>

                        <div class="col-sm-9">
                            <input wire:model="suffix" type="text" class="form-control" name="editsuffix" id="editsuffix" placeholder="suffix" aria-label="editsuffix">
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="row form-group">
                        <label for="emailLabel" class="col-sm-3 col-form-label input-label">Email
                            <span class="input-label-secondary">(Optional)</span></label>


                        <div class="col-sm-9">
                            <input wire:model="email" type="email" class="form-control" name="email" id="editemailLabel" placeholder="yourname@example.com" aria-label="clarice@example.com">
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="row form-group">
                        <label for="emailLabel" class="col-sm-3 col-form-label input-label">Address</label>

                        <div class="col-sm-9">
                            <input wire:model="address" type="text" class="form-control" name="Address" id="editAddressLabel" placeholder="Address" aria-label="Address">
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="js-add-field row form-group" data-hs-add-field-options='{
                                            "template": "#addPhoneFieldTemplate",
                                            "container": "#addPhoneFieldContainer",
                                            "defaultCreated": 0
                                        }'>
                        <label for="phoneLabel" class="col-sm-3 col-form-label input-label">Phone
                            <span class="input-label-secondary">(Optional)</span></label>

                        <div class="col-sm-9">
                            <div class="input-group input-group-sm-down-break align-items-center">
                                <input wire:model="contact_number" type="text" class="js-masked-input form-control" name="phone" id="editphoneLabel" placeholder="+xx xxx-xxxx-xx" aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                                                    "template": "+63 0000000000"
                                                    }'>
                            </div>
                            <!-- Container For Input Field -->
                            <div id="editaddPhoneFieldContainer"></div>
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="row form-group">
                        <label for="organizationLabel2" class="col-sm-3 col-form-label input-label">Emergency
                            Contact
                            Person</label>

                        <div class="col-sm-9">
                            <input wire:model="emergency_contact_person" type="text" class="form-control" name="emergency_contact_person" id="editorganizationLabel2" placeholder="Emergency Contact Person" aria-label="Htmlstream">
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="row form-group">
                        <label for="organizationLabel3" class="col-sm-3 col-form-label input-label">Emergency
                            Contact
                            #</label>

                        <div class="col-sm-9">
                            <input wire:model="ecp_contact_number" type="text" class="form-control" name="ecp_contact_number" id="editorganizationLabel3" placeholder="+xx xxx-xxxx-xx" aria-label="Htmlstream">
                        </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row form-group">
                        <label for="emailLabel" class="col-sm-3 col-form-label input-label">
                            Emergency
                            Contact Person Email</label>

                        <div class="col-sm-9">
                            <input wire:model="ecp_email" type="email" class="form-control" name="ecp_email" id="editecpemailLabel" placeholder="yourname@example.com" aria-label="clarice@example.com">
                        </div>
                    </div>
                    <!-- End Form Group -->
                    <div class="row form-group">
                        <label class="col-sm-3 col-form-label input-label">201
                            File</label>
                        <div class="col-sm-9">
                            <!-- File Attachment Input -->
                            <label class="custom-file-boxed" for="fileAttachmentLabelModalEg">
                                <span id="fileAttachmentInputModalEg">Browse your device and upload documents</span>
                                <small class="d-block text-muted">Maximum file size 10MB</small>

                                <input wire:model="file_document" id="fileAttachmentLabelModalEg" name="custom-file-boxed" type="file" class="js-file-attach custom-file-boxed-input" data-hs-file-attach-options='{
                                "textTarget": "#fileAttachmentInputModalEg"
                            }'>
                            </label>
                            <!-- End File Attachment Input -->
                        </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row form-group">
                        <label class="col-sm-3 col-form-label input-label">Position</label>
                        <div class="col-sm-9">
                            <!-- Select -->
                            <div class=" dldl">
                                <div>
                                    <select wire:model="positions_id" class="custom-select">
                                        @foreach($positions as $position)
                                        <option key="{{ $position->id}}" value="{{ $position->id }}">{{ $position->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                {{ $positions_id }}
                            </div>
                            <!-- End Select -->
                        </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row form-group">
                        <label class="col-sm-3 col-form-label input-label">Office</label>
                        <div class="col-sm-9">
                            <!-- Select -->
                            <div class=" dldl">
                                <div wire:ignore>
                                    <select wire:model="offices_id" class="custom-select" data-component-id="edit{{ $this->id }}">
                                        @foreach($offices as $office)
                                        <option value="{{$office->id}}">{{ $office->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                {{ $offices_id }}
                            </div>
                            <!-- End Select -->
                        </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row form-group">
                        <label class="col-sm-3 col-form-label input-label">Classification</label>
                        <div class="col-sm-9">
                            <!-- Select -->
                            <div class=" dldl">
                                <div wire:ignore>
                                    <select wire:model="classifications_id" class="custom-select" data-component-id="edit{{ $this->id }}">
                                        @foreach($classifications as $classification)
                                        <option value="{{$classification->id}}">{{
                                            $classification->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                {{ $classifications_id }}
                            </div>
                            <!-- End Select -->
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="row form-group">
                        <label class="col-sm-3 col-form-label input-label">Status</label>
                        <div class="col-sm-9">
                            <!-- Select -->
                            <div class=" dldl">
                                <div wire:ignore>
                                    <select wire:model="employment_statuses_id" class="custom-select" data-component-id="edit{{ $this->id }}">
                                    @foreach($employment_statuses as $employmentstatus)
                                        <option value="{{$employmentstatus->id}}">{{
                                            $employmentstatus->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                {{ $employment_statuses_id }}
                            </div>
                            <!-- End Select -->
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button wire:click="addEmployeeTableRefresh" type="submit" class="btn btn-primary">Save
                        changes</button>
                </div>
        </form>
    </div>
</div>