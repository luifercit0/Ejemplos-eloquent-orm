@extends('layouts.app')

@section('content')
    <div class="pelicula-detalle">
        <div class="pelicula-header">
            <h2>{{ $pelicula->titulo }}</h2>
        </div>
        
        <div class="pelicula-body">
            <div class="info-item">
                <div class="info-label">Director</div>
                <div class="info-value">{{ $pelicula->director }}</div>
            </div>
            
            <div class="info-item">
                <div class="info-label">Año de Estreno</div>
                <div class="info-value">{{ $pelicula->anio }}</div>
            </div>
            
            <div class="info-item">
                <div class="info-label">Género</div>
                <div class="info-value">{{ $pelicula->genero }}</div>
            </div>
            
            <div class="info-item">
                <div class="info-label">Duración</div>
                <div class="info-value">{{ $pelicula->duracion }} minutos</div>
            </div>
            
            <div class="info-item">
                <div class="info-label">Fecha de Registro</div>
                <div class="info-value">{{ $pelicula->created_at->format('d/m/Y H:i:s') }}</div>
            </div>
        </div>
    </div>
    
    <div class="nav-buttons">
        <a href="/peliculas" class="btn btn-secondary">Volver al Catálogo</a>
        <a href="/peliculas/crear" class="btn btn-primary">Agregar Película</a>
    </div>
@endsection