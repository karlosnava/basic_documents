@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="m-10">
        @livewire('show-documents')
    </div>
@endsection
