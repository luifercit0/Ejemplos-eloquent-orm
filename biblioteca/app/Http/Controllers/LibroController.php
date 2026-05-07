<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function listar()
    {
        $libros = Libro::all();
        return view('libros.index', compact('libros'));
    }
    
    public function crear()
    {
        return view('libros.create');
    }
    
    public function guardar(Request $request)
    {
        Libro::create([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'paginas' => $request->paginas
        ]);
        
        return redirect('/libros')->with('success', 'Libro creado exitosamente');
    }
    
    public function buscar($id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.show', compact('libro'));
    }
    
    public function editar($id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.edit', compact('libro'));
    }
    
    public function actualizar(Request $request, $id)
    {
        $libro = Libro::findOrFail($id);
        
        $libro->update([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'paginas' => $request->paginas
        ]);
        
        return redirect('/libros')->with('success', 'Libro actualizado exitosamente');
    }
    
    public function eliminar($id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();
        
        return redirect('/libros')->with('success', 'Libro eliminado exitosamente');
    }
}