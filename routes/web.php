<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\directorioController;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/directorio', 
           [directorioController::class , 'mostrarDirectorio' ])->name('mostrar.directorio');
           