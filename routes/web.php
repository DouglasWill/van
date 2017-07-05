<?php

Route::get('/', function () {
    return view('templates.index');
});

Route::get('contato', function () {
    return view('templates.contato');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
