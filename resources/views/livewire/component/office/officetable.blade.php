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
        <div class="table-responsive datatable-custom">
            <table id="officedatatable"
                class="table table-striped  table-lg table-borderless table-thead-bordered table-nowrap table-align-middle"
                data-hs-datatables-options='{
                                        "columnDefs": [{
                                            "orderable": true
                                        }],
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
                        <th>Office</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($offices as $office)
                    <tr>
                        <td>
                            <span class="d-block h5 mb-0">{{ $office->abbr }}</span>
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
        </div>
    </div>
    <div class="card-footer">
        <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
            <div class="col-sm mb-2 mb-sm-0">

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