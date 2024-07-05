<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\directorio;


class directorioController extends Controller
{
     public function mostrarDirectorio(){
        $directorios= directorio::all();
        //$contacto= contacto::find('codigoEntrada');
        return view('directorio', compact('directorios'));
     }


     public function crearEntrada(){
      
      return view('crearEntrada');
     }
    

     public function guardarEntrada(Request $request){
      $entrada = new directorio();
      $entrada->codigoEntrada = $request->codigo;
      $entrada->nombre = $request->nombre;
      $entrada->apellido = $request->apellido;
      $entrada->telefono = $request->telefono;
      $entrada->correo = $request->correo;
      $entrada->save();
      return redirect()->route('mostrar.directorio');

     }


     public function buscarEntrada(){
      return view('buscar');
     }

     public function verEntrada(Request $request, $id){
      $directorio= directorio::find($id);

      return view('vercontacto' ,compact('directorio'));
     }

     public function eliminarEntrada(){
      return view('eliminar');
     }

     public function crearEntradaGuardar(){
      return view('directorio');

      
     }
}

