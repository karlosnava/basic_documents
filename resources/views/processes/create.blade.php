@extends('layouts.app')

@section('title', "Crear nuevo tipo de documento")

@section('content')
    <form action="{{ route('processes.store') }}" method="POST">
        @csrf
        <x-input label="Nombre" name="pro_nombre" value="{{ old('pro_nombre') }}" />
        <x-input label="Prefijo (No podrás cambiarlo)" name="pro_prefijo" value="{{ old('pro_prefijo') }}" />

        <div class="my-5">
            <x-button label="Crear proceso" />
        </div>
    </form>
@endsection
