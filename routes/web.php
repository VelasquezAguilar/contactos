<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\directorioController;
use App\Http\Controllers\contactoController;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/directorio', 
           [directorioController::class , 'mostrarDirectorio' ])->name('mostrar.directorio');
           

    Route::get('/directorio/crearEntrada',
                  [directorioController::class, 'crearEntrada'])->name('entrada.crear');

            Route::get('/directorio/crearEntrada/guardar',
            [directorioController::class, 'crearEntradaGuardar'])->name('entrada.crear.guardar');

     Route::get('/directorio/buscarEntrada',
                  [directorioController::class, 'buscarEntrada'])->name('entrada.buscar');

    Route::get('/directorio/verEntrada/{id}',
                 [directorioController::class, 'verEntrada'])->name('entrada.ver');

                 Route::get('/directorio/verEntrada/listaContacto',
                          [contactoController::class, 'listarContacto'])->name('contacto.lista');

                          Route::get('/directorio/verEntrada/listarcontacto/agregarContacto',
                          [contactoController::class, 'buscarContacto'])->name('contacto.agregar');

                        ///  Route::get('/directorio/verEntrada/eliminar',
                         /// [contactoController::class, 'eliminarContacto'])->name('contacto.eliminar');
                
     Route::get('/directorio/eliminarEntrada',
                 [directorioController::class, 'eliminarEntrada'])->name('entrada.eliminar');


            














































