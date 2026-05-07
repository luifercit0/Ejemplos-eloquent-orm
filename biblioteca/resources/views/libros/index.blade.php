@extends('layouts.app')

@section('content')
    <div style="text-align: right; margin-bottom: 20px;">
        <a href="/libros/crear" class="btn btn-primary">Nuevo Libro</a>
    </div>
    
    <h2 style="color: #8B0000; margin-bottom: 20px;">Catálogo de Libros</h2>
    
    @if($libros->count() > 0)
        <div class="libros-grid">
            @foreach($libros as $libro)
                <div class="libro-card">
                    <div class="libro-content">
                        <div class="libro-titulo">{{ $libro->titulo }}</div>
                        <div class="libro-autor">
                            <strong>Autor:</strong> {{ $libro->autor }}
                        </div>
                        <div class="libro-paginas">
                            <strong>Páginas:</strong> {{ $libro->paginas }}
                        </div>
                        <div class="libro-fecha">
                            Agregado: {{ $libro->created_at->format('d/m/Y') }}
                        </div>
                        <div class="libro-acciones">
                            <a href="/libros/{{ $libro->id }}" class="btn-ver">Ver detalles</a>
                            <span style="margin: 0 5px;">|</span>
                            <a href="/libros/{{ $libro->id }}/editar" class="btn-editar">Editar</a>
                            <span style="margin: 0 5px;">|</span>
                            <form method="POST" action="/libros/{{ $libro->id }}" style="display: inline;" onsubmit="return confirm('¿Estás seguro de eliminar este libro?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-eliminar">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="empty-message">
            <p>No hay libros registrados en el sistema.</p>
            <a href="/libros/crear" class="btn btn-primary">Agregar primer libro</a>
        </div>
    @endif
@endsection