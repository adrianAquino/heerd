<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('listar-animais/', function () {
    return view('animais.index');
});
