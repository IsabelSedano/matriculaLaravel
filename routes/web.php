<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//ruta que dirige a un controlador, cuando vayas a la ruta 'study' llamara al 'StudyController' y ejecutara su metodo index
Route::get('study/index/{page?}', 'StudyController@index')-> where('page', '[0-9]+');

Route::get('/study/delete/{id}', 'StudyController@delete');

Route::get('study/new', 'StudyController@new');

Route::get('/study/insert', 'StudyController@insert');

Route::get('/study/edit/{id}', 'StudyController@edit');

Route::get('/study/update', 'StudyController@update');

//Route::resource('matricula', 'Matricula');

//Route::get('module', 'ModuleController@index');