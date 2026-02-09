<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // index() - muestra el listado
    public function index()
    {
        return view('posts.index'); // Usará tu vista renombrada
    }

    // create() - formulario de creación (texto plano por ahora)
    public function create()
    {
        return redirect()->route('inicio');
    }

    // store() - guardar nuevo post (vacío por ahora)
    public function store(Request $request)
    {
        //
    }

    // show() - mostrar ficha de un post
    public function show($id)
    {
        return view('posts.show', compact('id')); // Usará tu vista renombrada
    }

    // edit() - formulario de edición (texto plano por ahora)
    public function edit($id)
    {
        return  redirect()->route('inicio');
    }

    // update() - actualizar post (vacío por ahora)
    public function update(Request $request, $id)
    {
        //
    }

    // destroy() - eliminar post (vacío por ahora)
    public function destroy($id)
    {
        //
    }
}