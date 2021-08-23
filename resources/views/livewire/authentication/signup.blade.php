<div>
    <div class="position-fixed top-0 right-0 left-0 bg-img-hero" style="height: 32rem; background-image: url(./assets/svg/components/abstract-bg-4.svg);">
    <!-- SVG Bottom Shape -->
    <figure class="position-absolute right-0 bottom-0 left-0">
        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
        <polygon fill="#fff" points="0,273 1921,273 1921,0 "/>
        </svg>
    </figure>
    <!-- End SVG Bottom Shape -->
    <!-- End SVG Shapes -->
    </div>

    <!-- Content -->
    <div class="container py-5 py-sm-7">
    <a class="d-flex justify-content-center mb-5" href="index.html">
    <img class="z-index-2" src="./assets/img/160x160/LGUSEAL.png" alt="Image Description" style="width: 8rem;">
    </a>

    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
        <!-- Card -->
        <div class="card card-lg mb-5">
            <div class="card-body">
            <!-- Form -->
            <form class="js-validate" method="POST" action="/register" enctype="multipart/form-data">
                @csrf
                <div class="text-center">
                    <div class="mb-5">
                        <h1 class="display-4">Create your account</h1>
                        <p>Already have an account? <a href="{{route('login')}}">Sign in here</a></p>
                    </div>
                </div>
                @if($errors->any())
                    <div class="alert alert-danger media" role="alert">
                        <i class="tio-warning mt-1 mr-1"></i>
                        @foreach($errors->all() as $error)
                            <div class="media-body" role="alert">
                            &emsp; {{ $error }}
                            </div>
                        @endforeach
                    </div>
                @endif

                <div class="form-row">
                    <div class="col-sm-12">
                        <div class="js-form-message w-100  form-group">
                            <div class="d-flex justify-content-center  align-items-center">
                                <!-- Avatar -->
                                <label class="avatar avatar-xl avatar-circle avatar-uploader mr-5" for="avatarUploader">
                                <img id="avatarImg" class="avatar-img" src="../assets/img/160x160/img1.jpg" alt="Image Description">

                                <input type="file" class="js-file-attach avatar-uploader-input" id="avatarUploader"
                                        data-hs-file-attach-options='{
                                            "textTarget": "#avatarImg",
                                            "mode": "image",
                                            "targetAttr": "src",
                                            "resetTarget": ".js-file-attach-reset-img",
                                            "resetImg": "../assets/img/160x160/img1.jpg"
                                        }' name="image_upload">

                                <span class="avatar-uploader-trigger">
                                    <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
                                </span>
                                </label>
                                <!-- End Avatar -->

                                <button type="button" class="js-file-attach-reset-img btn btn-white">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>

                <label class="input-label" for="fullNameSrEmail">Full name</label>

                <!-- Form Group -->
                <div class="form-row">
                <div class="col-sm-6">
                    <div class="js-form-message form-group">
                    <input type="text" class="form-control form-control-lg" name="first" id="fullNameSrEmail" placeholder="Firstname" aria-label="first" required data-msg="Please enter your first name.">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="js-form-message form-group">
                    <input type="text" class="form-control form-control-lg" name="last" placeholder="Lastname" aria-label="last" required data-msg="Please enter your last name.">
                    </div>
                </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group">
                <label class="input-label" for="signupSrEmail">Your email</label>

                <input type="email" class="form-control form-control-lg" name="email" id="signupSrEmail" placeholder="yourname@lguquezon.com" required data-msg="Please enter a valid email address.">
                </div>
                <!-- End Form Group -->

                <!-- Roles input -->
                <div class="form-group">
                    <label for="inputGroupHoverLightRoleSelect" class="input-label">Role</label>

                    <div class="input-group input-group-merge input-group-hover-light">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="tio-user-outlined"></i>
                        </span>
                        </div>
                        <select id="inputGroupHoverLightRoleSelect" class="custom-select" name="roles_id" required>
                            <option>Choose a role</option>
                            @foreach($rolelist as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- office input -->
                <div class="form-group">
                    <label for="inputGroupHoverLightOfficeSelect" class="input-label">Office</label>

                    <div class="input-group input-group-merge input-group-hover-light">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="tio-briefcase-outlined"></i>
                        </span>
                        </div>
                        <select id="inputGroupHoverLightOfficeSelect" class="custom-select" name="offices_id" required>
                            <option>Choose an office</option>
                            @foreach($officelist as $office)
                                <option value="{{ $office->id }}">{{ $office->abbr }} - {{ $office->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Position input -->
                <div class="form-group">
                    <label for="inputGroupHoverLightPositionSelect" class="input-label">Position</label>

                    <div class="input-group input-group-merge input-group-hover-light">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="tio-poi-user"></i>
                        </span>
                        </div>
                        <select id="inputGroupHoverLightPositionSelect" class="custom-select" name="positions_id" required>
                            <option>Choose a position</option>
                            @foreach($positionlist as $position)
                                <option value="{{ $position->id }}">{{ $position->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Form Group -->
                <div class="js-form-message form-group">
                <label class="input-label" for="signupSrPassword">Password</label>

                <div class="input-group input-group-merge">
                    <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required
                            data-msg="Your password is invalid. Please try again."
                            data-hs-toggle-password-options='{
                            "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                            "defaultClass": "tio-hidden-outlined",
                            "showClass": "tio-visible-outlined",
                            "classChangeTarget": ".js-toggle-passowrd-show-icon-1"
                            }'>
                    <div class="js-toggle-password-target-1 input-group-append">
                    <a class="input-group-text" href="javascript:;">
                        <i class="js-toggle-passowrd-show-icon-1 tio-visible-outlined"></i>
                    </a>
                    </div>
                </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group">
                <label class="input-label" for="signupSrConfirmPassword">Confirm password</label>

                <div class="input-group input-group-merge">
                    <input type="password" class="js-toggle-password form-control form-control-lg" name="password_confirmation" id="signupSrConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required
                            data-msg="Password does not match the confirm password."
                            data-hs-toggle-password-options='{
                            "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                            "defaultClass": "tio-hidden-outlined",
                            "showClass": "tio-visible-outlined",
                            "classChangeTarget": ".js-toggle-passowrd-show-icon-2"
                            }'>
                    <div class="js-toggle-password-target-2 input-group-append">
                    <a class="input-group-text" href="javascript:;">
                        <i class="js-toggle-passowrd-show-icon-2 tio-visible-outlined"></i>
                    </a>
                    </div>
                </div>
                </div>
                <!-- End Form Group -->

                <!-- Checkbox -->
                <!-- <div class="js-form-message form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox" required data-msg="Please accept our Terms and Conditions.">
                    <label class="custom-control-label font-size-sm text-muted" for="termsCheckbox"> I accept the <a href="#">Terms and Conditions</a></label>
                </div>
                </div> -->
                <!-- End Checkbox -->

                <button type="submit" class="btn btn-lg btn-block btn-primary mb-2">Create an account</button>
            </form>
            <!-- End Form -->
            </div>
        </div>
        <!-- End Card -->

        <!-- Footer -->
        <div class="text-center">
            <small class="text-cap mb-4">Powered by</small>

            <div class="w-85 mx-auto">
                <div class="row justify-content-between">
                <div class="col">
                    <img class="img-fluid" width= "100" src="./assets/img/160x160/MIS.png" alt="Image Description">
                </div>
        
                </div>
            </div>
        </div>
        <!-- End Footer -->
        </div>
    </div>
    </div>
</div>
