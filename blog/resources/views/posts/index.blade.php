@extends('plantilla')

@section('titulo', 'Listado de Posts')

@section('contenido')
<div class="container mt-4">
    <h1 class="mb-4 text-primary">
        <i class="fas fa-newspaper me-2"></i>Listado de Posts
    </h1>
    
    @if(session('mensaje'))
        <div class="alert alert-success alert-dismissible fade show mb-4">
            {{ session('mensaje') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="{{ route('posts.nuevo.prueba') }}" class="btn btn-success">
            <i class="fas fa-plus-circle me-2"></i>Crear Post de Prueba
        </a>
        
        <span class="text-muted">
            Total: <strong>{{ $posts->total() }}</strong> posts
        </span>
    </div>
    
    @if($posts->count() > 0)
        <div class="list-group">
            @foreach($posts as $post)
                <div class="list-group-item mb-2 shadow-sm">
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Información -->
                        <div>
                            <h5 class="mb-1">
                                <span class="badge bg-secondary me-2">#{{ $post->id }}</span>
                                {{ $post->titulo }}
                            </h5>
                            <small class="text-muted">
                                <i class="far fa-clock me-1"></i>
                                {{ $post->created_at->format('d/m/Y H:i') }}
                            </small>
                        </div>
                        
                        <!-- BOTONES DE ACCIÓN (SOLO AQUÍ) -->
                        <div class="btn-group">
                            <!-- VER (va a show.blade.php - SOLO lectura) -->
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-outline-info">
                                <i class="fas fa-eye"></i> Ver
                            </a>
                            
                            <!-- EDITAR (acción directa - NO va a show) -->
                            <a href="{{ route('posts.editar.prueba', $post) }}" class="btn btn-sm btn-outline-warning">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            
                            <!-- ELIMINAR (formulario) -->
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" 
                                        onclick="return confirm('¿Eliminar este post?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <!-- Paginación -->
        <div class="d-flex justify-content-center mt-4">
            {{ $posts->links() }}
        </div>
    @else
        <div class="text-center py-5 border rounded bg-light">
            <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
            <h4 class="text-muted">No hay posts todavía</h4>
            <p class="text-muted">Crea el primer post usando el botón superior</p>
        </div>
    @endif
</div>
@endsection