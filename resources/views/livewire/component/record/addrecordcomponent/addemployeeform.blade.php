<div class="row">
    <div class="col-lg-7">
        <div class="card">
            <div class="card-header">
                <h5 class="card-header-title">Personal Information</h5>
            </div>
            <div class="card-body">
                <div class="row form-group">
                    <label class="col-sm-3 col-form-label input-label">Image</label>

                    <div class="col-sm-9">
                        <div class="d-flex align-items-center">
                            <!-- Avatar -->
                            <label class="avatar avatar-xl avatar-circle avatar-uploader mr-5" for="avatarUploader">
                                <img id="avatarImg" class="avatar-img" src="{{ asset('assets/img/160x160/img1.jpg') }}"
                                    alt="Image Description">

                                <input type="file" name="image" class="js-file-attach avatar-uploader-input"
                                    id="avatarUploader" data-hs-file-attach-options='{
                                                        "textTarget": "#avatarImg",
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

                        </div>
                    </div>
                </div>


                <div class="row form-group">
                    <label for="locationLabel" class="col-sm-3 col-form-label input-label">Employment
                        Date</label>
                    <div class="col-sm-9">
                        <!-- Form Group -->
                        <input type="text" class="js-flatpickr form-control flatpickr-custom" placeholder="Select dates"
                            data-hs-flatpickr-options='{
                                        "dateFormat": "d/m/Y"
                                    }'>
                        <!-- End Form Group -->
                    </div>
                </div>
                <!-- End Form Group -->


                <!-- Form Group -->
                <div class="row form-group">
                    <label for="organizationLabel1" class="col-sm-3 col-form-label input-label">Employee
                        Identification Number</label>

                    <div class="col-sm-9">
                        <input wire:model="employee_number" type="text" class="form-control" name="employee_number"
                            id="Identification Numbe" placeholder="Identification Number" aria-label="Htmlstream">
                    </div>
                </div>
                <!-- End Form Group -->

                <div class="row form-group">
                    <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Full name <i
                            class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top"
                            title="Displayed on public forums, such as Front."></i></label>

                    <div class="col-sm-9">
                        <div class="input-group input-group-sm-down-break">
                            <input wire:model="firstname" type="text" class="form-control" name="firstname"
                                id="firstnameLabel" placeholder="Firstname" aria-label="Clarice">
                            <input wire:model="middlename" type="text" class="form-control" name="middlename"
                                id="middlenameLabel" placeholder="Middlename" aria-label="Boone">
                            <input wire:model="lastname" type="text" class="form-control" name="lastname"
                                id="lastnameLabel" placeholder="Lastname" aria-label="Boone">
                            <input wire:model="suffix" type="text" class="form-control" name="suffix" id="SuffixLabel"
                                placeholder="Suffix" aria-label="Boone">
                        </div>
                    </div>
                </div>
                <!-- End Input Group -->


                <!-- Form Group -->
                <div class="row form-group">
                    <label for="emailLabel" class="col-sm-3 col-form-label input-label">Email <span
                            class="input-label-secondary">(Optional)</span></label>


                    <div class="col-sm-9">
                        <input wire:model="email" type="email" class="form-control" name="email" id="emailLabel"
                            placeholder="yourname@example.com" aria-label="clarice@example.com">
                    </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="row form-group">
                    <label for="emailLabel" class="col-sm-3 col-form-label input-label">Address</label>

                    <div class="col-sm-9">
                        <input wire:model="address" type="text" class="form-control" name="Address" id="AddressLabel"
                            placeholder="Address" aria-label="Address">
                    </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-add-field row form-group" data-hs-add-field-options='{
                                            "template": "#addPhoneFieldTemplate",
                                            "container": "#addPhoneFieldContainer",
                                            "defaultCreated": 0
                                        }'>
                    <label for="phoneLabel" class="col-sm-3 col-form-label input-label">Phone <span
                            class="input-label-secondary">(Optional)</span></label>

                    <div class="col-sm-9">
                        <div class="input-group input-group-sm-down-break align-items-center">
                            <input wire:model="contact_number" type="text" class="js-masked-input form-control"
                                name="phone" id="phoneLabel" placeholder="+xx xxx-xxxx-xx" aria-label="+x(xxx)xxx-xx-xx"
                                data-hs-mask-options='{
                                                    "template": "+63 0000000000"
                                                    }'>
                        </div>
                        <!-- Container For Input Field -->
                        <div id="addPhoneFieldContainer"></div>
                    </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="row form-group">
                    <label for="organizationLabel2" class="col-sm-3 col-form-label input-label">Emergency
                        Contact
                        Person</label>

                    <div class="col-sm-9">
                        <input wire:model="emergency_contact_person" type="text" class="form-control"
                            name="emergency_contact_person" id="organizationLabel2"
                            placeholder="Emergency Contact Person" aria-label="Htmlstream">
                    </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="row form-group">
                    <label for="organizationLabel3" class="col-sm-3 col-form-label input-label">Emergency
                        Contact
                        #</label>

                    <div class="col-sm-9">
                        <input wire:model="ecp_contact_number" type="text" class="form-control"
                            name="ecp_contact_number" id="organizationLabel3" placeholder="+xx xxx-xxxx-xx"
                            aria-label="Htmlstream">
                    </div>
                </div>
                <!-- End Form Group -->
                <!-- Form Group -->
                <div class="row form-group">
                    <label for="emailLabel" class="col-sm-3 col-form-label input-label"> Emergency
                        Contact Person Email</label>

                    <div class="col-sm-9">
                        <input wire:model="ecp_email" type="email" class="form-control" name="ecp_email"
                            id="ecpemailLabel" placeholder="yourname@example.com" aria-label="clarice@example.com">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Employment Information -->
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header">
                <h5 class="card-header-title">Employment Information</h5>
            </div>
            <div class="card-body">
                <!-- Form Group -->
                <div class="row form-group">
                    <label for="locationLabel" class="col-sm-3 col-form-label input-label">201
                        File</label>
                    <div class="col-sm-9">
                        <form>
                            <!-- File Attachment Input -->
                            <label class="custom-file-boxed" for="customFileInputBoxedEg">
                                <span id="customFileBoxedEg">Browse your device and upload
                                    documents</span>
                                <small class="d-block text-muted">Maximum file size 10MB</small>

                                <input id="customFileInputBoxedEg" name="custom-file-boxed" type="file"
                                    class="js-file-attach custom-file-boxed-input" data-hs-file-attach-options='{
                                                    "textTarget": "#customFileBoxedEg"
                                                }'>
                            </label>
                            <!-- End File Attachment Input -->
                        </form>
                    </div>
                </div>
                <!-- End Form Group -->
                <!-- Form Group -->
                <div class="row form-group">
                    <label for="locationLabel" class="col-sm-3 col-form-label input-label">Position</label>
                    <div class="col-sm-9">
                        <!-- Select -->
                        <div class="mb-3">
                            <select name="positions_id" class="js-select2-custom" id="locationLabel"
                                data-hs-select2-options='{
                                            "placeholder": "Select Position"
                                        }'>
                                <option>Select Position</option>
                                @foreach($positions as $position)
                                <option value="{{$position->id}}">{{ $position->name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <!-- End Select -->
                    </div>
                </div>
                <!-- End Form Group -->
                <!-- Form Group -->
                <div class="row form-group">
                    <label for="locationLabel" class="col-sm-3 col-form-label input-label">Office</label>
                    <div class="col-sm-9">
                        <!-- Select -->
                        <div class="mb-3">
                            <select class="js-select2-custom" id="Office" data-hs-select2-options='{
                            "placeholder": "Select Office"
                            }'>
                                <option>Select Office</option>
                                @foreach($offices as $office)
                                <option value="{{$office->id}}">{{ $office->name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <!-- End Select -->
                    </div>
                </div>
                <!-- End Form Group -->
                <!-- Form Group -->
                <div class="row form-group">
                    <label for="locationLabel" class="col-sm-3 col-form-label input-label">Classification</label>
                    <div class="col-sm-9">
                        <!-- Select -->
                        <div class="mb-3">
                            <select class="js-select2-custom" id="Classification" data-hs-select2-options='{
                                            "placeholder": "Select Classification"
                                        }'>
                                <option>Select Classification</option>
                                @foreach($classifications as $classification)
                                <option value="{{$classification->id}}">{{ $classification->name }}
                                </option>
                                @endforeach

                            </select>
                        </div>
                        <!-- End Select -->
                    </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="row form-group">
                    <label for="locationLabel" class="col-sm-3 col-form-label input-label">Status</label>
                    <div class="col-sm-9">
                        <!-- Select -->
                        <div class="mb-3">
                            <select class="js-select2-custom" id="Status" data-hs-select2-options='{
                                            "placeholder": "Select Status"
                                        }'>
                                <option>Select Employment Status</option>
                                @foreach($employmentstatuses as $employmentstatus)
                                <option value="{{$employmentstatus->id}}">{{ $employmentstatus->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <!-- End Select -->
                    </div>
                </div>
                <div class="row justify-content-end form-group">
                    <button type="button" class="btn mr-3 btn-primary">Save</button>
                    <!-- for update function -->
                    <!-- <button type="button" class="btn  mr-3 btn-primary">Update</button> -->
                </div>

            </div>
        </div>
    </div>
</div>