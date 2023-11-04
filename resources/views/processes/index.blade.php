@extends('layouts.app')

@section('title', "Lista de procesos")

@section('content')
    <div class="flex items-center justify-between my-5">
        <h1 class="font-bold text-2xl">Procesos ({{ $processes->count() }})</h1>
        <a href="{{ route('processes.create') }}" class="bg-blue-500 text-white font-semibold rounded-md px-5 py-2">Nuevo proceso</a>
    </div> 
    
    @foreach ($processes as $process)
        <a href="{{ route('processes.show', $process) }}" class="bg-white block border rounded-md px-4 py-2 mb-2">[{{ $process->pro_prefijo }}] {{ $process->pro_nombre }}</a>
    @endforeach
@endsection
