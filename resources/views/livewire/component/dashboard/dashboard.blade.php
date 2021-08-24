<div class="container-fluid">
    <!-- ********************************************************************Breadcrumb (Can be converted to Component)************************************************* -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"></a></li>
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        </ol>
    </nav>
    <!-- End Body -->
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <livewire:component.dashboard.userprofile />
                </div>
                <div class="col-lg-6 mb-3">
                    <!-- total summary -->
                    <div class="row">
                        <div class="col-sm-3  mb-3">
                            <!-- Card -->
                            <a class="card card-hover-shadow  w-100 h-100" href="#">
                                <div class="card-body">
                                    <h6 class="card-subtitle d-flex justify-content-center">Total Regular</h6>
                                    <div class=" d-flex justify-content-center w-100">
                                        <div class="mt-3">
                                            <span class="card-title h1">72,540</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- End Card -->
                        </div>

                        <div class="col-sm-3 mb-3">
                            <!-- Card -->
                            <a class="card card-hover-shadow  w-100 h-100" href="#">
                                <div class="card-body">
                                    <h6 class="card-subtitle d-flex justify-content-center">Total Casual</h6>
                                    <div class=" d-flex justify-content-center w-100">
                                        <div class="mt-3">
                                            <span class="card-title h1">72,540</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- End Card -->
                        </div>

                        <div class="col-sm-3  mb-3">
                            <!-- Card -->
                            <a class="card card-hover-shadow  w-100 h-100" href="#">
                                <div class="card-body">
                                    <h6 class="card-subtitle d-flex justify-content-center">Total Job Order</h6>
                                    <div class=" d-flex justify-content-center w-100">
                                        <div class="mt-3">
                                            <span class="card-title h1">72,540</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- End Card -->
                        </div>

                        <div class="col-sm-3  mb-3">
                            <!-- Card -->
                            <a class="card card-hover-shadow  w-100 h-100" href="#">
                                <div class="card-body">
                                    <h6 class="card-subtitle d-flex justify-content-center">Total Honorarium</h6>
                                    <div class=" d-flex justify-content-center w-100">
                                        <div class="mt-3">
                                            <span class="card-title h1">72,540</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- End Card -->
                        </div>
                    </div>

                    <!-- employee datatable -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-header-title">Employees</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive datatable-custom">
                                        <table id="columnSearchDatatable" class="table w-100 table-striped table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
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
                                                        <input type="text" id="column1_search" class="form-control form-control-sm" placeholder="Search names">
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
                                                        <a class="media align-items-center pe-auto" style="cursor: pointer;">
                                                            <div class="avatar avatar-circle mr-3">
                                                                <img class="avatar-img" src="../assets/img/160x160/img10.jpg" alt="Image Description">
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
                </div>
                <div class="col-lg-3">
                    <livewire:component.dashboard.userevents />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Card -->

<!-- ***************************************************************Modal for Employee viewing here************************************************** -->
<!-- Modal -->
<div class="modal fade" id="employeemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div id="addUserStepConfirmation" class="card card-lg">
                <!-- Profile Cover -->
                <div class="profile-cover">
                    <div class="profile-cover-img-wrapper">
                        <img class="profile-cover-img" src="./assets/img/1920x400/img1.jpg" alt="Image Description">
                    </div>
                </div>
                <!-- End Profile Cover -->

                <!-- Avatar -->
                <div class="avatar avatar-xxl avatar-circle avatar-border-lg profile-cover-avatar">
                    <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                </div>
                <!-- End Avatar -->

                <!-- Body -->
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-6 text-sm-right">Full name:</dt>
                        <dd class="col-sm-6">Ella Lauda</dd>

                        <dt class="col-sm-6 text-sm-right">Email:</dt>
                        <dd class="col-sm-6">ella@example.com</dd>

                        <dt class="col-sm-6 text-sm-right">Phone:</dt>
                        <dd class="col-sm-6">+1 (609) 972-22-22</dd>

                        <dt class="col-sm-6 text-sm-right">Organization:</dt>
                        <dd class="col-sm-6">Htmlstream</dd>

                        <dt class="col-sm-6 text-sm-right">Department:</dt>
                        <dd class="col-sm-6">-</dd>

                        <dt class="col-sm-6 text-sm-right">Account type:</dt>
                        <dd class="col-sm-6">Individual</dd>

                        <dt class="col-sm-6 text-sm-right">Country:</dt>
                        <dd class="col-sm-6"><img class="avatar avatar-xss avatar-circle mr-1" src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Great Britain Flag"> United Kingdom</dd>

                        <dt class="col-sm-6 text-sm-right">City:</dt>
                        <dd class="col-sm-6">London</dd>

                        <dt class="col-sm-6 text-sm-right">State:</dt>
                        <dd class="col-sm-6">-</dd>

                        <dt class="col-sm-6 text-sm-right">Address line 1:</dt>
                        <dd class="col-sm-6">45 Roker Terrace, Latheronwheel</dd>

                        <dt class="col-sm-6 text-sm-right">Address line 2:</dt>
                        <dd class="col-sm-6">-</dd>

                        <dt class="col-sm-6 text-sm-right">Zip code:</dt>
                        <dd class="col-sm-6">KW5 8NW</dd>
                    </dl>
                    <!-- End Row -->
                </div>
                <!-- End Body -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->