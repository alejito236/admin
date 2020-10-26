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




