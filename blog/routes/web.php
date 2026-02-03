<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('inicio')
;

Route::get('/posts',function () {
    return "Bienvenido a posts";
})->name('posts_listado')
;

Route::get('/posts/{id}', function($id){
    return "FIcha de posts numero: " . $id;
})-> Where('id', "[0-9]+")
->name('posts_ficha')
;
