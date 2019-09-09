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
    return view('inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/guardaCategoria', 'CategoriaController@store')->name('guardarCategoria');

Route::get('/producto', 'ProductoController@index')->name('producto.index')->middleware('auth');
Route::post('/productoSave', 'ProductoController@store')->name('productoSave');

