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

                                                <input type="file" class="js-file-attach avatar-uploader-input"
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

                                            <button type="button"
                                                class="js-file-attach-reset-img btn btn-white">Delete</button>
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
                                            <input type="text" class="form-control" name="firstname" id="firstnameLabel"
                                                placeholder="Firstname" aria-label="Clarice">
                                            <input type="text" class="form-control" name="middlename"
                                                id="middlenameLabel" placeholder="Middlename" aria-label="Boone">
                                            <input type="text" class="form-control" name="lastname" id="lastnameLabel"
                                                placeholder="Lastname" aria-label="Boone">
                                            <input type="text" class="form-control" name="Suffix" id="SuffixLabel"
                                                placeholder="Suffix" aria-label="Boone">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="emailLabel" class="col-sm-3 col-form-label input-label">Email</label>

                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="email" id="emailLabel"
                                            placeholder="yourname@example.com" aria-label="clarice@example.com">
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
                                            <input type="text" class="js-masked-input form-control" name="phone"
                                                id="phoneLabel" placeholder="+xx xxx-xxxx-xx"
                                                aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                                                            "template": "+63 0000000000"
                                                            }'>

                                            <div class="input-group-append">
                                                <!-- Select -->
                                                <div class="select2-custom">
                                                    <select class="js-select2-custom" name="phoneSelect"
                                                        data-hs-select2-options='{
                                                                    "minimumResultsForSearch": "Infinity",
                                                                    "dropdownAutoWidth": true,
                                                                    "width": "6rem"
                                                                    }'>
                                                        <option value="Mobile" selected>Mobile</option>
                                                        <option value="Home">Home</option>


                                                    </select>
                                                    <!-- End Select -->
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Container For Input Field -->
                                        <div id="addPhoneFieldContainer"></div>
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Add Phone Input Field -->
                                <div id="addAddressFieldTemplate" style="display: none;">
                                    <div class="input-group-add-field">
                                        <input type="text" class="form-control" data-name="addressLine"
                                            placeholder="Your address" aria-label="Your address">

                                        <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                                            <i class="tio-clear"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Add Phone Input Field -->

                                <!-- Add Phone Input Field -->
                                <div id="addPhoneFieldTemplate" class="input-group-add-field" style="display: none;">
                                    <div class="input-group input-group-sm-down-break align-items-center">
                                        <input type="text" class="js-masked-input form-control"
                                            data-name="additionlPhone" placeholder="+x(xxx)xxx-xx-xx"
                                            aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                                 "template": "+0(000)000-00-00"
                               }'>

                                        <div class="input-group-append">
                                            <!-- Select -->
                                            <div class="select2-custom">
                                                <select class="js-select2-custom-dynamic"
                                                    data-name="additionlPhoneSelect" data-hs-select2-options='{
                                    "minimumResultsForSearch": "Infinity",
                                    "dropdownAutoWidth": true,
                                    "width": "6rem"
                                  }'>
                                                    <option value="Mobile" selected>Mobile</option>
                                                    <option value="Home">Home</option>


                                                </select>
                                            </div>
                                            <!-- End Select -->
                                        </div>
                                    </div>

                                    <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                                        <i class="tio-clear"></i>
                                    </a>
                                </div>
                                <!-- End Add Phone Input Field -->

                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="organizationLabel" class="col-sm-3 col-form-label input-label">Emergency
                                        Contact
                                        Person</label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="organization"
                                            id="organizationLabel" placeholder="John Doe" aria-label="Htmlstream">
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="organizationLabel" class="col-sm-3 col-form-label input-label">Emergency
                                        Contact
                                        #</label>

                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="organization"
                                            id="organizationLabel" placeholder="+xx xxx-xxxx-xx"
                                            aria-label="Htmlstream">
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
                                    <img class="profile-cover-img" src="{{ asset('assets/img/1920x400/img1.jpg') }}"
                                        alt="Image Description">
                                </div>
                            </div>
                            <!-- End Profile Cover -->

                            <!-- Avatar -->
                            <div class="avatar avatar-xxl avatar-circle avatar-border-lg profile-cover-avatar">
                                <img class="avatar-img" src="{{asset('assets/img/160x160/img9.jpg')}}"
                                    alt="Image Description">
                            </div>
                            <!-- End Avatar -->

                            <!-- Body -->
                            <div class="card-body">
                                <dl class="row">
                                    <dt class="col-sm-6 text-sm-right">Full name:</dt>
                                    <dd class="col-sm-6">Ella Lauda</dd>

                                    <dt class="col-sm-6 text-sm-right">Email:</dt>
                                    <dd class="col-sm-6">ella@example.com</dd>

                                    <dt class="col-sm-6 text-sm-right">Phone:</dt>
                                    <dd class="col-sm-6">+1 (609) 972-22-22</dd>

                                    <dt class="col-sm-6 text-sm-right">Organization:</dt>
                                    <dd class="col-sm-6">Htmlstream</dd>

                                    <dt class="col-sm-6 text-sm-right">Department:</dt>
                                    <dd class="col-sm-6">-</dd>

                                    <dt class="col-sm-6 text-sm-right">Account type:</dt>
                                    <dd class="col-sm-6">Individual</dd>

                                    <dt class="col-sm-6 text-sm-right">Country:</dt>
                                    <dd class="col-sm-6"><img class="avatar avatar-xss avatar-circle mr-1"
                                            src="{{ asset('assets/vendor/flag-icon-css/flags/1x1/gb.svg') }}"
                                            alt="Great Britain Flag"> United Kingdom</dd>

                                    <dt class="col-sm-6 text-sm-right">City:</dt>
                                    <dd class="col-sm-6">London</dd>

                                    <dt class="col-sm-6 text-sm-right">State:</dt>
                                    <dd class="col-sm-6">-</dd>

                                    <dt class="col-sm-6 text-sm-right">Address line 1:</dt>
                                    <dd class="col-sm-6">45 Roker Terrace, Latheronwheel</dd>

                                    <dt class="col-sm-6 text-sm-right">Address line 2:</dt>
                                    <dd class="col-sm-6">-</dd>

                                    <dt class="col-sm-6 text-sm-right">Zip code:</dt>
                                    <dd class="col-sm-6">KW5 8NW</dd>
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
                            <img class="img-fluid mb-3" src="./assets/svg/illustrations/hi-five.svg"
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