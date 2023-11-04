@extends('layouts.app')

@section('title', "Editar {$tipo->tip_nombre}")

@section('content')
    <form action="{{ route('types.update', $tipo) }}" method="POST">
        @csrf
        @method("PUT")
        
        <x-input label="Nombre" name="tip_nombre" value="{{ old('tip_nombre', $tipo->tip_nombre) }}" />
        <x-input label="Prefijo" name="" value="{{ old('tip_prefijo', $tipo->tip_prefijo) }}" disabled />

        <div class="my-5">
            <x-button label="Actualizar tipo de documento" />
        </div>
    </form>
@endsection
