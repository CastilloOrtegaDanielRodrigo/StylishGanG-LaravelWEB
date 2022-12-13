<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    /**
     * relacione categoria a sus productos
     */
    public function productos()
    {
        return $this->hasMany(Producto::class, 'categoria_id', 'id');
    }

    /**
     * relacione categoria a sus productos
     */
    public function marcas()
    {
        return $this->hasMany(Marca::class, 'marca_id', 'id');
    }
}
