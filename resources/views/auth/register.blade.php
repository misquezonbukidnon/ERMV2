@extends('layouts.app')
@section('content')
    <livewire:component.auth.signup :offices="$offices" :roles="$roles" :positions="$positions"/>
@endsection