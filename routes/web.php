<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcomek');
});

Route::get('/blockchain', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/homek', 'HomeController@index')->name('homek');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register-land', 'HomeController@registerLand')->name('land.register');

Route::resource('landposts', 'LandpostsController');
Route::resource('categoryregistration', 'CategoryregistrationsController');