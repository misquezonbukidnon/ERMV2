<div class="content container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"></a></li>
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <livewire:component.dashboard.userprofile />
                    <div class="mt-3">
                        <livewire:component.dashboard.userevents />
                    </div>
                </div>
                <div class="col-lg-9 mb-3">
                    <!-- total summary -->
                    <div class="row">
                        <div class="col-sm-2  mb-3" data-toggle="tooltip" data-placement="bottom" data-html="true" title="Total Regular Employees: {{ $regular }}">
                            <!-- Card -->
                            <a class="card card-hover-shadow  w-100 h-100" href="#">
                                <div class="card-body">
                                    <h6 class="card-subtitle d-flex justify-content-center">Total Regular</h6>
                                    <div class=" d-flex justify-content-center w-100">
                                        <div class="mt-3">
                                            <span class="card-title h1">{{ $regular }}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- End Card -->
                        </div>

                        <div class="col-sm-2 mb-3" data-toggle="tooltip" data-placement="bottom" data-html="true" title="Total Casual Employees: {{ $casual }}">
                            <!-- Card -->
                            <a class="card card-hover-shadow  w-100 h-100" href="#">
                                <div class="card-body">
                                    <h6 class="card-subtitle d-flex justify-content-center">Total Casual</h6>
                                    <div class=" d-flex justify-content-center w-100">
                                        <div class="mt-3">
                                            <span class="card-title h1">{{ $casual }}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- End Card -->
                        </div>

                        <div class="col-sm-2  mb-3"  data-toggle="tooltip" data-placement="bottom" data-html="true" title="Total Job Order Employees: {{ $jobOrder }}">
                            <!-- Card -->
                            <a class="card card-hover-shadow  w-100 h-100" href="#">
                                <div class="card-body">
                                    <h6 class="card-subtitle d-flex justify-content-center">Total Job Order</h6>
                                    <div class=" d-flex justify-content-center w-100">
                                        <div class="mt-3">
                                            <span class="card-title h1">{{ $jobOrder }}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- End Card -->
                        </div>

                        <div class="col-sm-2  mb-3"   data-toggle="tooltip" data-placement="bottom" data-html="true" title="Total Honorarium Employees: {{ $honorarium }}">
                            <!-- Card -->
                            <a class="card card-hover-shadow  w-100 h-100" href="#">
                                <div class="card-body">
                                    <h6 class="card-subtitle d-flex justify-content-center ">Total Honorarium</h6>
                                    <div class=" d-flex justify-content-center w-100">
                                        <div class="mt-3">
                                            <span class="card-title h1">{{ $honorarium }}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- End Card -->
                        </div>

                        <div class="col-sm-2  mb-3"  data-toggle="tooltip" data-placement="bottom" data-html="true" title="Total Elective Employees:  {{ $elective }}">
                            <!-- Card -->
                            <a class="card card-hover-shadow  w-100 h-100" href="#">
                                <div class="card-body">
                                    <h6 class="card-subtitle d-flex justify-content-center">Elective</h6>
                                    <div class=" d-flex justify-content-center w-100">
                                        <div class="mt-3">
                                            <span class="card-title h1">{{ $elective }}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- End Card -->
                        </div>

                        <div class="col-sm-2  mb-3" data-toggle="tooltip" data-placement="bottom" data-html="true" title="Total Co-Terminus Employees: {{ $co_terminus }}">
                            <!-- Card -->
                            <a class="card card-hover-shadow  w-100 h-100" href="#">
                                <div class="card-body">
                                    <h6 class="card-subtitle d-flex justify-content-center">Co-Terminus</h6>
                                    <div class=" d-flex justify-content-center w-100">
                                        <div class="mt-3">
                                            <span class="card-title h1">{{ $co_terminus }}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- End Card -->
                        </div>
                    </div>

                    <!-- employee datatable -->
                    <livewire:component.dashboard.dashboardtable />

                </div>
            </div>
        </div>
    </div>
</div>
<livewire:component.modal.dashboard.employee-dashboard />
<livewire:component.modal.dashboard.welcome />