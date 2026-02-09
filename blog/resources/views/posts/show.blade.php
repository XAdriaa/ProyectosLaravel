@extends('plantilla')

@section('titulo', $post->titulo)

@section('contenido')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-info text-white">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="mb-0">{{ $post->titulo }}</h2>
                <a href="{{ route('posts.index') }}" class="btn btn-light btn-sm">
                    <i class="fas fa-arrow-left me-1"></i>Volver
                </a>
            </div>
        </div>
        
        <div class="card-body">
            <!-- Contenido del post -->
            <div class="mb-4">
                <h5 class="text-muted">Contenido:</h5>
                <div class="p-3 bg-light rounded">
                    {{ $post->contenido }}
                </div>
            </div>
            
            <!-- Metadatos -->
            <div class="row">
                <div class="col-md-6">
                    <p><strong><i class="fas fa-hashtag me-2"></i>ID:</strong> {{ $post->id }}</p>
                    <p><strong><i class="fas fa-calendar-plus me-2"></i>Creado:</strong> 
                       {{ $post->created_at->format('d/m/Y H:i') }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong><i class="fas fa-calendar-check me-2"></i>Última actualización:</strong> 
                       {{ $post->updated_at->format('d/m/Y H:i') }}</p>
                </div>
            </div>
        </div>
        
        <!-- SOLO BOTÓN PARA VOLVER, NO ACCIONES -->
        <div class="card-footer text-center">
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">
                <i class="fas fa-list me-1"></i>Volver al Listado
            </a>
        </div>
    </div>
</div>
@endsection