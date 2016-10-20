<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');
Route::get('/offer', 'VerkoopController@index');
Route::get('/buy', 'KoopController@index');
Route::get('/nieuw', 'VerkoopController@nieuw');


Route::post('/nieuw', 'VerkoopController@nieuwOffer');