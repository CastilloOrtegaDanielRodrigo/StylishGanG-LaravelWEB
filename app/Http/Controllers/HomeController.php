<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //cree la variable prodcutos para guaradar los datos de la tabvla producto
        // consulte todos los datos de la tabla productos
        $productos = Producto::with('proveedor','marca','categoria')->get();
        
        //envie los datos de productos a la vista home
        return view('home', [
            'productos' => $productos,
        ]);
    }
}
