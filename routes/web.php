<?php

App::setLocale('es');

Route::get('/', 'homeController@index')->name('home');

Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store');

