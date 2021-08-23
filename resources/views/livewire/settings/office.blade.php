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
                            <form action="/office/create" method="POST">
                                <div class="form-group">
                                    <label for="formControlPilledFullName" class="input-label">Office name</label>
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
                            <table id="columnSearchOfficeDatatable" class="js-editable-table table  table-borderless table-thead-bordered  table-align-middle w-100" data-hs-datatables-options='{
                                        "order": [],
                                        "orderCellsTop": true,
                                        "pagination": "datatableWithFilterPagination"
                                    }'>
                                <thead class="thead-light">
                                    <tr>
                                        <th>Office</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <th class="bg-transparent border-0">
                                            <input type="text" id="column1_search" class="form-control form-control-sm w-75" placeholder="Search Office">
                                        </th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($officelist as $office)
                                    <tr>
                                        <td data-field="name">
                                            
                                            {{ $office->abbr }} - {{ $office->name }}
                                        </td>
                                        <td>
                                            <a class="js-edit btn btn-sm btn-white" href="javascript:;">
                                                <i class="js-edit-icon tio-edit"></i> Edit
                                            </a>
                                        </td>   
                                    </tr>
                                    @endforeach
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