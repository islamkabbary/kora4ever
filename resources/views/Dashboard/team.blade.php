@extends('master_dashboard')

@section('styles')
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/assetsdash/MultiSelect/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/assetsdash/MultiSelect/css/jquery.multiselect.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/assetsdash/MultiSelect/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('assets/assetsdash/MultiSelect/css/style.css') }}">
@endsection

@section('title', 'Teams')
@section('content')
@livewire('team-component')
@endsection

@section('scripts')
    <script src="{{ asset('assets/assetsdash/MultiSelect/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/assetsdash/MultiSelect/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/assetsdash/MultiSelect/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/assetsdash/MultiSelect/js/jquery.multiselect.js') }}"></script>
    <script src="{{ asset('assets/assetsdash/MultiSelect/js/main.js') }}"></script>
@endsection
