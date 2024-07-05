<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\directorio;

class directorioController extends Controller
{
     public function mostrarDirectorio(){
        return view('directorio');
     }
}
