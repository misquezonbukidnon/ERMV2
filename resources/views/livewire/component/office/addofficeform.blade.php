<div class="card">
    <div class="card-header">
        <h5 class="card-header-title">Create Office</h5>
    </div>
    <div class="card-body">
        <!-- Input Group -->
        <form wire:submit.prevent="submitForm" action="/office/create" method="POST" autocomplete="off">
            @csrf
            @if (session()->has('success_message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="tio-checkmark-circle mt-1 mr-1"></i> {{ session('success_message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="tio-clear tio-lg"></i>
                </button>
            </div>
            @endif
            <div class="form-group">
                <label for="formControlPilledOffice" class="input-label">Office name</label>
                <input wire:model="office" id="formControlPilledOffice" type="text"
                    class="form-control form-control-pill {{ $errors->has('office') ? ' is-invalid' : '' }}"
                    name="office" value="{{ old('office') }}" required autofocus>
                @if ($errors->has('office'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('office') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="formControlPilledAbbr" class="input-label">Abbreviation</label>
                <input wire:model="abbreviation" name="abbreviation" type="text"
                    class="form-control form-control-pill {{ $errors->has('abbreviation') ? ' is-invalid' : '' }}"
                    id="formControlPilledAbbr">
                @if ($errors->has('abbreviation'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('abbreviation') }}</strong>
                </span>
                @endif
                <div class="w-100 d-flex justify-content-center">
                    <button wire:click="addTableRefresh" type="submit" class="btn btn-primary mt-3">Submit</button>
                </div>
            </div>
        </form>
        <!-- End Input Group -->
    </div>
</div>