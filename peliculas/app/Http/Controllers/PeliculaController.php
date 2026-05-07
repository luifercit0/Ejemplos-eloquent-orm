<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('peliculas.index', compact('peliculas'));
    }

    public function create()
    {
        return view('peliculas.create');
    }

    public function store(Request $request)
    {
        Pelicula::create([
            'titulo' => $request->titulo,
            'director' => $request->director,
            'anio' => $request->anio,
            'genero' => $request->genero,
            'duracion' => $request->duracion
        ]);

        return redirect('/peliculas')->with('success', 'Película guardada correctamente');
    }

    public function show($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return view('peliculas.show', compact('pelicula'));
    }
}