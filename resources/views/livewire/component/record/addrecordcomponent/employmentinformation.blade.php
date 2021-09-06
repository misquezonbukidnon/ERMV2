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
                    <select name="positions_id" class="js-select2-custom" id="locationLabel" data-hs-select2-options='{
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