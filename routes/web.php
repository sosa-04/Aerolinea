<?php

use App\Http\Controllers\TipoAsientoController;
use App\Http\Controllers\VuelosAsientosController;
use App\Http\Controllers\VuelosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

//Tipos de Asientos
Route::get('/tiposAsientos/mostrar',[TipoAsientoController::class, 'verTiposAsientos'])->name('tiposAsientos.mostrar');
Route::get('/tiposAsientos/agregar',[TipoAsientoController::class, 'agregarTipo'])->name('tiposAsientos.agregar');
Route::post('/tiposAsientos/guardar',[TipoAsientoController::class, 'guardarTipo'])->name('tiposAsientos.guardar');
Route::get('/tiposAsientos/eliminar/{id}',[TipoAsientoController::class, 'eliminarTipo'])->name('tiposAsientos.eliminar');
Route::get('/tiposAsientos/editar/{id}',[TipoAsientoController::class, 'editarTipo'])->name('tiposAsientos.editar');
Route::put('/tiposAsientos/actualizar/{id}', [TipoAsientoController::class, 'actualizarTipo'])->name('tiposAsientos.actualizar');

//vuelos
Route::get('/vuelos/mostrar', [VuelosController::class, 'mostrarVuelos'])->name('vuelos.mostrar');
Route::get('/vuelos/agregar', [VuelosController::class, 'agregarVuelo'])->name('vuelos.agregar');
Route::post('/vuelos/guardar', [VuelosController::class, 'guardarVuelo'])->name('vuelos.guardar');
Route::get('/vuelos/editar/{id}', [VuelosController::class, 'editarVuelo'])->name('vuelos.editar');
Route::put('/vuelos/actualizar/{id}', [VuelosController::class, 'actualizarVuelo'])->name('vuelos.actualizar');
Route::get('/vuelos/eliminar/{id}', [VuelosController::class, 'eliminarVuelo'])->name('vuelos.eliminar');

//Asientos vuelos
Route::get('/asintos/agregar/{id}/{fecha}', [VuelosAsientosController::class, 'agregarAsientoVuelo'])->name('asientos.agregar');
Route::post('/asintos/guardar/{idVuelo}', [VuelosAsientosController::class, 'guardarAsiento'])->name('asientos.guardar');
Route::get('/asintos/mostrarXvuelo/{id}', [VuelosAsientosController::class, 'AsientosXvuelo'])->name('asientos.mostrarXvuelo');