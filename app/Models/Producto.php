<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory,SoftDeletes;
    

    /**
     *
     *
     * aisgne alk modelo prodtco los atributos de la tablas producto
     */
    protected $fillable = [
        'nombre',
        'url_imagen',
        'descripcion',
        'iva',
        'precio_neto',
        'existencia',
        'proveedor_id',
        'categoria_id',
        'marca_id',
    ];

    /**
     * relacione producto a su proveedor
     */
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class,'proveedor_id', 'id');
    }

    /**
     * relacione producto a su categoria
     */
    public function categoria()
    {
        return $this->hasOne(Categoria::class,'id', 'categoria_id');
    }

    /**
     * relacione producto a su marca
     */
    public function marca()
    {
        return $this->hasOne(Marca::class,'id', 'marca_id');
    }
}

