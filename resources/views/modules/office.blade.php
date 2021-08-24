@extends('layouts.app')
@section('content')
<div class="content container-fluid">
    <!-- ********************************************************************Breadcrumb (Can be converted to Component)************************************************* -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('office') }}">Office</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-3">
                    <div id="accountSidebarNav"></div>
                    <livewire:component.office.addofficeform />
                    <br>
                    <livewire:component.dashboard.userprofile />
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-8 mb-5">
                            <livewire:component.office.officetable :offices="$offices" />
                        </div>
                        <div class="col-lg-4 mb-3">
                            <livewire:component.dashboard.userevents />
                        </div>
                    </div>

                    <!-- End Card -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Body -->
</div>

<!-- End Card -->




<!-- ******************************************************MODAL EDIT OFFICE******************************************************************* -->
<div class="modal fade" id="officeEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Office</h5>
                    <button type="button" class="btn btn-xs btn-icon btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
                        <i class="tio-clear tio-lg"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Input Group -->
                    <div class="form-group">
                        <label for="formControlPilledFullName" class="input-label">Abbreviation</label>

                        <input type="text" class="form-control form-control-pill" id="Abbreviation" placeholder="Abbreviation" aria-label="Abbreviation">
                    </div>
                    <!-- End Input Group -->

                    <!-- Input Group -->
                    <div class="form-group">
                        <label for="formControlPilledEmail" class="input-label">Office Name</label>

                        <input type="text" class="form-control form-control-pill" id="OfficeName" placeholder="Office Name" aria-label="OfficeName">
                    </div>
                    <!-- End Input Group -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection