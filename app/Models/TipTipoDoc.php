<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipTipoDoc extends Model
{
    use HasFactory;

    protected $primaryKey = 'tip_id';
    protected $guardesd = ['tip_id', 'created_at', 'updated_at'];
}
