<div>
    <div class="content container-fluid">
        <!-- ********************************************************************Breadcrumb (Can be converted to Component)************************************************* -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('office') }}">Office</a></li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-lg-3">
                <div id="accountSidebarNav"></div>
                <livewire:userprofile />
                <livewire:userevents />
            </div>
        </div>

        <div class="col-lg-9">
            <div class="row">
                <div class="col-lg-5 mb-5">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <!-- Input Group -->
                            <form wire:submit.prevent="submitForm" action="/office/create" method="POST">
                                @csrf
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
                                <div class="form-group">
                                    <label for="formControlPilledOffice" class="input-label">Office name</label>
                                    <input wire:model="office" name="office" type="text" class="form-control form-control-pill" id="formControlPilledOffice" placeholder="Please enter office name">
                                </div>
                                <div class="form-group">
                                    <label for="formControlPilledAbbr" class="input-label">Abbreviation</label>
                                    <input wire:model="abbreviation" name="abbreviation" type="text" class="form-control form-control-pill" id="formControlPilledAbbr" placeholder="Please enter abbreviation">
                                    <div class="w-100 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Input Group -->
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <div class="col">
                </div>
            </div>
            <div class="card">
                <!-- Header -->
                <div class="card-header">
                    <div class="row justify-content-between align-items-center flex-grow-1">
                        <div class="col-12 col-md">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-header-title">Users</h5>
                            </div>
                        </div>

                        <div class="col-auto">
                            <!-- Filter -->
                            <form>
                                <!-- Search -->
                                <div class="input-group input-group-merge input-group-flush">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="tio-search"></i>
                                        </div>
                                    </div>
                                    <input id="officeinputSearch" type="search" class="form-control" placeholder="Search Office" aria-label="Search users">
                                </div>
                                <!-- End Search -->
                            </form>
                            <!-- End Filter -->
                        </div>
                    </div>
                </div>

                <div class="table-responsive datatable-custom">
                    <table id="officedatatable" class="table table-striped  table-lg table-borderless table-thead-bordered table-nowrap table-align-middle" data-hs-datatables-options='{
                                        "columnDefs": [{
                                            "targets": [0, 1, 2],
                                            "orderable": false
                                        }],
                                        "order": [],
                                        "info": {
                                        "totalQty": "#datatableEntriesInfoTotalQty"
                                        },
                                        "search": "#officeinputSearch",
                                        "entries": "#datatableEntries",
                                        "isResponsive": false,
                                        "isShowPaging": false,
                                        "pageLength": 10,
                                        "pagination": "datatableWithPaginationPagination"
                                    }'>
                        <thead class="thead-light">
                            <tr>
                                <th>Abbreviation</th>
                                <th>Office Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($officelist as $office)
                            <tr>
                                <td>
                                    <span class="d-block h5 mb-0">{{ $office->abbr }}</span>
                                </td>
                                <td>
                                    <a class="media align-items-center" href="user-profile.html">
                                        <div class="media-body">
                                            <span class="d-block h5 text-hover-primary mb-0">{{ $office->name }}</span>

                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-xs btn-icon " data-toggle="modal" data-target="#officeEditModal">
                                        <i class="tio-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <!-- Pagination -->
                    <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                        <div class="col-sm mb-2 mb-sm-0">
                            <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                                <span class="mr-2">Showing:</span>

                                <!-- Select -->
                                <select id="datatableEntries" class="js-select2-custom" data-hs-select2-options='{
                                        "minimumResultsForSearch": "Infinity",
                                        "customClass": "custom-select custom-select-sm custom-select-borderless",
                                        "dropdownAutoWidth": true,
                                        "width": true
                                    }'>
                                    <option value="10" selected>10</option>
                                    <option value="15" >15</option>
                                    <option value="100">100</option>
                                </select>
                                <!-- End Select -->

                                <span class="text-secondary mr-2">of</span>

                                <!-- Pagination Quantity -->
                                <span id="datatableEntriesInfoTotalQty"></span>
                            </div>
                        </div>

                        <div class="col-sm-auto">
                            <div class="d-flex justify-content-center justify-content-sm-end">
                                <!-- Pagination -->
                                <nav id="datatableWithPaginationPagination" aria-label="Activity pagination"></nav>
                            </div>
                        </div>
                    </div>
                    <!-- End Pagination -->
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Body -->
    </div>

    <!-- End Card -->




    <!-- ******************************************************MODAL EDIT OFFICE******************************************************************* -->
    <div class="modal fade" id="officeEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Office</h5>
                        <button type="button" class="btn btn-xs btn-icon btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
                            <i class="tio-clear tio-lg"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Input Group -->
                        <div class="form-group">
                            <label for="formControlPilledFullName" class="input-label">Abbreviation</label>

                            <input type="text" class="form-control form-control-pill" id="Abbreviation" placeholder="Abbreviation" aria-label="Abbreviation">
                        </div>
                        <!-- End Input Group -->

                        <!-- Input Group -->
                        <div class="form-group">
                            <label for="formControlPilledEmail" class="input-label">Office Name</label>

                            <input type="text" class="form-control form-control-pill" id="OfficeName" placeholder="Office Name" aria-label="OfficeName">
                        </div>
                        <!-- End Input Group -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>