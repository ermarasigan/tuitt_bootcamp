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
    return view('welcome');
});

Route::get('/home', 'UserController@showUsers');

Route::group(['middleware' => 'auth'], function(){
	Route::get('/home/profile/{id}', 'UserController@userProfile');
	Route::post('/home/profile/{id}','UserController@addFriend');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
