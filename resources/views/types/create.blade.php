@extends('layouts.app')

@section('title', "Crear nuevo tipo de documento")

@section('content')
    <form action="{{ route('types.store') }}" method="POST">
        @csrf
        <x-input label="Nombre" name="tip_nombre" value="{{ old('tip_nombre') }}" />
        <x-input label="Prefijo (No podrás cambiarlo)" name="tip_prefijo" value="{{ old('tip_prefijo') }}" />

        <div class="my-5">
            <x-button label="Crear tipo de documento" />
        </div>
    </form>
@endsection
