<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    
    public function rules(): array
    {
        return [
            'doc_nombre'     => ['required', 'string', 'min:5'],
            'doc_contenido'  => ['required', 'string', 'min:15'],
            'doc_id_proceso' => ['required', 'integer', 'exists:pro_procesos,pro_id'],
            'doc_id_tipo'    => ['required', 'integer', 'exists:tip_tipo_docs,tip_id'],
        ];
    }
}
