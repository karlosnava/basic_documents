<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentRequest;
use App\Models\DocDocumento;
use App\Models\ProProceso;
use App\Models\TipTipoDoc;
use Illuminate\Support\Str;

class DocumentController extends Controller
{
    public function create()
    {
        $tipo_docs = TipTipoDoc::orderBy('tip_nombre')->get();
        $pro_procesos = ProProceso::orderBy('pro_nombre')->get();
        return view('documents.create', compact('tipo_docs', 'pro_procesos'));
    }

    public function store(DocumentRequest $request)
    {
        $tipo    = TipTipoDoc::findOrFail($request->doc_id_tipo);
        $proceso = ProProceso::findOrFail($request->doc_id_proceso);
        $codigo  = $tipo->tip_prefijo . "-" .  $proceso->pro_prefijo;

        $consecutivo = DocDocumento::where('doc_codigo', 'LIKE', "%{$codigo}%")->count() + 1;
        $codigo .= "-{$consecutivo}";

        $request->merge([ 'doc_codigo' => $codigo ]);
        $documento = DocDocumento::create($request->all());

        return redirect()->route('documents.show', $documento);
    }

    public function show(DocDocumento $document) {
        return view('documents.show', compact('document'));
    }

    public function edit(DocDocumento $document)
    {
        $tipo_docs = TipTipoDoc::orderBy('tip_nombre')->get();
        $pro_procesos = ProProceso::orderBy('pro_nombre')->get();
        return view('documents.edit', compact('document', 'tipo_docs', 'pro_procesos'));
    }

    public function update(DocumentRequest $request, DocDocumento $document)
    {
        $tipo    = TipTipoDoc::findOrFail($request->doc_id_tipo);
        $proceso = ProProceso::findOrFail($request->doc_id_proceso);
        $codigo  = $tipo->tip_prefijo . "-" .  $proceso->pro_prefijo;

        $codigo_actual = Str::replaceLast('-', '', Str::replaceMatches('/[0-9]+/', '', $document->doc_codigo));

        if ($codigo !== $codigo_actual) {
            $consecutivo = DocDocumento::where('doc_codigo', 'LIKE', "%{$codigo}%")->count() + 1;
            $codigo .= "-{$consecutivo}";
            $request->merge([ 'doc_codigo' => $codigo ]);
        }

        $document->update($request->all());
        return redirect()->route('documents.show', $document)
            ->with('message', 'El documento se ha actualizado correctamente.');
    }

    public function destroy(DocDocumento $document)
    {
        $document->delete();
        return redirect()->route('home')->with('message', 'El documento se ha eliminado correctamente.');
    }
}
