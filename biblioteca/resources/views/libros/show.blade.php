@extends('layouts.app')

@section('content')
    <div class="libro-detalle">
        <div class="libro-header">
            <h2>{{ $libro->titulo }}</h2>
        </div>
        
        <div class="libro-body">
            <div class="info-item">
                <div class="info-label">Autor</div>
                <div class="info-value">{{ $libro->autor }}</div>
            </div>
            
            <div class="info-item">
                <div class="info-label">Páginas</div>
                <div class="info-value">{{ $libro->paginas }} páginas</div>
            </div>
            
            <div class="info-item">
                <div class="info-label">Fecha de Registro</div>
                <div class="info-value">{{ $libro->created_at->format('d/m/Y H:i:s') }}</div>
            </div>
            
            <div class="info-item">
                <div class="info-label">Última Actualización</div>
                <div class="info-value">{{ $libro->updated_at->format('d/m/Y H:i:s') }}</div>
            </div>
        </div>
    </div>
    
    <div class="nav-buttons">
        <a href="/libros" class="btn btn-secondary">Volver al Catálogo</a>
        <a href="/libros/{{ $libro->id }}/editar" class="btn btn-primary">Editar Libro</a>
        <form method="POST" action="/libros/{{ $libro->id }}" style="display: inline;" onsubmit="return confirm('¿Estás seguro de eliminar este libro?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar Libro</button>
        </form>
    </div>
@endsection