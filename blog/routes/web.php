<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Página de inicio
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

// Todas las rutas de posts
Route::resource('posts', PostController::class);

// Rutas extras para pruebas
Route::get('/posts/nuevo/prueba', [PostController::class, 'nuevoPrueba'])
    ->name('posts.nuevo.prueba');
    
Route::get('/posts/editar/prueba/{id}', [PostController::class, 'editarPrueba'])
    ->name('posts.editar.prueba');