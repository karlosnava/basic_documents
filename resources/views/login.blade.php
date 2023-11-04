@extends('layouts.app')
@section('title', 'Iniciar sesión')

@section('content')
    <div class="bg-white shadow-md rounded-2xl mx-auto my-10 md:my-20 w-11/12 lg:w-8/12">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <img
                class="h-full rounded-2xl hidden md:block"
                src="{{ asset('images/login_image.jpeg') }}">
    
            <div class="px-8 py-10">
                @livewire('login')
            </div>
        </div>
    </div>
@endsection
