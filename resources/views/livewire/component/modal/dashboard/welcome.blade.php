<div class="modal fade" id="welcomeModal" tabindex="-1" role="dialog" aria-labelledby="welcomeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="welcomeModalLabel">Employee Records Management</h5>
                <button type="button" class="btn btn-xs btn-icon btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
                    <i class="tio-clear tio-lg"></i>
                </button>
            </div>
            <div class="modal-body p-sm-5">
                <div class="text-center">
                    <div class="w-75 w-sm-50 mx-auto mb-4">
                        <div class="avatar avatar-xxl avatar-circle">
                            <img class="avatar-img" src="../images/users/{{ $users->userimages->name }}" alt="Image Description">
                        </div>
                    </div>

                    <h4 class="h1">Welcome {{ auth()->user()->first }} {{ auth()->user()->last }}!</h4>

                    <p>We're happy to see you .</p>
                </div>
            </div>
            <div class="modal-footer d-block text-center py-sm-5">
                <small class="text-cap mb-1">Powered By: </small>
                <span class="d-block font-weight-bold mb-1">Management Information Systems</span>
            </div>
        </div>
    </div>
</div>