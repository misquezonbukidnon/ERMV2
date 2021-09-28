<div wire:ignore class="row">
    <div class="col-lg-12">
        <div class="card mt-3">
            <div class="card-header">
                <h5 class="card-header-title">Employees</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive datatable-custom">
                    <table id="columnSearchDatatable" class="table w-100 table-striped table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
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
                                    <input type="text" id="column1_search" class="form-control form-control-sm" placeholder="Search names">
                                </th>
                                <th>
                                    <select id="column2_search" class="js-select2-custom" data-hs-select2-options='{
                                            "minimumResultsForSearch": "Infinity",
                                            "customClass": "custom-select custom-select-sm text-capitalize"
                                            }'>
                                        <option value="">Any</option>
                                        @foreach($offices as $office)
                                        <option value="{{$office-> positions ->name}}">{{ $office->positions->name }}</option>
                                        @endforeach
                                    </select>
                                </th>
                                <th>
                                    <select id="column3_search" class="js-select2-custom" data-hs-select2-options='{
                                            "minimumResultsForSearch": "Infinity",
                                            "customClass": "custom-select custom-select-sm text-capitalize"
                                            }'>
                                        <option value="">Any</option>
                                        @foreach($classifications as $classifications)
                                        <option value="{{$classifications -> classifications -> name}}">{{ $classifications -> classifications ->name }}</option>
                                        @endforeach
                                    </select>
                                </th>
                                <th>
                                    <select id="column4_search" class="js-select2-custom" data-hs-select2-options='{
                                            "minimumResultsForSearch": "Infinity",
                                            "customClass": "custom-select custom-select-sm text-capitalize"
                                            }'>
                                        <option value="">Any</option>
                                        @foreach($employmentstatuses as $employmentstatuses)
                                        <option value="{{$employmentstatuses -> employment_statuses -> name}}">{{ $employmentstatuses -> employment_statuses -> name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </th>
                            </tr>
                        </thead>

                        <tbody >
                            @foreach($employees as $employee)
                            <tr>
                                <td wire:click="showEmployee({{ $employee->id }})">
                                    <a class="media align-items-center pe-auto" style="cursor: pointer;" data-toggle="modal" data-target="#employeemodal">
                                        <div class="avatar avatar-circle mr-3" data-toggle="tooltip" data-placement="right" data-html="true" title="{{$employee->employees->lastname
                                            }} {{ $employee->employees->firstname }} {{
                                            $employee->employees->suffix }}">
                                            <img class="avatar-img" src="../assets/img/160x160/img10.jpg" alt="Image Description">
                                        </div>
                                        <span class="d-block h5 text-hover-primary mb-0">{{$employee->employees->lastname }} {{ $employee->employees->firstname }} {{
                                            $employee->employees->suffix }} </span>
                                    </a>
                                </td>
                                <td>
                                    <span class="d-block h5 mb-0">{{ $employee->positions->name }}</span>
                                    <span class="d-block font-size-sm">{{ $employee->offices->name }}</span>
                                </td>
                                <td>{{ $employee->classifications->name }} <span class="text-hide">Code: GB</span></td>
                                <td>
                                    {{ $employee->employment_statuses->name }}
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
                    <div class="col-sm-2 mb-2 mb-sm-0">
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

                    <div class="col-sm-auto sink-pagination">
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