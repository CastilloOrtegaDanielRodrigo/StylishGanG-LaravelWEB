<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    
    /**
     * relacione proveedor a su direccion
     */
    public function direccion()
    {
        return $this->hasOne(Direccion::class,'id', 'direccion_id');
    }

    /**
     * relacione proveedor a su producto
     */
    public function productos()
    {
        return $this->hasMany(Producto::class, 'proveedor_id', 'id');
    }
}
