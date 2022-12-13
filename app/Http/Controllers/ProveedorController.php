<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use App\Models\Municipio;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedor::all();

        return view('proveedor.index', [
            'proveedores' => $proveedores
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipios = Municipio::all();


        return view('proveedor.crear', [
            'municipios' => $municipios,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //valide los atributos de mi formulario para registar nuevos productos
        //define las regalas que debe de tener cada atribito
        $request->validate([
            'nombre' => 'required',
            'rfc' => 'required',
            'email' => 'required|email',
            'colonia' => 'required',
            'cp' => 'required',
            'calle' => 'required',
            'numero' => 'required',
            'municipio' => 'required',
        ]);

        // //guarde el producto con la informacion del formulario
        // $direccion = new Direccion();
        // $direccion->colonia= $request->colonia;
        // $direccion->cp = $request->cp;
        // $direccion->calle = $request->calle;
        // $direccion->no_ext = $request->numero;
        // $direccion->municipio_id = $request->municipio;
        // $direccion->saveOrFail();


        //guarde el producto con la informacion del formulario
        $proveedor = new Proveedor();
        $proveedor->razon_social = $request->nombre;
        $proveedor->rfc = $request->rfc;
        $proveedor->correo = $request->email;
        // $proveedor->direccion_id = $direccion->id;
        $proveedor->saveOrFail();

        //despues de guardar el prodcuto lo redireccione a la ruta home donde se muestra el prodcto que acabo de guardar
        return redirect()->route("proveedores.index")->with('status', 'Proveedor guardado correctamente!');
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
