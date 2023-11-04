<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\TipTipoDoc;

class TypeController extends Controller
{
    public function index() {
        $tipos = TipTipoDoc::orderBy('created_at', 'desc')->get();
        return view('types.index', compact('tipos'));
    }

    public function create() {
        return view('types.create');
    }

    public function store(Request $request) {
        $request->validate([
            'tip_nombre'  => ['required', 'string', 'min:3', 'max:30'],
            'tip_prefijo' => ['required', 'string', 'min:3', 'max:10', 'unique:tip_tipo_docs']
        ]);

        $tipo = TipTipoDoc::create([
            'tip_nombre'  => Str::upper($request->tip_nombre),
            'tip_prefijo' => Str::upper($request->tip_prefijo),
        ]);

        return redirect()->route('types.show', $tipo)->with('message', 'Tipo de documento creado correctamente.');
    }

    public function show(int $tipo) {
        $tipo = TipTipoDoc::findOrFail($tipo);
        return view('types.show', compact('tipo'));
    }

    public function edit(int $tipo) {
        $tipo = TipTipoDoc::findOrFail($tipo);
        return view('types.edit', compact('tipo'));
    }

    public function update(Request $request, int $tipo)
    {
        $tipo = TipTipoDoc::findOrFail($tipo);
        $request->validate([
            'tip_nombre'  => ['required', 'string', 'min:3', 'max:30'],
        ]);

        $tipo->update(['tip_nombre' => Str::upper($request->tip_nombre)]);
        return redirect()->route('types.show', $tipo)->with('message', 'Tipo de documento actualizado correctamente.');
    }

    public function destroy(int $tipo) {
        TipTipoDoc::findOrFail($tipo)->delete();
        return redirect()->route('types.index')->with('message', 'Tipo de documento eliminado correctamente.');
    }
}
