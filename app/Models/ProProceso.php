<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProProceso extends Model
{
    use HasFactory;

    protected $primaryKey = 'pro_id';
    protected $guarded = ['pro_id', 'created_at', 'updated_at'];

    public function documents() {
        return $this->hasMany(DocDocumento::class, 'doc_id_proceso');
    }
}
