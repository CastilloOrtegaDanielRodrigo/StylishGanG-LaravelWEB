<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = Marca::all();
        $categorias = Categoria::all();

        return view('marca.index', [
            'marcas' => $marcas,
            'categorias' => $categorias,
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
        //valide los atributos de mi formulario para validar los datos de conacto
        //define las regalas que debe de tener cada atribito
        $request->validate([
            'nombre' => 'required',
            'categoria' => 'required',
        ]);

        //guarde el producto con la informacion del formulario
        $categoria = new Marca();
        $categoria->nombre = $request->nombre;
        $categoria->categoria_id = $request->categoria;
        $categoria->saveOrFail();

        //despues de guardar el prodcuto lo redireccione a la ruta home donde se muestra el prodcto que acabo de guardar
        return redirect()->route("marcas.index")->with('status', 'Marca guardada correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
