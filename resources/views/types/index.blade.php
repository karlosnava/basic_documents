@extends('layouts.app')

@section('title', "Lista de tipos de documentos")

@section('content')
    <div class="flex items-center justify-between my-5">
        <h1 class="font-bold text-2xl">Tipos de documentos ({{ $tipos->count() }})</h1>
        <a href="{{ route('types.create') }}" class="bg-blue-500 text-white font-semibold rounded-md px-5 py-2">Nuevo tipo de documento</a>
    </div> 
    
    @foreach ($tipos as $tipo)
        <a href="{{ route('types.show', $tipo) }}" class="bg-white block border rounded-md px-4 py-2 mb-2">[{{ $tipo->tip_prefijo }}] {{ $tipo->tip_nombre }}</a>
    @endforeach
@endsection
