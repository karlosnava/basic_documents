<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocDocumento extends Model
{
    use HasFactory;

    protected $primaryKey = 'doc_id';
    protected $guarded = ['doc_id', 'created_at', 'updated_at'];

    public function tipo() {
        return $this->belongsTo(TipTipoDoc::class, 'doc_id_tipo');
    }
    
    public function proceso() {
        return $this->belongsTo(ProProceso::class, 'doc_id_proceso');
    }
}
