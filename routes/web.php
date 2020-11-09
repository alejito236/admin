<?php


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/usuarios', 'UserController');

Route::resource('/mision', 'misionController');

Route::resource('/politica', 'politica');

Route::resource('/valores', 'valores');

Route::resource('/plan', 'plan');

Route::resource('/organigrama', 'organigrama');

Route::resource('/unidades', 'unidades');

Route::resource('/cumple', 'cumple');

Route::resource('/directorio', 'directorio');

Route::resource('/biografias', 'biografias');

Route::resource('/infografias', 'infografias');

Route::resource('/copasst', 'copasst');


Route::resource('/novedades', 'NovedadesController');

Route::resource('/capacitaciones', 'CapacitacionesController');

Route::resource('/manuales', 'manuales');

Route::resource('/procedimientos', 'procedimientos');

Route::resource('/formatos', 'formatos');

Route::resource('/registros', 'registros');




