<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProProceso extends Model
{
    use HasFactory;

    protected $primaryKey = 'pro_id';
    protected $guardesd = ['pro_id', 'created_at', 'updated_at'];
}
