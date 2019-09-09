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
Route::post('/guardaCategoria', 'HomeController@store')->name('guardarCategoria');
Route::post('/actualizar-categoria/{id}','HomeController@update')->name('actualizar.categoria');
Route::get('/eliminar-categoria/{id}','HomeController@destroy')->name('eliminar.categoria');


Route::get('/producto', 'ProductoController@index')->name('producto.index')->middleware('auth');
Route::post('/productoSave', 'ProductoController@store')->name('productoSave');
Route::post('/actualizar-producto/{id}','ProductoController@update')->name('actualizar.producto');
Route::get('/eliminar-producto/{id}','ProductoController@destroy')->name('eliminar.producto');
