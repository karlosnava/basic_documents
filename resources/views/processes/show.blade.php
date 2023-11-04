@extends('layouts.app')

@section('title', $proceso->pro_nombre)

@section('content')
    <div class="w-11/12 md:w-6/12  mx-auto my-10">
        <div class="mb-4">
            <a href="{{ route('processes.index') }}" class="text-blue-500 hover:text-blue-700">◂Regresar al listado</a>
        </div>

        <div class="flex items-center justify-between">
            <h1 class="font-bold text-3xl">{{ $proceso->pro_nombre }}</h1>
            <a href="{{ route('processes.edit', $proceso) }}" class="bg-orange-500 text-white rounded-full px-4 hover:bg-orange-600">Editar</a>
        </div>
        <div class="text-gray-500 text-xs mt-3">
            <div>Creación: {{ $proceso->created_at }}</div>
            <div>Última actualización: {{ $proceso->updated_at }}</div>
        </div>

        <hr class="my-5">
        <div class="font-semibold mb-3">Documentos con este proceso ({{ $proceso->documents->count() }})</div>

        @forelse ($proceso->documents as $document)
            <a href="{{ route('documents.show', $document) }}" class="bg-white block border px-4 py-2 mb-2 hover:bg-gray-100">
                {{ $document->doc_nombre }}
            </a>
        @empty
            <div class="text-orange-500">No hay documentos relacionados con este proceso.</div>

            <form action="{{ route('processes.destroy', $proceso) }}" method="POST" class="mt-2">
                @csrf
                @method("DELETE")
                <button class="bg-red-400 text-white rounded-full px-4 hover:bg-red-500">Eliminar</button>
            </form>
        @endforelse
    </div>
@endsection
