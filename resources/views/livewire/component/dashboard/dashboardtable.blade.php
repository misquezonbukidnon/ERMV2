<div class="row">
    <div class="col-lg-12">
        <div class="card mt-3">
            <div class="card-header">
                <h5 class="card-header-title">Employees</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-custom">
                    <table id="columnSearchDatatable"
                        class="table w-100 table-striped table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                        data-hs-datatables-options='{
                                            "columnDefs": [{
                                                    "orderable": true
                                                }],
                                                "order": [],
                                                "info": {
                                                "totalQty": "#datatableEntriesInfoTotalQty"
                                                },
                                                "search": "#officeinputSearch",
                                                "entries": "#datatableEntries",
                                                "pageLength": 10,
                                                "orderCellsTop": true,
                                                "pagination": "datatableWithFilterPagination"
                                            }'>
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Classification</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <th>
                                    <input type="text" id="column1_search" class="form-control form-control-sm"
                                        placeholder="Search names">
                                </th>
                                <th>
                                    <select id="column2_search" class="js-select2-custom" data-hs-select2-options='{
                                            "minimumResultsForSearch": "Infinity",
                                            "customClass": "custom-select custom-select-sm text-capitalize"
                                            }'>
                                        <option value="">Any</option>
                                        <option value="Director">Director</option>
                                        <option value="Unknown">Unknown</option>
                                        <option value="Executive director">Executive director</option>
                                    </select>
                                </th>
                                <th>
                                    <select id="column3_search" class="js-select2-custom" data-hs-select2-options='{
                                            "minimumResultsForSearch": "Infinity",
                                            "customClass": "custom-select custom-select-sm text-capitalize"
                                            }'>
                                        <option value="">Any</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="Austria ">Austria </option>
                                    </select>
                                </th>
                                <th>
                                    <select id="column4_search" class="js-select2-custom" data-hs-select2-options='{
                                            "minimumResultsForSearch": "Infinity",
                                            "customClass": "custom-select custom-select-sm text-capitalize"
                                            }'>
                                        <option value="">Any</option>
                                        <option value="Active">Active</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Suspended">Suspended</option>
                                    </select>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    <a class="media align-items-center pe-auto" style="cursor: pointer;"   data-toggle="modal" data-target="#employeemodal">
                                        <div class="avatar avatar-circle mr-3">
                                            <img class="avatar-img" src="../assets/img/160x160/img10.jpg"
                                                alt="Image Description">
                                        </div>
                                        <span class="d-block h5 text-hover-primary mb-0">Amanda Harvey </span>
                                    </a>
                                </td>
                                <td>
                                    <span class="d-block h5 mb-0">Director</span>
                                    <span class="d-block font-size-sm">Human resources</span>
                                </td>
                                <td>United Kingdom <span class="text-hide">Code: GB</span></td>
                                <td>
                                    <span class="legend-indicator bg-success"></span>Active
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <a class="media align-items-center" href="../user-profile.html">
                                        <div class="avatar avatar-soft-primary avatar-circle mr-3">
                                            <span class="avatar-initials">A</span>
                                        </div>
                                        <span class="d-block h5 text-hover-primary mb-0">Anne Richard</span>
                                    </a>
                                </td>
                                <td>
                                    <span class="d-block h5 mb-0">Seller</span>
                                    <span class="d-block font-size-sm">Branding products</span>
                                </td>
                                <td>United States <span class="text-hide">Code: US</span></td>
                                <td>
                                    <span class="legend-indicator bg-warning"></span>Pending
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <a class="media align-items-center" href="../user-profile.html">
                                        <div class="avatar avatar-soft-primary avatar-circle mr-3">
                                            <span class="avatar-initials">D</span>
                                        </div>
                                        <span class="d-block h5 text-hover-primary mb-0">David Harrison</span>
                                    </a>
                                </td>
                                <td>
                                    <span class="d-block h5 mb-0">Unknown</span>
                                    <span class="d-block font-size-sm">Unknown</span>
                                </td>
                                <td>United States <span class="text-hide">Code: US</span></td>
                                <td>
                                    <span class="legend-indicator bg-success"></span>Active
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <a class="media align-items-center" href="../user-profile.html">
                                        <div class="avatar avatar-soft-primary avatar-circle mr-3">
                                            <span class="avatar-initials">F</span>
                                        </div>
                                        <span class="d-block h5 text-hover-primary mb-0">Finch Hoot</span>
                                    </a>
                                </td>
                                <td>
                                    <span class="d-block h5 mb-0">Designer</span>
                                    <span class="d-block font-size-sm">IT department</span>
                                </td>
                                <td>Argentina <span class="text-hide">Code: AR</span></td>
                                <td>
                                    <span class="legend-indicator bg-danger"></span>Suspended
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <a class="media align-items-center" href="../user-profile.html">
                                        <div class="avatar avatar-soft-primary avatar-circle mr-3">
                                            <span class="avatar-initials">B</span>
                                        </div>
                                        <span class="d-block h5 text-hover-primary mb-0">Bob Dean</span>
                                    </a>
                                </td>
                                <td>
                                    <span class="d-block h5 mb-0">Executive director</span>
                                    <span class="d-block font-size-sm">Marketing</span>
                                </td>
                                <td>Austria <span class="text-hide">Code: AT</span></td>
                                <td>
                                    <span class="legend-indicator bg-success"></span>Active
                                </td>
                            </tr>

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
                            <nav id="datatableWithFilterPagination" aria-label="Activity pagination"></nav>
                        </div>
                    </div>
                </div>
                <!-- End Pagination -->
            </div>

        </div>
    </div>
</div>