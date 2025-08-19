<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/praedium', function() {
    return view('site/praedium');
});

Route::any('/any', function() {
    return "Permite todo tipo de acesso HTTP (put, delete, get, post)";
});

Route::match(['get', 'put', 'delete'], '/match', function() {
    return "Permite apenas acessos definidos";
});

// O ? depois de {cat} geralmente indica que o parâmetro é opcional (ou seja, pode vir ou não).
// A atribuição default = ' '  é o valor padrão: se ninguém passar nada, ele assume string vazia.
// Resumidamente: ? = opcional | = ' ' = valor padrão vazio.
Route::get('/produto/{id}/{cat?}', function($id, $cat = ''){
    return "O id do produto é: ".$id."<br>"."A categoria é: ".$cat;
});