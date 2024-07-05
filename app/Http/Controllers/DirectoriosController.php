<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directorio;
use Psy\CodeCleaner\FunctionContextPass;

class DirectoriosController extends Controller
{
    //

    public function mostrarDirectorio(){
        $directorios = Directorio::all(); 
        return view('directorio', compact('directorios'));
    }

    public function buscarDirectorio(){
        return view('buscar');
    }
    public function crearDirectorio(){
        return view('crearEntrada');
    }


    public function guardarDirectorio(Request $request){
        $nvoDirectorio = new Directorio();
        $nvoDirectorio->codigoEntrada = $request->codigoEntrada;
        $nvoDirectorio->nombre = $request->nombre;
        $nvoDirectorio->apellido = $request->apellido;
        $nvoDirectorio->correo = $request->correo;
        $nvoDirectorio->telefono = $request->telefono;
        $nvoDirectorio->save();

        return redirect('/directorio/mostrar');
    }

    public function eliminarDirectorio($id){
        $directorioEliminar = Directorio::find($id);
        return view('eliminar', compact('directorioEliminar'));
    }

    /*public function destroy($id){
        $directorioEliminar = Directorio::find($id);
        $directorioEliminar->delete();
        return redirect('/directorio/mostrar');
    }*/

}
