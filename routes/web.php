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

Route::get('/', 'perfilController@mostrarEvento');
Route::get('/registrar','perfilController@mostrar');
Route::post('/registrar/ingresar','perfilController@guardar');
Route::get('/about', 'perfilController@about');