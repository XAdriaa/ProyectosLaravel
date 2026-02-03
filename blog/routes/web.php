<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio')
;

Route::get('/posts',function () {
    return view('posts/listado');
})->name('posts_listado')   //Definir nombre para asi poder llamarlo por blade en otras paginas y no poner un enlace HTML si no uno en 
;

Route::get('/posts/{id}', function($id){
    return view('posts/ficha',['id' => $id]); //Pasar los datos por vista es en el return view si no da error
})
-> Where('id', "[0-9]+")
->name('posts_ficha')
;
