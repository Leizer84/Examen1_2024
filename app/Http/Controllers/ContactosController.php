<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactosController extends Controller
{
    public function verContactos(){
        $contactos = Contacto::all();
        return view('vercontactos', compact('contactos')); 
    }

    public function agregarContacto(){
        return view('agregarcontacto');
    }

    public function guardarContacto(Request $request){
        $nvoContacto = new Contacto();
        $nvoContacto->codigoEntrada = $request->codigoEntrada;
        $nvoContacto->nombre = $request->nombre;
        $nvoContacto->apellido = $request->apellido;
        $nvoContacto->correo = $request->correo;
        $nvoContacto->save();

        return redirect('/contacto/mostrar');

    }

    public function editarContacto($id){

    }

    public function guardarEdicionCon(Request $request, $id){

    }

    public function eliminarContacto($id){

    }

    public function destroContacto($id){
        
    }
    //
}
