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
            <table id="officetablelivewire" class="table table-striped  table-lg table-borderless table-thead-bordered table-nowrap table-align-middle">
                <thead class="thead-light ">
                    <tr>
                        <th>
                            <button wire:click="sortBy('firstname')" class="btn ml-n3 " style="height: 2.5rem">
                                <p class="font-weight-bold">Name <i class="tio-double-caret-vertical text-primary"></i>
                                </p>
                            </button>
                        </th>
                        <th>
                            <button wire:click="sortBy('name')" class="btn ml-n3 " style="height: 2.5rem">
                                <p class="font-weight-bold">Position <i class="tio-double-caret-vertical text-primary"></i>
                                </p>
                            </button>
                        </th>
                        <th>
                            <button wire:click="sortBy('name')" class="btn ml-n3 " style="height: 2.5rem">
                                <p class="font-weight-bold">Classification <i class="tio-double-caret-vertical text-primary"></i>
                                </p>
                            </button>
                        </th>
                        <th>
                            <button wire:click="sortBy('name')" class="btn ml-n3 " style="height: 2.5rem">
                                <p class="font-weight-bold">Status <i class="tio-double-caret-vertical text-primary"></i>
                                </p>
                            </button>
                        </th>
                        <th>
                            <button class="btn ml-n3 " style="height: 2.5rem">
                                <p class="font-weight-bold">Action</p>
                            </button>
                        </th>
                    </tr>
                    <tr wire:ignore>
                        <th>
                            <input type="text" wire:model="search" id="column1_search" class="form-control form-control-sm" placeholder="Search names">
                        </th>
                        <th>
                            <select id="column2_search" class="js-select2-custom" data-hs-select2-options='{
                                            "minimumResultsForSearch": "Infinity",
                                            "customClass": "custom-select custom-select-sm text-capitalize"
                                            }'>
                                <option>Any</option>
                                @foreach($offices as $office)
                                <option value="{{$office->id}}">{{ $office->name }}</option>
                                @endforeach
                            </select>
                            </select>
                        </th>
                        <th>
                            <select id="column3_search" class="js-select2-custom" data-hs-select2-options='{
                                            "minimumResultsForSearch": "Infinity",
                                            "customClass": "custom-select custom-select-sm text-capitalize"
                                            }'>
                                <option>any</option>
                                @foreach($classifications as $classification)
                                <option value="{{$classification->id}}">{{ $classification->name }}
                                </option>
                                @endforeach
                            </select>
                        </th>
                        <th>
                            <select id="column4_search" class="js-select2-custom" data-hs-select2-options='{
                                            "minimumResultsForSearch": "Infinity",
                                            "customClass": "custom-select custom-select-sm text-capitalize"
                                            }'>
                                <option value="">Any</option>
                                @foreach($employmentstatuses as $employmentstatus)
                                <option value="{{$employmentstatus->id}}">{{ $employmentstatus->name
                                                }}
                                </option>
                                @endforeach
                            </select>
                        </th>
                        <th>

                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($employees as $employee)
                    <tr>
                        <td>
                            <span class=" d-block mb-0">{{ $employee->employees->firstname }} {{
                                $employee->employees->middlename }} {{
                                $employee->employees->lastname }} {{ $employee->employees->suffix }}</span>
                        </td>
                        <td>
                            <span class="d-block mb-0">{{ $employee->positions->name }}</span>
                            <span class="d-block font-size-sm">{{ $employee->offices->name }}</span>
                        </td>
                        <td>
                            <span class=" d-block mb-0">{{ $employee->classifications->name }}</span>
                        </td>
                        <td>
                            <span class=" d-block mb-0">{{ $employee->employment_statuses->name }}</span>
                        </td>
                        <td>
                            <button wire:click="employeeModalEdit{{ $employee->id }}" data-toggle="modal" data-target="#editrecordmodal" type="button" class="btn btn-outline-primary btn-xs btn-icon ">
                                <i class="tio-edit"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @if (count($employees) === 0)
            <div class="text-center p-4">
                <img class="mb-3" src="../assets/svg/illustrations/sorry.svg" alt="Image Description"
                    style="width: 7rem;">
                <p class="mb-0">No data to show</p>
            </div>
            @endif
        </div>
        <div class="d-flex justify-content-center justify-content-sm-end">
            <!-- Pagination -->
            {{ $employees->links() }}
        </div>
    </div>
</div>