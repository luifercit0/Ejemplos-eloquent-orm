@extends('layouts.app')

@section('content')
    <div class="form-container">
        <h2>Registrar Nuevo Libro</h2>
        
        <form method="POST" action="/libros">
            @csrf
            
            <div class="form-group">
                <label for="titulo">Título del Libro</label>
                <input type="text" id="titulo" name="titulo" required placeholder="Ej: Cien años de soledad">
            </div>
            
            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" id="autor" name="autor" required placeholder="Ej: Gabriel García Márquez">
            </div>
            
            <div class="form-group">
                <label for="paginas">Número de Páginas</label>
                <input type="number" id="paginas" name="paginas" required placeholder="Ej: 471">
            </div>
            
            <button type="submit">Guardar Libro</button>
        </form>
        
        <div class="nav-buttons">
            <a href="/libros" class="btn btn-secondary">Volver al Catálogo</a>
        </div>
    </div>
@endsection