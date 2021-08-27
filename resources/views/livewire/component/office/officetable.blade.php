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
                        <!-- <input id="officeinputSearch" type="search" class="form-control" placeholder="Search Office"
                            aria-label="Search users"> -->
                        <input wire:model="search" type="search" class="form-control" placeholder="Search Office"
                            aria-label="Search users">
                    </div>
                    <!-- End Search -->
                </form>
                <!-- End Filter -->
            </div>
        </div>
    </div>
    <div class="card-body">
        @if (session()->has('table_updated'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <i class="tio-checkmark-circle mt-1 mr-1"></i> {{ session('table_updated') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="tio-clear tio-lg"></i>
            </button>
        </div>
        @endif
        <div class="table-responsive datatable-custom">
            <table id="officetablelivewire"
                class="table table-striped  table-lg table-borderless table-thead-bordered table-nowrap table-align-middle">
                <thead class="thead-light ">
                    <tr>
                        <th>
                            <button wire:click="sortBy('name')" class="btn ml-n3 " style="height: 2.5rem">
                                <p class="font-weight-bold">Office <i
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
                </thead>

                <tbody>
                    @foreach($offices as $office)
                    <tr>
                        <td>
                            <span class=" d-block h5 mb-0">{{ $office->abbr }}</span>
                            <span class="d-block font-size-sm">{{ $office->name }}</span>
                        </td>
                        <td>
                            <button wire:click="officeModalEdit({{ $office->id }})" type="button"
                                class="btn btn-outline-primary btn-xs btn-icon " data-toggle="modal"
                                data-target="#officeEditModal">
                                <i class="tio-edit"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @if (count($offices) === 0)
            <div class="text-center p-4">
                <img class="mb-3" src="./assets/svg/illustrations/sorry.svg" alt="Image Description"
                    style="width: 7rem;">
                <p class="mb-0">No data to show</p>
            </div>
            @endif
        </div>
    </div>
    <div class="card-footer">
        <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
            <div wire:ignore class="col-sm mb-2 mb-sm-0">
                <div class="d-flex w-75 align-items-center">
                    <div class="card-text mr-1">Showing</div>
                    <!-- <button wire:click="resetpageRoute">reset</button> -->
                    <div class="">
                        <button class="btn btn-xs " wire:click="resetpageRoute">
                            <select wire:model="pagecount" class="form-control  custom-select " size="0"
                                style="opacity: 1; width: 5rem" data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity",
                                "placeholder": "10"
                                }'>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">30</option>
                                <option value="100">100</option>
                            </select>
                        </button>

                    </div>
                    <div class="card-text ml-1 ">results out of {{(count($OfficesCount))}} </div>
                </div>
            </div>

            <div class="col-sm-auto">
                <div class="d-flex justify-content-center justify-content-sm-end">
                    <!-- Pagination -->
                    {{ $offices->links() }}
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Card -->