<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class contactoController extends Controller
{
    
    public function listarContacto($id){
         $contacto= contacto::find($id);
        return view('agregarcontacto');
    }
    //
}
