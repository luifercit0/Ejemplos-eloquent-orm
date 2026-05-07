<?php

use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/libros', [LibroController::class, 'listar']);
Route::get('/libros/crear', [LibroController::class, 'crear']);
Route::get('/libros/{id}', [LibroController::class, 'buscar']);
Route::get('/libros/{id}/editar', [LibroController::class, 'editar']);
Route::post('/libros', [LibroController::class, 'guardar']);
Route::put('/libros/{id}', [LibroController::class, 'actualizar']);   
Route::delete('/libros/{id}', [LibroController::class, 'eliminar']);    