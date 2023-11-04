@extends('layouts.app')

@section('title', "Lista de tipos de documentos")

@section('content')
    <div class="flex items-center justify-between my-5">
        <h1 class="font-bold text-2xl">Tipos de documentos ({{ $tipos->count() }})</h1>
        <a href="{{ route('types.create') }}" class="bg-blue-500 text-white flex items-center shadow-md rounded-full font-semibold px-5 py-2 hover:bg-blue-600">
            <i class="fas fa-plus"></i>
            <span class="hidden md:block ml-2">Nuevo</span>
        </a>
    </div> 
    
    @foreach ($tipos as $tipo)
        <a href="{{ route('types.show', $tipo) }}" class="bg-white block border rounded-md px-4 py-2 mb-2 hover:border-blue-500">
            [{{ $tipo->tip_prefijo }}] {{ $tipo->tip_nombre }}
        </a>
    @endforeach
@endsection
