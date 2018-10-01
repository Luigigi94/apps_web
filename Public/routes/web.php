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
    return view('layout');
});

Route::get('/Hola', function(){ //ruta
	return view('hola'); //Retornar
});

Route::get('/Test_layout', function(){ //ruta
	return view('layout'); //Retornar
});

Route::get('/productos', function(){ //ruta
	return view('productos'); //Retornar
});