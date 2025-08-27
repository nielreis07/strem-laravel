<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('strem')->group(function () {
    Route::get('/', function () {
        return view('pagina-inicial.index');
    });
});



