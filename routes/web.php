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
    return view('photographer.home');
});
	Route::get('/home', function () {
		return view('photographer.gallery');
	});

//Route::resource('mypage', 'photographerController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('photos', 'photoController');
Route::resource('albums', 'albumController');
