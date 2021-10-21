@extends('layouts.app')
@section('content')
<div class="content container-fluid">
     <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
               <li class="breadcrumb-item"><a href="{{ route('settings_records') }}">Settings</a></li>
          </ol>
     </nav>


     <div class="row">
          <div class="col-lg-3 mb-3">
               <livewire:global.user-profile.user-profile />
               <div class="mt-3 mb-3">
                    <!-- user events here -->
               </div>
          </div>
          <div class="col-lg-9">
               <div class="row">
                    <div class="col-md-12  mb-3">
                         <livewire:page.settings.settings-import />
                    </div>
                    <div class="col-md-12  mb-3">
                         <livewire:page.settings.settings-export />
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection