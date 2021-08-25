<div>
    <div class="card">
        <!-- Header -->
        <div class="card-header">
            <div class="row justify-content-between align-items-center flex-grow-1">
                <div class="col-12 col-md">
                    <div class="card-header-titler">
                        <h5 class="card-header-title">Offices</h5>
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
        <div class="card-body">
            <div class="table-responsive datatable-custom">
                <table id="officedatatable" class="table table-striped  table-lg table-borderless table-thead-bordered table-nowrap table-align-middle" data-hs-datatables-options='{
                                        "columnDefs": [{
                                            "targets": [0, 1, 2],
                                            "orderable": true
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
                            <option value="15">15</option>
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