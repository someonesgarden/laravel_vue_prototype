<?php

/*  Laravel */

Route::get('/', function () {
    return view('index', ['title'=>'Index']);
});

Route::get('/home', 'HomeController@index')->name('home');

/* Vue.js */
Route::get('/{any}', function () {
    return view('app', ['title'=>'APP']);
})->where('any', '.*');


Auth::routes();

