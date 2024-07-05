<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\directorio;

class directorioController extends Controller
{
     public function mostrarDirectorio(){
        return view('directorio');
     }


     public function crearEntrada(){
      return view('crearEntrada');
     }

     public function buscarEntrada(){
      return view('buscar');
     }

     public function verEntrada(){
      return view('vercontacto');
     }

     public function eliminarEntrada(){
      return view('eliminar');
     }

     public function crearEntradaGuardar(){
      return view('directorio');
     }
}

