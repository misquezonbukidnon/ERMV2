<div wire:ignore.self class="modal fade" id="officeEditModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-dialog" role="document">
            <form wire:submit.prevent="submitForm({{ $office_id }})" action="#" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Office</h5>
                        <button type="button" class="btn btn-xs btn-icon btn-ghost-secondary" data-dismiss="modal"
                            aria-label="Close">
                            <i class="tio-clear tio-lg"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        @if (session()->has('success_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="tio-checkmark-circle mt-1 mr-1"></i> {{ session('success_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="tio-clear tio-lg"></i>
                            </button>
                        </div>
                        @endif
                        <!-- Input Group -->
                        <div class="form-group">
                            <label for="formControlPilledFullName" class="input-label">Abbreviation</label>

                            <input type="text" wire:model="abbreviation"
                                class="form-control form-control-pill {{ $errors->has('abbreviation') ? ' is-invalid' : '' }}"
                                id="Abbreviation" name="abbr" aria-label="Abbreviation">
                            @if ($errors->has('abbreviation'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('abbreviation') }}</strong>
                            </span>
                            @endif
                        </div>
                        <!-- End Input Group -->

                        <!-- Input Group -->
                        <div class="form-group">
                            <label for="formControlPilledEmail" class="input-label">Office Name</label>

                            <input type="text" wire:model="name"
                                class="form-control form-control-pill {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                id="OfficeName" name="name" aria-label="OfficeName">
                            @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <!-- End Input Group -->

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" wire:click=""">Update</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>