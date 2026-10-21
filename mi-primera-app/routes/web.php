<?php

use Illuminate\Support\Facades\Route;

///RUTAS ESPECIFICAS///
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    return 'Hola, Jesus. Esto es laravel.';
});

function despedir() {
    return 'Adios, jesuS'; /// <-- ejemplo, aqui si ";"
}

 ///las funciones no llevan ";" al cerrar la llave, solo dentro de cada parametro de la funcion///

Route::get('/hola/function', function () {
    return despedir();
});

Route::get('/hola/adios', function () {
    return 'Adios jesus';
});

function nombre() {
    return "";
}

function edad() {
    return "19";
}

Route::get('/blade', function () {
    return view('hola', [ 'nombre' => nombre(), 'edad' => edad()]);
});


///RUTAS PARAMETRIZADAS {ejemplo} - no poner antes de las especificas///

///funciones - rutas parametrizadas ///
function saludar($nombre) {
    return "Hooola, $nombre";
}

Route::get('/hola/{nombre}', function ($nombre) {
    return "hola, $nombre";
});

function sumar($a, $b) {
    return $a + $b;
}

Route::get('suma/{a}/{b}', function($a, $b) {
    echo sumar($a, $b);
    echo "<br>";
    return sumar($a, $b);
});



