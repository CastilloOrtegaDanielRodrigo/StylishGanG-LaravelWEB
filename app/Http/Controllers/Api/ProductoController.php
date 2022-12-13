<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     * utilizo el metodo GET
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::with('proveedor','marca','categoria')->get();

        return response()->json([
            'productos' => $productos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $producto = new Producto;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->iva = 16;
        $producto->precio_neto = $request->precio * 16 / 100 + $request->precio;
        $producto->existencia = $request->existencia;
        $producto->proveedor_id = $request->proveedor;
        $producto->categoria_id = $request->categoria;
        $producto->marca_id = $request->marca;
        $producto->saveOrFail();

        return response()->json([
            'mensaje' => "el producto se ha registrado correctamante",
            'producto' => $producto,
        ]);
    }

    /**
     * Display the specified resource.
     * utilizo el metodo GET
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::with('proveedor','marca','categoria')->find($id);

        if ($producto == null ) {
            return response()->json([
                'mensaje' => "el producto no existe",
            ]);
        }
        return response()->json([
            'producto' => $producto,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //guarde el producto con la informacion del formulario
         $producto = Producto::find($id);

         $producto->nombre = $request->nombre;
         $producto->descripcion = $request->descripcion;
         $producto->precio = $request->precio;
         $producto->precio_neto = $request->precio * 16 / 100 + $request->precio;
         $producto->existencia = $request->existencia;
         $producto->proveedor_id = $request->proveedor;
         $producto->categoria_id = $request->categoria;
         $producto->marca_id = $request->marca;
         $producto->updateOrFail();

         return response()->json([
            'mensaje' => "el producto se ha actualizado correctamante",
            'producto' => $producto,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     * 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::with('proveedor','marca','categoria')->find($id);

        if ($producto == null ) {
            return response()->json([
                'mensaje' => "el producto no existe",
            ]);
        }

        $producto->delete();

        return response()->json([
            'mensaje' => "el producto se elimino exitosamente",
        ]);
        
    }
}
