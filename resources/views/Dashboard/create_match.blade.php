@extends('master_dashboard')

@section('title', 'Create Matches')
@section('content')
    @livewire('create-matche-component', [], key(1))
@endsection

@section('scripts')
    <script>
        Livewire.emit('match_updated')
    </script>
@endsection
