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
                            <form>
                                <div class="form-group">
                                    <label for="formControlPilledFullName" class="input-label">Office Name</label>
                                    <input type="text" class="form-control form-control-pill" id="formControlPilledFullName" placeholder="Please enter Office name" aria-label="Mark Williams">
                                    <div class="w-100 d-flex justify-content-center">
                                        <button type="button" class="btn btn-primary mt-3">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Input Group -->
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <div class="col">
                    <div class="card">
                        <!-- Header -->
                        <div class="card-header">
                            <h5 class="card-header-title">Employees</h5>
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <div class="table-responsive datatable-custom">
                            <table id="columnSearchDatatable" class="js-editable-table table  table-borderless table-thead-bordered  table-align-middle w-100" data-hs-datatables-options='{
                                        "order": [],
                                        "orderCellsTop": true,
                                        "pagination": "datatableWithFilterPagination"
                                    }'>
                                <thead class="thead-light">
                                    <tr>
                                        <th>Office</th>
                                        <th>Action</th>
                                        <th style="display: none;">Classification</th>
                                        <th style="display: none;">Action</th>
                                    </tr>
                                    <tr>
                                        <th class="bg-transparent border-0">
                                            <input type="text" id="column1_search" class="form-control form-control-sm w-75" placeholder="Search Office">
                                        </th>
                                        <th style="display: none;">
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
                                        <th style="display: none;">
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
                                        <th style="display: none;">
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
                                        <td data-field="name">
                                            MMO Management Information Systems
                                        </td>
                                        <td>
                                            <a class="js-edit btn btn-sm btn-white" href="javascript:;">
                                                <i class="js-edit-icon tio-edit"></i> Edit
                                            </a>
                                        </td>   
                                        <td style="display: none;">Argentina <span class="text-hide">Code: AR</span></td>
                                        <td style="display: none;">
                                            <span class="legend-indicator bg-danger"></span>Suspended
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-field="name">
                                            MMO Management Information Systems
                                        </td>
                                        <td>
                                            <a class="js-edit btn btn-sm btn-white" href="javascript:;">
                                                <i class="js-edit-icon tio-edit"></i> Edit
                                            </a>
                                        </td>   
                                        <td style="display: none;">Argentina <span class="text-hide">Code: AR</span></td>
                                        <td style="display: none;">
                                            <span class="legend-indicator bg-danger"></span>Suspended
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-field="name">
                                            MMO Management Information Systems
                                        </td>
                                        <td>
                                            <a class="js-edit btn btn-sm btn-white" href="javascript:;">
                                                <i class="js-edit-icon tio-edit"></i> Edit
                                            </a>
                                        </td>   
                                        <td style="display: none;">Argentina <span class="text-hide">Code: AR</span></td>
                                        <td style="display: none;">
                                            <span class="legend-indicator bg-danger"></span>Suspended
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-field="name">
                                            MMO Management Information Systems
                                        </td>
                                        <td>
                                            <a class="js-edit btn btn-sm btn-white" href="javascript:;">
                                                <i class="js-edit-icon tio-edit"></i> Edit
                                            </a>
                                        </td>   
                                        <td style="display: none;">Argentina <span class="text-hide">Code: AR</span></td>
                                        <td style="display: none;">
                                            <span class="legend-indicator bg-danger"></span>Suspended
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-field="name">
                                            MMO Management Information Systems
                                        </td>
                                        <td>
                                            <a class="js-edit btn btn-sm btn-white" href="javascript:;">
                                                <i class="js-edit-icon tio-edit"></i> Edit
                                            </a>
                                        </td>   
                                        <td style="display: none;">Argentina <span class="text-hide">Code: AR</span></td>
                                        <td style="display: none;">
                                            <span class="legend-indicator bg-danger"></span>Suspended
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-field="name">
                                            MMO Management Information Systems
                                        </td>
                                        <td>
                                            <a class="js-edit btn btn-sm btn-white" href="javascript:;">
                                                <i class="js-edit-icon tio-edit"></i> Edit
                                            </a>
                                        </td>   
                                        <td style="display: none;">Argentina <span class="text-hide">Code: AR</span></td>
                                        <td style="display: none;">
                                            <span class="legend-indicator bg-danger"></span>Suspended
                                        </td>
                                    </tr>          <tr>
                                        <td data-field="name">
                                            MMO Management Information Systems
                                        </td>
                                        <td>
                                            <a class="js-edit btn btn-sm btn-white" href="javascript:;">
                                                <i class="js-edit-icon tio-edit"></i> Edit
                                            </a>
                                        </td>   
                                        <td style="display: none;">Argentina <span class="text-hide">Code: AR</span></td>
                                        <td style="display: none;">
                                            <span class="legend-indicator bg-danger"></span>Suspended
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-field="name">
                                            MMO Management Information Systems
                                        </td>
                                        <td>
                                            <a class="js-edit btn btn-sm btn-white" href="javascript:;">
                                                <i class="js-edit-icon tio-edit"></i> Edit
                                            </a>
                                        </td>   
                                        <td style="display: none;">Argentina <span class="text-hide">Code: AR</span></td>
                                        <td style="display: none;">
                                            <span class="legend-indicator bg-danger"></span>Suspended
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-field="name">
                                            MMO Management Information Systems
                                        </td>
                                        <td>
                                            <a class="js-edit btn btn-sm btn-white" href="javascript:;">
                                                <i class="js-edit-icon tio-edit"></i> Edit
                                            </a>
                                        </td>   
                                        <td style="display: none;">Argentina <span class="text-hide">Code: AR</span></td>
                                        <td style="display: none;">
                                            <span class="legend-indicator bg-danger"></span>Suspended
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-field="name">
                                            MMO Management Information Systems
                                        </td>
                                        <td>
                                            <a class="js-edit btn btn-sm btn-white" href="javascript:;">
                                                <i class="js-edit-icon tio-edit"></i> Edit
                                            </a>
                                        </td>   
                                        <td style="display: none;">Argentina <span class="text-hide">Code: AR</span></td>
                                        <td style="display: none;">
                                            <span class="legend-indicator bg-danger"></span>Suspended
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-field="name">
                                            MMO Management Information Systems
                                        </td>
                                        <td>
                                            <a class="js-edit btn btn-sm btn-white" href="javascript:;">
                                                <i class="js-edit-icon tio-edit"></i> Edit
                                            </a>
                                        </td>   
                                        <td style="display: none;">Argentina <span class="text-hide">Code: AR</span></td>
                                        <td style="display: none;">
                                            <span class="legend-indicator bg-danger"></span>Suspended
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-field="name">
                                            MMO Management Information Systems
                                        </td>
                                        <td>
                                            <a class="js-edit btn btn-sm btn-white" href="javascript:;">
                                                <i class="js-edit-icon tio-edit"></i> Edit
                                            </a>
                                        </td>   
                                        <td style="display: none;">Argentina <span class="text-hide">Code: AR</span></td>
                                        <td style="display: none;">
                                            <span class="legend-indicator bg-danger"></span>Suspended
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-field="name">
                                            MMO Management Information Systems
                                        </td>
                                        <td>
                                            <a class="js-edit btn btn-sm btn-white" href="javascript:;">
                                                <i class="js-edit-icon tio-edit"></i> Edit
                                            </a>
                                        </td>   
                                        <td style="display: none;">Argentina <span class="text-hide">Code: AR</span></td>
                                        <td style="display: none;">
                                            <span class="legend-indicator bg-danger"></span>Suspended
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-field="name">
                                            MMO Management Information Systems
                                        </td>
                                        <td>
                                            <a class="js-edit btn btn-sm btn-white" href="javascript:;">
                                                <i class="js-edit-icon tio-edit"></i> Edit
                                            </a>
                                        </td>   
                                        <td style="display: none;">Argentina <span class="text-hide">Code: AR</span></td>
                                        <td style="display: none;">
                                            <span class="legend-indicator bg-danger"></span>Suspended
                                        </td>
                                    </tr>
                                              <tr>
                                        <td data-field="name">
                                            MMO Management Information Systems
                                        </td>
                                        <td>
                                            <a class="js-edit btn btn-sm btn-white" href="javascript:;">
                                                <i class="js-edit-icon tio-edit"></i> Edit
                                            </a>
                                        </td>   
                                        <td style="display: none;">Argentina <span class="text-hide">Code: AR</span></td>
                                        <td style="display: none;">
                                            <span class="legend-indicator bg-danger"></span>Suspended
                                        </td>
                                    </tr>          <tr>
                                        <td data-field="name">
                                            MMO Management Information Systems
                                        </td>
                                        <td>
                                            <a class="js-edit btn btn-sm btn-white" href="javascript:;">
                                                <i class="js-edit-icon tio-edit"></i> Edit
                                            </a>
                                        </td>   
                                        <td style="display: none;">Argentina <span class="text-hide">Code: AR</span></td>
                                        <td style="display: none;">
                                            <span class="legend-indicator bg-danger"></span>Suspended
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-field="name">
                                            MMO Management Information Systems
                                        </td>
                                        <td>
                                            <a class="js-edit btn btn-sm btn-white" href="javascript:;">
                                                <i class="js-edit-icon tio-edit"></i> Edit
                                            </a>
                                        </td>   
                                        <td style="display: none;">Argentina <span class="text-hide">Code: AR</span></td>
                                        <td style="display: none;">
                                            <span class="legend-indicator bg-danger"></span>Suspended
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-field="name">
                                            MMO Management Information Systems
                                        </td>
                                        <td>
                                            <a class="js-edit btn btn-sm btn-white" href="javascript:;">
                                                <i class="js-edit-icon tio-edit"></i> Edit
                                            </a>
                                        </td>   
                                        <td style="display: none;">Argentina <span class="text-hide">Code: AR</span></td>
                                        <td style="display: none;">
                                            <span class="legend-indicator bg-danger"></span>Suspended
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
                </div>
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










</div>