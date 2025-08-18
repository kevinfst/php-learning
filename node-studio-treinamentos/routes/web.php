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



