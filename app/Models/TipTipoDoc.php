<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\DocDocumento;

class TipTipoDoc extends Model
{
    use HasFactory;

    protected $primaryKey = 'tip_id';
    protected $guarded = ['tip_id', 'created_at', 'updated_at'];

    public function documents() {
        return $this->hasMany(DocDocumento::class, 'doc_id_tipo');
    }
}
