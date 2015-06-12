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
//
Route::get('/', 'WelcomeController@inicio');
Route::get('inicio', 'WelcomeController@inicio');
Route::get('clientes', 'WelcomeController@clientes');
Route::get('cotizaciones', 'WelcomeController@cotizaciones');
//
///*Administraciçon Cargo*/
//
//Route::get('crear','CargosController@create');
//Route::post('guardar','CargosController@store');
//Route::get('listar','CargosController@lista');
//Route::get('{id}/edit','CargosController@edit');

Route::resource('cargos','CargosController');
Route::get('cargos/view/{id}','CargosController@view');
Route::get('cargos/edit/{id}','CargosController@edit');
Route::get('cargos/edit1/{id}','CargosController@edit1');
Route::resource('concesionario','ConcesionarioController');
Route::get('concesionario/{id}/view','ConcesionarioController@view');

