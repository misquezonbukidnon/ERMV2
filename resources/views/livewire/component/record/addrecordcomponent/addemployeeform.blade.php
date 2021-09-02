        <form class="js-step-form" data-hs-step-form-options='{
                            "progressSelector": "#addUserStepFormProgress",
                            "stepsSelector": "#addUserStepFormContent",
                            "endSelector": "#addUserFinishBtn",
                            "isValidate": false
                        }'>
            <div class="row justify-content-lg-center">
                <div class="col-lg-8">
                    <!-- Step -->
                    <ul id="addUserStepFormProgress"
                        class="js-step-progress step step-sm step-icon-sm step step-inline step-item-between mb-3 mb-md-5">
                        <li class="step-item">
                            <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                                                "targetSelector": "#addUserStepProfile"
                                                }'>
                                <span class="step-icon step-icon-soft-dark">1</span>
                                <div class="step-content">
                                    <span class="step-title">Personal Information</span>
                                </div>
                            </a>
                        </li>

                        <li class="step-item">
                            <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                                                "targetSelector": "#addUserStepBillingAddress"
                                                }'>
                                <span class="step-icon step-icon-soft-dark">2</span>
                                <div class="step-content">
                                    <span class="step-title">Employment Information</span>
                                </div>
                            </a>
                        </li>

                        <li class="step-item">
                            <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                                                "targetSelector": "#addUserStepConfirmation"
                                                }'>
                                <span class="step-icon step-icon-soft-dark">3</span>
                                <div class="step-content">
                                    <span class="step-title">Confirmation</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- End Step -->

                    <!-- Content Step Form -->
                    <div id="addUserStepFormContent">
                        <!-- Card -->
                        <div id="addUserStepProfile" class="card card-lg active">
                            <!-- Body -->
                            <div class="card-body">
                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label class="col-sm-3 col-form-label input-label">Image</label>

                                    <div class="col-sm-9">
                                        <div class="d-flex align-items-center">
                                            <!-- Avatar -->
                                            <label class="avatar avatar-xl avatar-circle avatar-uploader mr-5"
                                                for="avatarUploader">
                                                <img id="avatarImg" class="avatar-img"
                                                    src="{{ asset('assets/img/160x160/img1.jpg') }}"
                                                    alt="Image Description">

                                                <input type="file" name="image"
                                                    class="js-file-attach avatar-uploader-input" id="avatarUploader"
                                                    data-hs-file-attach-options='{
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

                                            <button type="button"
                                                class="js-file-attach-reset-img btn btn-white">Delete</button>
                                        </div>
                                        <div class="col-sm-12">
                                            <!-- <small>{{ $image }}</small> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->
                                <!-- End Form Group -->
                                <div class="row form-group">
                                    <label for="locationLabel" class="col-sm-3 col-form-label input-label">Employment
                                        Date</label>
                                    <div class="col-sm-9">
                                        <!-- Form Group -->
                                        <input type="text" class="js-flatpickr form-control flatpickr-custom"
                                            placeholder="Select dates" data-hs-flatpickr-options='{
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
                                        <input wire:model="employee_number" type="text" class="form-control"
                                            name="employee_number" id="Identification Numbe"
                                            placeholder="Identification Number" aria-label="Htmlstream">
                                        <div class="col-sm-12">
                                            <small>{{ $employee_number }}</small>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->
                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Full name <i
                                            class="tio-help-outlined text-body ml-1" data-toggle="tooltip"
                                            data-placement="top"
                                            title="Displayed on public forums, such as Front."></i></label>

                                    <div class="col-sm-9">
                                        <div class="input-group input-group-sm-down-break">
                                            <input wire:model="firstname" type="text" class="form-control"
                                                name="firstname" id="firstnameLabel" placeholder="Firstname"
                                                aria-label="Clarice">
                                            <input wire:model="middlename" type="text" class="form-control"
                                                name="middlename" id="middlenameLabel" placeholder="Middlename"
                                                aria-label="Boone">
                                            <input wire:model="lastname" type="text" class="form-control"
                                                name="lastname" id="lastnameLabel" placeholder="Lastname"
                                                aria-label="Boone">
                                            <input wire:model="suffix" type="text" class="form-control" name="suffix"
                                                id="SuffixLabel" placeholder="Suffix" aria-label="Boone">
                                        </div>
                                        <div class="col-sm-12">
                                            <small>{{ $firstname }}</small>
                                            <small>{{ $middlename }}</small>
                                            <small>{{ $lastname }}</small>
                                            <small>{{ $suffix }}</small>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="emailLabel" class="col-sm-3 col-form-label input-label">Email <span
                                            class="input-label-secondary">(Optional)</span></label>


                                    <div class="col-sm-9">
                                        <input wire:model="email" type="email" class="form-control" name="email"
                                            id="emailLabel" placeholder="yourname@example.com"
                                            aria-label="clarice@example.com">
                                        <div class="col-sm-12">
                                            <small>{{ $email }}</small>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="emailLabel" class="col-sm-3 col-form-label input-label">Address</label>

                                    <div class="col-sm-9">
                                        <input wire:model="address" type="text" class="form-control" name="Address"
                                            id="AddressLabel" placeholder="Address" aria-label="Address">
                                        <div class="col-sm-12">
                                            <small>{{ $address }}</small>
                                        </div>
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
                                            <input wire:model="contact_number" type="text"
                                                class="js-masked-input form-control" name="phone" id="phoneLabel"
                                                placeholder="+xx xxx-xxxx-xx" aria-label="+x(xxx)xxx-xx-xx"
                                                data-hs-mask-options='{
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
                                <div class="row form-group">
                                    <label for="organizationLabel2"
                                        class="col-sm-3 col-form-label input-label">Emergency
                                        Contact
                                        Person</label>

                                    <div class="col-sm-9">
                                        <input wire:model="emergency_contact_person" type="text" class="form-control"
                                            name="emergency_contact_person" id="organizationLabel2"
                                            placeholder="Emergency Contact Person" aria-label="Htmlstream">
                                        <div class="col-sm-12">
                                            <small>{{ $emergency_contact_person }}</small>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="organizationLabel3"
                                        class="col-sm-3 col-form-label input-label">Emergency
                                        Contact
                                        #</label>

                                    <div class="col-sm-9">
                                        <input wire:model="ecp_contact_number" type="text" class="form-control"
                                            name="ecp_contact_number" id="organizationLabel3"
                                            placeholder="+xx xxx-xxxx-xx" aria-label="Htmlstream">
                                        <div class="col-sm-12">
                                            <small>{{ $ecp_contact_number }}</small>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->
                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="emailLabel" class="col-sm-3 col-form-label input-label"> Emergency
                                        Contact Person Email</label>

                                    <div class="col-sm-9">
                                        <input wire:model="ecp_email" type="email" class="form-control" name="ecp_email"
                                            id="ecpemailLabel" placeholder="yourname@example.com"
                                            aria-label="clarice@example.com">
                                        <div class="col-sm-12">
                                            <small>{{ $ecp_email }}</small>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                            </div>
                            <!-- End Body -->

                            <!-- Footer -->
                            <div class="card-footer d-flex justify-content-end align-items-center">
                                <button type="button" class="btn btn-primary" data-hs-step-form-next-options='{
                              "targetSelector": "#addUserStepBillingAddress"
                            }'>
                                    Next <i class="tio-chevron-right"></i>
                                </button>
                            </div>
                            <!-- End Footer -->
                        </div>
                        <!-- End Card -->

                        <div id="addUserStepBillingAddress" class="card card-lg" style="display: none;">
                            <!-- Body -->
                            <div wire:ignore class="card-body">
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
                                                    class="js-file-attach custom-file-boxed-input"
                                                    data-hs-file-attach-options='{
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
                                    <label for="locationLabel"
                                        class="col-sm-3 col-form-label input-label">Position</label>
                                    <div class="col-sm-9">
                                        <!-- Select -->
                                        <div class="mb-3">
                                            <select class="js-select2-custom" id="locationLabel"
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
                                    <label for="locationLabel"
                                        class="col-sm-3 col-form-label input-label">Office</label>
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
                                    <label for="locationLabel"
                                        class="col-sm-3 col-form-label input-label">Classification</label>
                                    <div class="col-sm-9">
                                        <!-- Select -->
                                        <div class="mb-3">
                                            <select class="js-select2-custom" id="Classification"
                                                data-hs-select2-options='{
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
                                    <label for="locationLabel"
                                        class="col-sm-3 col-form-label input-label">Status</label>
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

                            </div>
                            <!-- End Body -->

                            <!-- Footer -->
                            <div class="card-footer d-flex align-items-center">
                                <button type="button" class="btn btn-ghost-secondary" data-hs-step-form-prev-options='{
                                                "targetSelector": "#addUserStepProfile"
                                            }'>
                                    <i class="tio-chevron-left"></i> Previous step
                                </button>

                                <div class="ml-auto">
                                    <button type="button" class="btn btn-primary" data-hs-step-form-next-options='{
                                                    "targetSelector": "#addUserStepConfirmation"
                                                }'>
                                        Next <i class="tio-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- End Footer -->
                        </div>

                        <div id="addUserStepConfirmation" class="card card-lg" style="display: none;">
                            <!-- Profile Cover -->
                            <div class="profile-cover">
                                <div class="profile-cover-img-wrapper">
                                    <img class="profile-cover-img" src="{{ asset('assets/img/1920x400/img3.jpg') }}"
                                        alt="Image Description">
                                </div>
                            </div>
                            <!-- End Profile Cover -->

                            <!-- Avatar -->
                            <div class="avatar avatar-xxl avatar-circle avatar-border-lg profile-cover-avatar">
                                <img class="avatar-img" src="{{asset('assets/img/160x160/img3.jpg')}}"
                                    alt="Image Description">
                            </div>
                            <!-- End Avatar -->

                            <!-- Body -->
                            <div class="card-body">
                                <dl class="row">
                                    <dt class="col-sm-6 text-sm-right">Employee Identification Number:</dt>
                                    <dd class="col-sm-6">091221</dd>
                                    <dt class="col-sm-6 text-sm-right">Full name:</dt>
                                    <dd class="col-sm-6">{{ $firstname }} {{ $middlename }} {{ $lastname }} {{ $suffix}}
                                    </dd>

                                    <dt class="col-sm-6 text-sm-right">Email:</dt>
                                    <dd class="col-sm-6">ivankunnn.lguquezon.com</dd>

                                    <dt class="col-sm-6 text-sm-right">Phone:</dt>
                                    <dd class="col-sm-6">+1 (609) 972-22-22</dd>

                                    <dt class="col-sm-6 text-sm-right">Address:</dt>
                                    <dd class="col-sm-6">Address</dd>

                                    <dt class="col-sm-6 text-sm-right">Emergency Contact Person:</dt>
                                    <dd class="col-sm-6">Ivan Nacion</dd>

                                    <dt class="col-sm-6 text-sm-right">Emergency Contact #:</dt>
                                    <dd class="col-sm-6">6969696</dd>

                                    <dt class="col-sm-6 text-sm-right">Emergency Contact Person Email:</dt>
                                    <dd class="col-sm-6">Email.gmail.com</dd>

                                    <dt class="col-sm-6 text-sm-right">Position:</dt>
                                    <dd class="col-sm-6">Doggie</dd>

                                    <dt class="col-sm-6 text-sm-right">Office:</dt>
                                    <dd class="col-sm-6">Manangement Information System</dd>

                                    <dt class="col-sm-6 text-sm-right">Classification:</dt>
                                    <dd class="col-sm-6">Warrior</dd>

                                    <dt class="col-sm-6 text-sm-right">Status:</dt>
                                    <dd class="col-sm-6">Nacional</dd>

                                    <dt class="col-sm-6 text-sm-right">Employment Date:</dt>
                                    <dd class="col-sm-6">12/12/12 sale</dd>



                                </dl>
                                <!-- End Row -->
                            </div>
                            <!-- End Body -->

                            <!-- Footer -->
                            <div class="card-footer d-sm-flex align-items-sm-center">
                                <button type="button" class="btn btn-ghost-secondary mb-2 mb-sm-0"
                                    data-hs-step-form-prev-options='{
                            "targetSelector": "#addUserStepBillingAddress"
                        }'>
                                    <i class="tio-chevron-left"></i> Previous step
                                </button>

                                <div class="ml-auto">
                                    <button id="addUserFinishBtn" type="button" class="btn btn-primary">Add
                                        user</button>
                                </div>
                            </div>
                            <!-- End Footer -->
                        </div>
                    </div>
                    <!-- End Content Step Form -->

                    <!-- Message Body -->
                    <div id="successMessageContent" style="display:none;">
                        <div class="text-center">
                            <img class="img-fluid mb-3" src="../assets/svg/illustrations/hi-five.svg"
                                alt="Image Description" style="max-width: 15rem;">

                            <div class="mb-4">
                                <h2>Successful!</h2>
                                <p>New <span class="font-weight-bold text-dark">Ella Lauda</span> user
                                    has been successfully created.</p>
                            </div>

                            <div class="d-flex justify-content-center">
                                <a class="btn btn-white mr-3" href="users.html">
                                    <i class="tio-chevron-left ml-1"></i> Back to users
                                </a>
                                <a class="btn btn-primary" href="users-add-user.html">
                                    <i class="tio-user-add mr-1"></i> Add new user
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Message Body -->
                </div>
            </div>
            <!-- End Row -->
        </form>