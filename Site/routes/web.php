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
Route::get('/offer/{id}', 'KoopController@detail');
Route::get('/buy', 'KoopController@index');
Route::get('/nieuw', 'VerkoopController@nieuw');
Route::get('protected', ['middleware' => ['auth', 'admin'], function(){
    return "this page requires that you be logged in as Admin";
}]);
Route::get('/dashboard/users', 'dashboardController@users');
Route::get('/dashboard/offers', 'dashboardController@offers');
Route::post('/search', 'searchController@index');
Route::get('/dashboard/users/edit/{id}', 'dashboardController@userEdit');
Route::get('/dashboard/offers/edit/{id}', 'dashboardController@offerEdit');
Route::get('/dashboard/users/delete/{id}', 'dashboardController@userDelete');
Route::get('/dashboard/offers/delete/{id}', 'dashboardController@offerDelete');
Route::get('/dashboard/users/re_add/{id}', 'dashboardController@userReAdd');
Route::get('/dashboard/offers/re_add/{id}', 'dashboardController@offerReAdd');
Route::get('/user/{id}', 'userController@userpage');

Route::post('/nieuw', 'VerkoopController@nieuwOffer');
Route::post('/editOffer/{id}', 'dashboardController@editOffer');
Route::post('/editUser/{id}', 'dashboardController@editUser');

Route::post('/buyOffer/{id}', 'koopController@buyOffer');
Route::get('/messages', 'messageController@index');
Route::get('/messages/{id}', 'messageController@indexWithSend');
Route::post('/messages/{id}', 'messageController@send');