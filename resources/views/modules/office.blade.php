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
                    <livewire:page.office.office-addofficeform/>
                    <br>
                    <livewire:global.user-profile.user-profile />
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <livewire:page.office.office-table />
                        </div>
                    </div>

                    <!-- End Card -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Body -->
</div>
<livewire:page.modal.modal-office.office-editoffice />
@endsection