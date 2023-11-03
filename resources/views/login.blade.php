@extends('layouts.app')
@section('title', 'Iniciar sesión')

@section('content')
    <div class="bg-white shadow-md rounded-md p-5 mx-auto my-10 md:my-20 w-11/12 md:w-7/12 lg:w-5/12">
        @livewire('login')
    </div>
@endsection
