<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Categoria::with('categorias')->get();

        return response()->json([
            'categorias' => $categoria,
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->saveOrFail();
        
        return response()->json([
            'mensaje' => "la categoria se ha registrado correctamante",
            'categorias' => $categoria,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Categoria::with('categorias')->find($id);

        if ($categoria == null ) {
            return response()->json([
                'mensaje' => "la categoria no existe"
            ]);
        }
        return response()->json([
            'categorias' => $categoria
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
        //la categoria con la informacion del formulario
        $categoria = Categoria::find($id);

        $categoria->nombre = $request->nombre;
        $categoria->updateOrFail();

         return response()->json([
            'mensaje' => "la categoria se ha actualizado",
            'categorias' => $categoria,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::with('categorias')->find($id);

        if ($categoria == null ) {
            return response()->json([
                'mensaje' => "la categoria no existe",
            ]);
        }

    }
}
