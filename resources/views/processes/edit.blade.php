@extends('layouts.app')

@section('title', "Editar {$proceso->tip_nombre}")

@section('content')
    <form action="{{ route('processes.update', $proceso) }}" method="POST">
        @csrf
        @method("PUT")
        
        <x-input label="Nombre" name="pro_nombre" value="{{ old('pro_nombre', $proceso->pro_nombre) }}" />
        <x-input label="Prefijo" name="" value="{{ old('pro_prefijo', $proceso->pro_prefijo) }}" disabled />

        <div class="my-5">
            <x-button label="Actualizar proceso" />
        </div>
    </form>
@endsection
