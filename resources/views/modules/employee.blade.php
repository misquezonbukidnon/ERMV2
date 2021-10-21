@extends('layouts.app')
@section('content')
<div class="content container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('employee_create') }}">New Records</a></li>
        </ol>
    </nav>


    <div class="row">
        <div class="col-lg-3">
            <livewire:global.user-profile.user-profile />
            <div class="mt-3 mb-3">

            </div>
        </div>
        <div class="col-lg-9">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <livewire:page.record.record-employeetable />
                </div>
                <div class="col-md-12 mb-5">
                    <livewire:page.record.index/>
                </div>
            </div>
        </div>
    </div>
</div>
<livewire:global.modal.modal-dashboard.dashboard-showemployee />
<livewire:page.modal.modal-record.record-editrecord />

@endsection