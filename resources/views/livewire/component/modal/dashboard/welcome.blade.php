<div  wire:ignore class="modal fade" id="welcomeModal" tabindex="-1" role="dialog" aria-labelledby="welcomeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="btn btn-xs btn-icon btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
                    <i class="tio-clear tio-lg"></i>
                </button>
            </div>
            <div class="modal-body p-sm-5">
                <div class="profile-cover">
                    <div class="profile-cover-img-wrapper">
                        <img class="profile-cover-img" src="../assets/img/1920x400/img3.jpg" alt="Image Description">
                    </div>
                </div>
                <div class="avatar avatar-xxl avatar-circle avatar-border-lg profile-cover-avatar">
                    <img class="avatar-img" src="../images/users/{{ $users->userimages->name }}" alt="Image Description">
                </div>
                <div class="text-center">
                    <h4 class="h2">{{ auth()->user()->first }} {{ auth()->user()->last }}</h4>
                    <p>Welcome to Employee Records Management, we're happy to see you .</p>
                </div>
            </div>
        </div>
    </div>
</div>