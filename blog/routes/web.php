<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

/*Tarea 1*/

Route::get('/hola', function () {
    return view('hola');
});

Route::get('/adios', function () {
    return view('adios');
});

/*Tarea 2*/

Route::get('/formularioGet', function () {
    return view('formGet');
});

Route::get('/formularioGetAnswer', function () {
    return "<h1>Respuesta desde web.php</h1><p>Adioos!!</p>";
});

/*Tarea 3*/

Route::get('/formularioPost1', function () {
    return view('formPost1');
});

Route::post('/formularioPostAns', function () {
    return "<h1>Respuesta desde web.php</h1><p>Adioos!!</p>";
});

/*Tarea 4*/

Route::get('/formularioPost', function () {
    return view('formPost');
});

Route::post('/formularioPostAnswer', function () {
    return view('formPostAns');
});
