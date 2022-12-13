<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;
    /**
     * relacione municipio a su estado
     */
    public function estado()
    {
        return $this->hasOne(Estado::class,'id', 'estado_id');
    }
}
