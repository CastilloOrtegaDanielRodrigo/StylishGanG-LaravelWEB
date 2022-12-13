<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        $contactos = Contacto::all();

        return view('contacto.index', [
            'contactos' => $contactos
        ]);
    }

    public function enviar(Request $request)
    {

        //valide los atributos de mi formulario para validar los datos de conacto
        //define las regalas que debe de tener cada atribito
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required',
        ]);
        //guarde el producto con la informacion del formulario
        $contacto = new Contacto();
        $contacto->nombre = $request->nombre;
        $contacto->email = $request->email;
        $contacto->asunto = $request->asunto;
        $contacto->mensaje = $request->mensaje;
        $contacto->saveOrFail();

        //despues de guardar el prodcuto lo redireccione a la ruta home donde se muestra el prodcto que acabo de guardar
        return redirect()->route("contactanos")->with('status', 'Se ha enviado tu información!');
    }
}
