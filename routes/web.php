<?php

App::setLocale('es');

Route::get('/', 'homeController@index')->name('home');

Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store');

Route::view('/about', 'about')->name('about');
Route::view('/projects', 'projects')->name('projects');