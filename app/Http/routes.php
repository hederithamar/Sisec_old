<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Ruta principal
Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');
Route::get('roles','RolController@listing');
Route::get('enterprices','EmpresaController@listing');
//Ruta de los controladores
Route::resource('empresa','EmpresaController');
Route::resource('expediente','IntegracionController');
Route::resource('documento','DocumentoController');
Route::resource('rol','RolController');
Route::resource('usuario','UsuarioController');
Route::resource('log','LogController');
Route::get('logout','LogController@logout');
Route::resource('excel','ExcelController');
