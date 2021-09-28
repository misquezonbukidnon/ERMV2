<form>
    <div class="card mb-3">
        <!-- File Attachment Input -->
        <div class="card-body">
            <h3 class="card-title">Import</h3>
            <p class="card-text">Import Files or Data.</p>
            <label class="custom-file-boxed" for="customFileInputBoxedEg">
                <span id="customFileBoxedEgsettings">Browse your device and upload documents</span>
                <small class="d-block text-muted">Maximum file size 10MB</small>

                <input id="customFileInputBoxedEg" name="custom-file-boxed" type="file" class="js-file-attach custom-file-boxed-input" data-hs-file-attach-options='{
                "textTarget": "#customFileBoxedEgsettings"
            }'>
            </label>
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary">Upload</button>
            </div>
        </div>
    </div>
    <!-- End File Attachment Input -->
    <!-- Content -->
    <div class="card">
        <div class="card-body">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-sm mb-2 mb-sm-0">
                        <h3 class="card-title">file Manager</h3>
                    </div>
                </div>
                <!-- End Row -->
            </div>
            <!-- End Page Header -->
            <!-- Header -->
            <div class="row align-items-center mb-2">
                <div class="col">
                    <h2 class="h4 mb-0">Files</h2>
                </div>

                <div class="col-auto">
                    <!-- Nav -->
                    <ul class="nav nav-segment" id="connectionsTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="grid-tab" data-toggle="tab" href="#grid" role="tab" aria-controls="grid" aria-selected="true" title="Column view">
                                <i class="tio-column-view-outlined"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false" title="List view">
                                <i class="tio-agenda-view-outlined"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- End Nav -->
                </div>
            </div>
            <!-- End Header -->

            <!-- Tab Content -->
            <div class="tab-content file-manager-custom-height custom-scroll" id="connectionsTabContent">
                <div class="tab-pane fade active show" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                    <!-- Folders -->
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
                        @for ($i = 0; $i <= 20; $i++) <div class="col mb-3 mb-lg-5">
                            <!-- Card -->

                            <div class="card card-sm card-hover-shadow card-header-borderless h-100 text-center">
                                <div class="card-header">
                                    <small>25kb</small>

                                    <!-- Unfold -->
                                    <div class="hs-unfold ml-auto">
                                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary card-unfold rounded-circle" href="javascript:;" data-hs-unfold-options="{
                                                    &quot;target&quot;: &quot;#filesGridDropdown1&quot;,
                                                    &quot;type&quot;: &quot;css-animation&quot;
                                                    }" data-hs-unfold-target="#filesGridDropdown1" data-hs-unfold-invoker="">
                                            <i class="tio-more-vertical"></i>
                                        </a>

                                        <div id="filesGridDropdown1" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right hs-unfold-content-initialized hs-unfold-css-animation animated hs-unfold-hidden hs-unfold-reverse-y" style="min-width: 13rem; animation-duration: 300ms;" data-hs-target-height="306" data-hs-unfold-content="" data-hs-unfold-content-animation-in="slideInUp" data-hs-unfold-content-animation-out="fadeOut">
                                            <span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item" href="#">
                                                <i class="tio-delete-outlined dropdown-item-icon"></i> Delete
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Unfold -->
                                </div>

                                <div class="card-body">
                                    <img class="avatar avatar-4by3" src="../assets/svg/brands/google-sheets.svg" alt="Image Description">

                                    <a class="stretched-link" href="#"></a>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">sample file</h5>
                                    <p class="small">Updated 50 min ago</p>
                                </div>
                            </div>

                            <!-- End Card -->
                    </div>
                    @endfor
                </div>
                <!-- End Folders -->
            </div>

            <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                <ul class="list-group">
                    <!-- List Item -->
                    @for ($i = 0; $i <= 20; $i++) <li class="list-group-item">
                        <div class="row align-items-center gx-2">
                            <div class="col-auto">
                                <img class="avatar avatar-xs avatar-4by3" src="../assets/svg/brands/google-sheets.svg" alt="Image Description">
                            </div>

                            <div class="col">
                                <h5 class="mb-0">
                                    <a class="text-dark" href="#">Sample File</a>
                                </h5>
                                <ul class="list-inline list-separator small">
                                    <li class="list-inline-item">Updated 50 min ago</li>
                                    <li class="list-inline-item">25kb</li>
                                </ul>
                            </div>

                            <div class="col-auto">
                                <!-- Unfold -->
                                <div class="hs-unfold">
                                    <a class="js-hs-unfold-invoker btn btn-sm btn-white" href="javascript:;" data-hs-unfold-options="{
                                                    &quot;target&quot;: &quot;#filesListDropdown1&quot;,
                                                    &quot;type&quot;: &quot;css-animation&quot;
                                                    }" data-hs-unfold-target="#filesListDropdown1" data-hs-unfold-invoker="">
                                        <span class="d-none d-sm-inline-block mr-1">More</span>
                                        <i class="tio-chevron-down"></i>
                                    </a>
                                    <div id="filesListDropdown1" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated" style="min-width: 13rem; animation-duration: 300ms;" data-hs-target-height="0" data-hs-unfold-content="" data-hs-unfold-content-animation-in="slideInUp" data-hs-unfold-content-animation-out="fadeOut">
                                        <span class="dropdown-header">Settings</span>
                                        <a class="dropdown-item" href="#">
                                            <i class="tio-delete-outlined dropdown-item-icon"></i> Delete
                                        </a>
                                    </div>
                                </div>
                                <!-- End Unfold -->
                            </div>
                        </div>
                        <!-- End Row -->
                        </li>
                        @endfor
                        <!-- End List Item -->
                </ul>
                <!-- End List Dot -->
            </div>
        </div>
    </div>
    </div>
</form>