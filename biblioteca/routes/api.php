<?php

use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

Route::post('/libros', [LibroController::class, 'guardar']);
Route::get('/libros', [LibroController::class, 'listar']);
Route::get('/libros/{id}', [LibroController::class, 'buscar']);