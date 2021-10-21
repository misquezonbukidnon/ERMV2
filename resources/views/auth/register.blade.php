@extends('layouts.app')
@section('content')
    <livewire:auth.signup :offices="$offices" :roles="$roles" :positions="$positions"/>
@endsection