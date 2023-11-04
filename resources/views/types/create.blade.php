@extends('layouts.app')

@section('title', "Crear nuevo tipo de documento")

@section('content')
    <div class="text-center font-bold text-xl"><i class="fas fa-plus"></i> Nuevo tipo de documento</div>
    <hr class="my-5">

    <form action="{{ route('types.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <x-input label="Nombre" name="tip_nombre" value="{{ old('tip_nombre') }}" :autofocus="true" />
        </div>
        <x-input label="Prefijo (No podrás cambiarlo)" name="tip_prefijo" value="{{ old('tip_prefijo') }}" />

        <div class="my-5">
            <x-button label="Crear tipo de documento" />
            <div class=" text-center mt-4">
                <a href="{{ route('types.index') }}" class="text-red-400 hover:text-red-600">Cancelar</a>
            </div>
        </div>
    </form>
@endsection
