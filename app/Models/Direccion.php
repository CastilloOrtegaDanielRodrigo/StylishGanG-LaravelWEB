<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;
    /**
     * relacione direccion a su municipio
     */
    public function municipio()
    {
        return $this->hasOne(Municipio::class,'id', 'municipio_id');
    }
}
