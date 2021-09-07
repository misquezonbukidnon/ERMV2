<div class="card">
    <!-- Header -->
    <div class="card-header">
        <div class="row justify-content-between align-items-center flex-grow-1">
            <div class="col-12 col-md">
                <div class="card-header-titler">
                    <h5 class="card-header-title">Employees</h5>
                </div>
            </div>

        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive datatable-custom">
            <table id="officetablelivewire"
                class="table table-striped  table-lg table-borderless table-thead-bordered table-nowrap table-align-middle">
                <thead class="thead-light ">
                    <tr>
                        <th>
                            <button wire:click="sortBy('name')" class="btn ml-n3 " style="height: 2.5rem">
                                <p class="font-weight-bold">Name <i class="tio-double-caret-vertical text-primary"></i>
                                </p>
                            </button>
                        </th>
                        <th>
                            <button wire:click="sortBy('name')" class="btn ml-n3 " style="height: 2.5rem">
                                <p class="font-weight-bold">Position <i
                                        class="tio-double-caret-vertical text-primary"></i>
                                </p>
                            </button>
                        </th>
                        <th>
                            <button wire:click="sortBy('name')" class="btn ml-n3 " style="height: 2.5rem">
                                <p class="font-weight-bold">Classification <i
                                        class="tio-double-caret-vertical text-primary"></i>
                                </p>
                            </button>
                        </th>
                        <th>
                            <button wire:click="sortBy('name')" class="btn ml-n3 " style="height: 2.5rem">
                                <p class="font-weight-bold">Status <i
                                        class="tio-double-caret-vertical text-primary"></i>
                                </p>
                            </button>
                        </th>
                        <th>
                            <button class="btn ml-n3 " style="height: 2.5rem">
                                <p class="font-weight-bold">Action</p>
                            </button>
                        </th>
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
                        <th>

                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <span class=" d-block mb-0">Ivan Tae</span>
                        </td>
                        <td>
                            <span class="d-block mb-0">Designer</span>
                            <span class="d-block font-size-sm">IT department</span>
                        </td>
                        <td>
                            <span class=" d-block mb-0">Legendary Jav</span>
                        </td>
                        <td>
                            <span class=" d-block mb-0">Casual</span>
                        </td>
                        <td>
                            <button data-toggle="modal" data-target="#editrecordmodal" type="button"
                                class="btn btn-outline-primary btn-xs btn-icon ">
                                <i class="tio-edit"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>