<div class="modal fade" id="changepassmodal" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                <button type="button" class="btn btn-xs btn-icon btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
                    <i class="tio-clear tio-lg"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="js-validate">
                    <div class="text-center">
                        <div class="mb-5">
                            <h1 class="display-4">Change password?</h1>
                            <p>That's okay, it happens! Enter new Password.</p>
                        </div>
                    </div>

                    <!-- Form Group -->
                    <div class="form-group ">
                        <label for="showPasswordLabel" class="input-label">Password</label>

                        <div class="input-group input-group-merge">
                            <input type="password" class="js-toggle-password form-control" id="showPasswordLabel" placeholder="Enter password" value="" data-hs-toggle-password-options='{
             "target": ".js-password-toggle-show-target",
             "show": true,
             "defaultClass": "tio-hidden",
             "showClass": "tio-visible",
             "classChangeTarget": "#changePasswordShowIcon"
           }'>
                            <a class="input-group-append js-password-toggle-show-target" href="javascript:;">
                                <span class="input-group-text">
                                    <i id="changePasswordShowIcon"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group ">
                        <label for="showPasswordLabel2" class="input-label">Confirm Password</label>

                        <div class="input-group input-group-merge">
                            <input type="password" class="js-toggle-password form-control" id="showPasswordLabel2" placeholder="Confirm password" value="" data-hs-toggle-password-options='{
             "target": ".js-password-toggle-show-target",
             "show": true,
             "defaultClass": "tio-hidden",
             "showClass": "tio-visible",
             "classChangeTarget": "#changePasswordShowIcon2"
           }'>
                            <a class="input-group-append js-password-toggle-show-target" href="javascript:;">
                                <span class="input-group-text">
                                    <i id="changePasswordShowIcon2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- End Form Group -->
                    <button type="submit" class="btn btn-lg btn-block btn-primary">Reset Password</button>

                    <div class="text-center mt-2">
                        <a class="btn btn-link" data-dismiss="modal">
                            <i class="tio-chevron-left"></i> Back
                        </a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>