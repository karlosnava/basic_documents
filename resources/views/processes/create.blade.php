@extends('layouts.app')

@section('title', "Crear nuevo tipo de documento")

@section('content')
    <div class="text-center font-bold text-xl"><i class="fas fa-plus"></i> Nuevo proceso</div>
    <hr class="my-5">

    <form action="{{ route('processes.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <x-input label="Nombre" name="pro_nombre" value="{{ old('pro_nombre') }}" :autofocus="true" />
        </div>
        <x-input label="Prefijo (No podrás cambiarlo)" name="pro_prefijo" value="{{ old('pro_prefijo') }}" />

        <div class="my-5">
            <x-button label="Crear proceso" />
            <div class=" text-center mt-4">
                <a href="{{ route('processes.index') }}" class="text-red-400 hover:text-red-600">Cancelar</a>
            </div>
        </div>
    </form>
@endsection
