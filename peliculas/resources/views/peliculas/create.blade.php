@extends('layouts.app')

@section('content')
    <div class="form-container">
        <h2>Registrar Nueva Película</h2>
        
        <form method="POST" action="/peliculas">
            @csrf
            
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" id="titulo" name="titulo" required placeholder="Ej: Inception">
            </div>
            
            <div class="form-group">
                <label for="director">Director</label>
                <input type="text" id="director" name="director" required placeholder="Ej: Christopher Nolan">
            </div>
            
            <div class="form-group">
                <label for="anio">Año de Estreno</label>
                <input type="number" id="anio" name="anio" required placeholder="Ej: 2010">
            </div>
            
            <div class="form-group">
                <label for="genero">Género</label>
                <select id="genero" name="genero" required>
                    <option value="">Seleccione un género</option>
                    <option value="Acción">Acción</option>
                    <option value="Aventura">Aventura</option>
                    <option value="Ciencia Ficción">Ciencia Ficción</option>
                    <option value="Comedia">Comedia</option>
                    <option value="Drama">Drama</option>
                    <option value="Terror">Terror</option>
                    <option value="Suspenso">Suspenso</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="duracion">Duración (minutos)</label>
                <input type="number" id="duracion" name="duracion" required placeholder="Ej: 148">
            </div>
            
            <button type="submit">Guardar Película</button>
        </form>
        
        <div class="nav-buttons">
            <a href="/peliculas" class="btn btn-secondary">Volver al Catálogo</a>
        </div>
    </div>
@endsection