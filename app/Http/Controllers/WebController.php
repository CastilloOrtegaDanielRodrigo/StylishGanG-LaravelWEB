<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        //cree la variable prodcutos para guaradar los datos de la tabvla producto
        // consulte todos los datos de la tabla productos
        $productos = Producto::all();

        //envie los datos de productos a la vista productos
        return view('productos', [
            'productos' => $productos,
        ]);

    }

    public function contact()
    {
        //rotornar vista de formulario de contacto
        return view('contacto');

    }

    public function historia()
    {
        //rotornar vista de la historia de la empresa
        return view('historia');

    }

}
