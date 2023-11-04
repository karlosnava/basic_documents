@extends('layouts.app')

@section('title', "Editar {$tipo->tip_nombre}")

@section('content')
    <div class="text-center font-bold text-xl"><i class="fas fa-pen"></i> Actualizar tipo de documento</div>
    <hr class="my-5">

    <form action="{{ route('types.update', $tipo) }}" method="POST">
        @csrf
        @method("PUT")
        
        <div class="mb-4">
            <x-input label="Nombre" name="tip_nombre" value="{{ old('tip_nombre', $tipo->tip_nombre) }}" :autofocus="true" />
        </div>
        <x-input label="Prefijo" name="" value="{{ old('tip_prefijo', $tipo->tip_prefijo) }}" disabled />

        <div class="my-5">
            <x-button label="Actualizar tipo de documento" />
            <div class=" text-center mt-4">
                <a href="{{ route('types.show', $tipo) }}" class="text-red-400 hover:text-red-600">Cancelar</a>
            </div>
        </div>
    </form>
@endsection
