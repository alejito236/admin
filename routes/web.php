<?php


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/usuarios', 'UserController');

route::get('/usuario/listarPdf', 'UserController@listarPdf')->name('nombres_pdf');

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

Route::resource('/Manualesoriginal', 'Manuales');

Route::resource('/novedades', 'NovedadesController');

Route::resource('/capacitaciones', 'CapacitacionesController');

Route::resource('/pqrs', 'PqrsController');


Route::resource('/procedimientos', 'procedimientos');

Route::resource('/formatos', 'formatos');

Route::resource('/registros', 'registros');

Route::resource('/inicio', 'inicioController');

Route::resource('/vacaciones', 'VacacionesController');


route::name('imprimir')->get('\imprimir-pdf', 'PDFController@imprimir');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
