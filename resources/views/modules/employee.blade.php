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
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-3">
                    <livewire:component.dashboard.userprofile />
                    <br>
                    <livewire:component.dashboard.userevents />
                </div>
                <div class="col-lg-9">
                    <livewire:component.record.addrecord />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection