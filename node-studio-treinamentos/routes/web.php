<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::any('/any', function() {
    return "Permite todo tipo de acesso HTTP (put, delete, get, post)";
});

/* OBS, na linha 40 tem outra forma de utilizar.
Route::get('/praedium', function() { 
    return view('site/praedium');
});
*/

Route::match(['get', 'put', 'delete'], '/match', function() {
    return "Permite apenas acessos definidos";
});

// O ? depois de {cat} geralmente indica que o parâmetro é opcional (ou seja, pode vir ou não).
// A atribuição default = ' '  é o valor padrão: se ninguém passar nada, ele assume string vazia.
// Resumidamente: ? = opcional | = ' ' = valor padrão vazio.
Route::get('/produto/{id}/{cat?}', function($id, $cat = ''){
    return "O id do produto é: ".$id."<br>"."A categoria é: ".$cat;
});

/*
Route::get('/sobre', function() {
    return redirect('/praedium');
});
*/

// Ou dessa forma
Route::redirect('/sobre', '/praedium'); // Código menor, fazendo a mesma função que basicamente seria redirecionar de uma rota para a outra.

// Código da linha 14 de forma simplificada.
Route::view('/praedium', 'site/praedium'); // Como estavamos só renderizando uma view, não tinha necessidade de colocar um return dentro de uma função de callback. Podemos renderizar uma view baseado na rota, se for só essa tarefa a ser realizada.

// O início '/praedium' seria a ROTA e 'site/praedium' seria a VIEW praedium que está dentro de site(pasta).