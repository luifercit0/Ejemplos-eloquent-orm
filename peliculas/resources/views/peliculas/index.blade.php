@extends('layouts.app')

@section('content')
    <div style="text-align: right; margin-bottom: 20px;">
        <a href="/peliculas/crear" class="btn btn-primary">Agregar Película</a>
    </div>
    
    <h2 style="color: #667eea; margin-bottom: 20px;">Catálogo de Películas</h2>
    
    @if($peliculas->count() > 0)
        <div class="peliculas-grid">
            @foreach($peliculas as $pelicula)
                <div class="pelicula-card">
                    <div class="pelicula-content">
                        <div class="pelicula-titulo">{{ $pelicula->titulo }}</div>
                        <div class="pelicula-info">
                            <strong>Director:</strong> {{ $pelicula->director }}
                        </div>
                        <div class="pelicula-info">
                            <strong>Año:</strong> {{ $pelicula->anio }}
                        </div>
                        <div class="pelicula-info">
                            <strong>Duración:</strong> {{ $pelicula->duracion }} minutos
                        </div>
                        <div class="pelicula-genero">
                            {{ $pelicula->genero }}
                        </div>
                        <div class="pelicula-acciones">
                            <a href="/peliculas/{{ $pelicula->id }}">Ver detalles</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="empty-message">
            <p>No hay películas registradas en el sistema.</p>
            <a href="/peliculas/crear" class="btn btn-primary">Agregar primera película</a>
        </div>
    @endif
@endsection