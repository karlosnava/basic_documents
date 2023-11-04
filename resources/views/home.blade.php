@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="font-semibold text-2xl mb-5">¡Hola, {{ Auth::user()->name }}!</div>
    @livewire('show-documents')
@endsection
