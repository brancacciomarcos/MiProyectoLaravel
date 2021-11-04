<?php

App::setLocale('es');

Route::view('/', 'home')->name('home');

Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('messages.store');

