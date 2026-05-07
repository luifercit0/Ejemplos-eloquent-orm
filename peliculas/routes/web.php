<?php

use App\Http\Controllers\PeliculaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/peliculas');
});

Route::get('/peliculas', [PeliculaController::class, 'index']);
Route::get('/peliculas/crear', [PeliculaController::class, 'create']);
Route::get('/peliculas/{id}', [PeliculaController::class, 'show']);
Route::post('/peliculas', [PeliculaController::class, 'store']);