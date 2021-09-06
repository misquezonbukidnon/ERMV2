<div>
    <div class="card">
        <div class="col-md-12">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h5 class="card-header-title">Employee Profile</h5>
                </div>
                <div class="cord-body">
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="formControlPilledFirstname" class="input-label">Firstname</label>
                                    <input wire:model="firstname" id="formControlPilledOffice" type="text"
                                        class="form-control form-control-pill {{ $errors->has('firstname') ? ' is-invalid' : '' }}"
                                        name="firstname" value="{{ old('firstname') }}" required autofocus>
                                    @if ($errors->has('firstname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="formControlPilledOffice" class="input-label">Office</label>
                                    <select class="js-select2-custom">
                                        <option value="1">Select Office</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            col 2
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>