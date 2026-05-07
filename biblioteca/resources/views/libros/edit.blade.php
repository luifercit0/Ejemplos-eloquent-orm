@extends('layouts.app')

@section('content')
    <div class="form-container">
        <h2>Editar Libro</h2>
        
        <form method="POST" action="/libros/{{ $libro->id }}">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="titulo">Título del Libro</label>
                <input type="text" id="titulo" name="titulo" value="{{ $libro->titulo }}" required>
            </div>
            
            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" id="autor" name="autor" value="{{ $libro->autor }}" required>
            </div>
            
            <div class="form-group">
                <label for="paginas">Número de Páginas</label>
                <input type="number" id="paginas" name="paginas" value="{{ $libro->paginas }}" required>
            </div>
            
            <button type="submit">Actualizar Libro</button>
        </form>
        
        <div class="nav-buttons">
            <a href="/libros" class="btn btn-secondary">Volver al Catálogo</a>
        </div>
    </div>
@endsection