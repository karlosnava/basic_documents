@extends('layouts.app')

@section('title', $tipo->tip_nombre)

@section('content')
    <div class="mb-4">
        <a href="{{ route('types.index') }}" class="text-blue-500 hover:text-blue-700">◂Regresar al listado</a>
    </div>

    <div class="flex items-center justify-between">
        <h1 class="font-bold text-3xl">{{ $tipo->tip_nombre }}</h1>
        <a href="{{ route('types.edit', $tipo) }}" class="bg-orange-500 text-white rounded-full text-xs px-4 py-1 hover:bg-orange-600">
            <i class="fas fa-pen"></i>
            Editar
        </a>
    </div>
    <div class="text-gray-500 text-xs mt-3">
        <div>Creación: {{ $tipo->created_at }}</div>
        <div>Última actualización: {{ $tipo->updated_at }}</div>
    </div>

    <hr class="my-5">
    <div class="font-semibold mb-3">Documentos con este tipo ({{ $tipo->documents->count() }})</div>

    @forelse ($tipo->documents as $document)
        <a href="{{ route('documents.show', $document) }}" class="bg-white block border rounded-md px-4 py-2 mb-2 hover:border-blue-500">
            <i class="fa-solid fa-file-lines text-orange-500"></i>
            {{ $document->doc_nombre }}
        </a>
    @empty
        <div class="text-orange-500">No hay documentos relacionados con este tipo de documento.</div>

        <form action="{{ route('types.destroy', $tipo) }}" method="POST" class="text-xs mt-2">
            @csrf
            @method("DELETE")
            <button class="bg-red-400 text-white rounded-full px-4 py-1 hover:bg-red-500">
                <i class="fas fa-trash"></i>
                Eliminar
            </button>
        </form>
    @endforelse
@endsection
