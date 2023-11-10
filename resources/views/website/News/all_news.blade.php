@extends('master_website')


@section('title', 'Live-Match | All News ')
@section('content')
    {{-- start content --}}
        @livewire('all-news-component')
    {{-- end content --}}
@endsection
