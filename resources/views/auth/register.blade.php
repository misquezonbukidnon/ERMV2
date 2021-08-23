@extends('layouts.app')
@section('content')
    <livewire:signup :offices="$offices" :roles="$roles" :positions="$positions"/>
@endsection