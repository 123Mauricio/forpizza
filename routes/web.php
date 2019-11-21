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
    return view('welcome');
});

Route::get('INICIO', function () {
    return view('INICIO');
});

Route::get('Cheese', function () {
    return view('Cheese');
});

Route::get('Chong', function () {
    return view('Chong');
});

Route::get('estable', function() {
    return view('estable');
});

Route::get('Fratellis', function () {
    return view('Fratellis');
});

Route::get('Italians', function () {
    return view('Italians');
});

Route::get('Kankin', function () {
    return view('Kankin');
});

Route::get('Pedido', function () {
    return view('Pedido');
});

Route::get('Pizzamaleña', function () {
    return view('Pizzamaleña');
});

Route::get('Smallville', function () {
    return view('Smallville');
});

Route::get('2', function () {
    return view('2');
});
Route::get('registro', function () {
    return view('registro');
});