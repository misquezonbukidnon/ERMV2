<div>
    <div class="content container-fluid">
         <!-- ********************************************************************Breadcrumb (Can be converted to Component)************************************************* -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-lg-3">
                <!-- Sticky Block Start Point -->
                <div id="accountSidebarNav"></div>

                <!-- Card -->
                <div class="js-sticky-block card mb-3 mb-lg-5" data-hs-sticky-block-options='{
            "parentSelector": "#accountSidebarNav",
            "breakpoint": "lg",
            "startPoint": "#accountSidebarNav",
            "endPoint": "#stickyBlockEndPoint",
            "stickyOffsetTop": 20
            }'>
             <!-- ********************************************************************User Profile Overview (Can be converted to Component)************************************************* -->
                    <!-- Header -->
                    <div class="card-header">
                        <h5 class="card-header-title">Profile</h5>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <ul class="list-unstyled list-unstyled-py-3 text-dark mb-3">
                            <li class="py-0">
                                <small class="card-subtitle">About</small>
                            </li>

                            <li>
                                <i class="tio-user-outlined nav-icon"></i>
                                {{ auth()->user()->first }} {{ auth()->user()->last }}
                            </li>

                            
                            <li>
                                <i class="tio-briefcase-outlined nav-icon"></i>
                                {{ auth()->user()->offices->name }}
                            </li>

                            <li class="pt-2 pb-0">
                                <small class="card-subtitle">Contacts</small>
                            </li>

                            <li>
                                <i class="tio-online nav-icon"></i>
                                {{ auth()->user()->email }}
                            </li>
                        </ul>
                    </div>
                    <!-- End Body -->
                </div>
                <!-- End Card -->
                <div class="js-sticky-block card mb-3 mb-lg-5" data-hs-sticky-block-options='{
            "parentSelector": "#accountSidebarNav",
            "breakpoint": "lg",
            "startPoint": "#accountSidebarNav",
            "endPoint": "#stickyBlockEndPoint",
            "stickyOffsetTop": 20
            }'>
            <!-- ********************************************************************Events (Can be converted to Component)************************************************* -->
                    <!-- Header -->
                    <div class="card-header">
                        <h5 class="card-header-title">Events</h5>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body " style="overflow-y: auto; overflow-x: hidden; height: 437px">
                        <!-- Step -->
                        <ul class="step">
                            <li class="step-item">
                                <div class="step-content-wrapper">
                                    <div class="step-avatar">
                                        <img class="step-avatar-img" src="../assets/img/160x160/img9.jpg" alt="Image Description">
                                    </div>
                                    <div class="step-content">
                                        <h4>Jay Lilia Poe <span class="badge badge-soft-primary badge-pill"><span class="legend-indicator bg-primary"></span>"just now"</span></h4>
                                        <p class="step-text">Added a new record.</p>
                                        <div class="media">
                                            <div class="step-avatar">
                                                <img class="step-avatar-img" src="../assets/img/160x160/img10.jpg" alt="Image Description">
                                            </div>
                                            <div class="media-body text-truncate">
                                                <span class="d-block text-dark text-truncate">Lods Pomzic</span>
                                                <small class="d-block">MMO</small>
                                                <small class="d-block">Job Order</small>
                                            </div>
                                        </div>
                                    </div>
                            </li>

                            <li class="step-item">
                                <div class="step-content-wrapper">
                                    <div class="step-avatar">
                                        <img class="step-avatar-img" src="../assets/img/160x160/img10.jpg" alt="Image Description">
                                    </div>
                                    <div class="step-content">
                                        <h4>Jay Leo Pol <span class="badge badge-soft-primary badge-pill"><span class="legend-indicator bg-primary"></span>"1 hour ago"</span></h4>
                                        <p class="step-text">We strive to figure out ways to help your business grow through all platforms.</p>

                                    </div>
                                </div>
                            </li>

                            <li class="step-item">
                                <div class="step-content-wrapper">
                                    <div class="step-avatar">
                                        <img class="step-avatar-img" src="../assets/img/160x160/img3.jpg" alt="Image Description">
                                    </div>
                                    <div class="step-content">
                                        <h4>Je Lio Pul <span class="badge badge-soft-primary badge-pill"><span class="legend-indicator bg-primary"></span>"just now"</span></h4>
                                        <p class="step-text">Find what you need in one template and combine features at will.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- End Step -->
                    </div>
                    <!-- End Body -->
                </div>
                <!-- End Card -->
            </div>

            <div class="col-lg-9">
                <div class="row gx-2 gx-lg-3">
                <!-- ********************************************************************Total Employees Card************************************************* -->
                    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
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

                    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
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

                    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
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

                    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
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
                <!-- ********************************************************************Dashboard Data Table************************************************* -->
                <!-- Card -->
                <div class="card">
                    <!-- Header -->
                    <div class="card-header">
                        <h5 class="card-header-title">Employees</h5>
                    </div>
                    <!-- End Header -->

                    <!-- Table -->
                    <div class="table-responsive datatable-custom">
                        <table id="columnSearchDatatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                                        "order": [],
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
                    <div class="card-footer">
                        <div class="d-flex justify-content-center justify-content-sm-end">
                            <nav id="datatableWithFilterPagination" aria-label="Activity pagination"></nav>
                        </div>
                    </div>
                    <!-- End Table -->
                </div>
                <!-- End Card -->
            </div>
            <!-- End Body -->
        </div>
        <!-- End Card -->

    </div>
</div>
<!-- End Row -->
</div>
</div>
<!-- End Row -->
<!-- End Card -->
</div>











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

</div>