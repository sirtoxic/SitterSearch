<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', 'JobsController@index');
Route::get('/jobs/{job}', 'JobsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index');
