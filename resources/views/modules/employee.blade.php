@extends('layouts.app')
@section('content')
<div class="content container-fluid">
    <!-- ********************************************************************Breadcrumb (Can be converted to Component)************************************************* -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('employee_create') }}">New Records</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <livewire:component.record.addrecord />
            </div>
        </div>
    </div>
    <!-- End Body -->
</div>
@endsection