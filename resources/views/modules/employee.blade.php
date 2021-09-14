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
            <livewire:component.dashboard.userprofile />
            <div class="mt-3">
                <livewire:component.dashboard.userevents />
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <livewire:component.record.addrecordcomponent.employmenttable />
                </div>
                <div class="col-md-6">
                    <livewire:component.record.addrecordcomponent.addemployeeform />
                </div>
            </div>
        </div>
    </div>
</div>
<livewire:component.modal.record.record-edit />
@endsection