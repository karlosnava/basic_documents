@extends('layouts.app')

@section('title', "Editar {$proceso->tip_nombre}")

@section('content')
    <div class="text-center font-bold text-xl"><i class="fas fa-pen"></i> Actualizar proceso</div>
    <hr class="my-5">

    <form action="{{ route('processes.update', $proceso) }}" method="POST">
        @csrf
        @method("PUT")
        
        <div class="mb-4">
            <x-input label="Nombre" name="pro_nombre" value="{{ old('pro_nombre', $proceso->pro_nombre) }}" />
        </div>
        <x-input label="Prefijo" name="" value="{{ old('pro_prefijo', $proceso->pro_prefijo) }}" disabled />

        <div class="my-5">
            <x-button label="Actualizar proceso" />
            <div class=" text-center mt-4">
                <a href="{{ route('processes.show', $proceso) }}" class="text-red-400 hover:text-red-600">Cancelar</a>
            </div>
        </div>
    </form>
@endsection
