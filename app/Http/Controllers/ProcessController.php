<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ProProceso;

class ProcessController extends Controller
{
    public function index() {
        $processes = ProProceso::orderBy('pro_nombre')->get();
        return view("processes.index", compact('processes'));
    }

    public function create() {
        return view("processes.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'pro_nombre'  => ['required', 'string', 'min:3', 'max:30'],
            'pro_prefijo' => ['required', 'string', 'min:3', 'max:5', 'unique:pro_procesos']
        ]);

        $proceso = ProProceso::create([
            'pro_nombre'  => Str::upper($request->pro_nombre),
            'pro_prefijo' => Str::upper($request->pro_prefijo),
        ]);

        return redirect()->route('processes.show', $proceso)->with('message', 'Proceso creado correctamente.');
    }

    public function show(int $proceso) {
        $proceso = ProProceso::findOrFail($proceso);
        return view('processes.show', compact('proceso'));
    }

    public function edit(int $proceso) {
        $proceso = ProProceso::findOrFail($proceso);
        return view('processes.edit', compact('proceso'));
    }

    public function update(Request $request, int $proceso)
    {
        $proceso = ProProceso::findOrFail($proceso);
        $request->validate([
            'pro_nombre'  => ['required', 'string', 'min:3', 'max:30'],
        ]);

        $proceso->update(['pro_nombre' => Str::upper($request->pro_nombre)]);
        return redirect()->route('processes.show', $proceso)->with('message', 'Proceso editado correctamente.');
    }

    public function destroy(int $proceso)
    {
        ProProceso::findOrFail($proceso)->delete();
        return redirect()->route('processes.index')->with('message', 'Proceso eliminado correctamente.');
    }
}
