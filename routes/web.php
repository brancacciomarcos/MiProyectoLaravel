<?php

App::setLocale('es');

Route::get('/', 'homeController@index')->name('home');

Route::get('/contacto', 'MessageController@index')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store');

Route::get('/about', 'aboutController@index')->name('about');


Route::get('/projects', 'projectController@index')->name('projects');