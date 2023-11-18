@extends('website.master_website')
@section('mainContainer')
        @livewire('news-hero-page-component')
        @livewire('block-news-component', ['league' => 9])
        @livewire('block-news-component', ['league' => 1])
        @livewire('block-news-component', ['league' => 3])
@endsection
