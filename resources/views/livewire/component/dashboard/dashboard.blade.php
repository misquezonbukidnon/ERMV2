<div class="content container-fluid">
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
                    <livewire:component.dashboard.dashboardtable />

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
<div class="modal fade" id="employeemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div id="addUserStepConfirmation" class="card card-lg border-0">
                <!-- Profile Cover -->
                <div class="profile-cover">
                    <div class="profile-cover-img-wrapper">
                        <img class="profile-cover-img" src="./assets/img/1920x400/img3.jpg" alt="Image Description">
                    </div>
                </div>
                <!-- End Profile Cover -->

                <!-- Avatar -->
                <div class="avatar avatar-xxl avatar-circle avatar-border-lg profile-cover-avatar">
                    <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                </div>
                <!-- End Avatar -->

                <!-- Body -->
                <div class="card-body ">
                    <dl class="row ">
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
                        <dd class="col-sm-6"><img class="avatar avatar-xss avatar-circle mr-1"
                                src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Great Britain Flag"> United
                            Kingdom</dd>

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