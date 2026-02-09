<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Listado paginado
    public function index()
    {
        $posts = Post::orderBy('titulo', 'asc')->paginate(5);
        return view('posts.index', compact('posts'));
    }

    // Redirige
    public function create()
    {
        return redirect()->route('inicio');
    }

    // Vacío por ahora
    public function store(Request $request)
    {
        //
    }

    // Ficha de post
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    // Redirige
    public function edit($id)
    {
        return redirect()->route('inicio');
    }

    // Vacío por ahora
    public function update(Request $request, $id)
    {
        //
    }

    // Eliminar post
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        return redirect()->route('posts.index')
            ->with('mensaje', 'Post eliminado correctamente');
    }

    // EXTRA: Crear post de prueba
    public function nuevoPrueba()
    {
        $numero = rand(1, 1000);
        
        Post::create([
            'titulo' => "Título " . $numero,
            'contenido' => "Contenido del post número " . $numero
        ]);
        
        return redirect()->route('posts.index')
            ->with('mensaje', 'Post de prueba creado: Título ' . $numero);
    }

    // EXTRA: Editar post de prueba
    public function editarPrueba($id)
    {
        $post = Post::findOrFail($id);
        $numero = rand(1001, 2000);
        
        $post->update([
            'titulo' => "Título editado " . $numero,
            'contenido' => "Contenido editado " . $numero
        ]);
        
        return redirect()->route('posts.index')
            ->with('mensaje', 'Post editado: Título editado ' . $numero);
    }
}