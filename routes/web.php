<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/modulos', 'App\Http\Controllers\ModulosController@index');

Route::put('/modulos', 'App\Http\Controllers\ModulosController@cambiarDatos');

Route::get('/modulos/edit/{id}', 'App\Http\Controllers\ModulosController@edit')->middleware('auth');
