<?php

use App\Http\Controllers\ContactosController;
use App\Http\Controllers\DirectoriosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Mostrar Directorios
Route::get('/directorio/mostrar', [DirectoriosController::class, 'mostrarDirectorio'])->name('Directorio.mostrar');

//Llevar a crearEntrada
Route::get('/directorio/crear', [DirectoriosController::class, 'crearDirectorio'])->name('Directorio.crear');
Route::post('directorio/guardar', [DirectoriosController::class, 'guardarDirectorio'])->name('Directorio.guardar');

//Llevar a Buscar
Route::get('/directorio/buscar', [DirectoriosController::class, 'buscarDirectorio'])->name('Directorio.buscar');



//Lleva a la vista de eliminar
Route::get('/directorio/eliminar', [DirectoriosController::class, 'eliminarDirectorio'])->name('Directorio.eliminar');
//Route::get('/directorio/destroy/{id}', [DirectoriosController::class, 'destroy'])->name('destroy');

//CONTACTOS 

//Lleva a Contactos 
Route::get('/contacto/mostrar', [ContactosController::class, 'verContactos'])->name('Contactos.verContactos');

//Lleva a Crear contactos 
Route::get('/contacto/crearContacto', [ContactosController::class, 'agregarContacto'])->name('Contactos.crear');
Route::post('/contacto/guardar', [ContactosCOntroller::class, 'guardarContacto'])->name('Contactos.guardar');