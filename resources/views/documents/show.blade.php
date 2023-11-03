@extends('layouts.app')

@section('title', $document->doc_nombre)

@section('content')
    <div class="w-11/12 md:w-6/12  mx-auto my-10">
        <div class="mb-4">
            <a href="{{ route('home') }}" class="text-blue-500 hover:text-blue-700">◂Regresar al listado</a>
        </div>

        <div class="flex items-center justify-between">
            <div class="text-gray-700 font-semibold">{{ $document->doc_codigo }}</div>
            
            <div class="flex justify-between">
                <div>
                    <a href="{{ route('documents.edit', $document) }}" class="bg-orange-500 text-white font-semibold rounded-full px-5 hover:bg-orange-600">Editar</a>
                </div>

                <form action="{{ route('documents.destroy', $document) }}" method="POST" class="ml-4">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-400 text-xs hover:text-red-500">Eliminar</button>
                </form>
            </div>
        </div>

        <div>
            <h1 class="font-bold text-3xl">{{ $document->doc_nombre }}</h1>
            <div class="text-gray-500 text-xs mt-3">
                <div>Creación: {{ $document->created_at }}</div>
                <div>Última actualización: {{ $document->updated_at }}</div>
            </div>
        </div>

        <div class="bg-white shadow-md rounded-md px-6 py-4 my-5">{!! $document->doc_contenido !!}</div>
    </div>
@endsection