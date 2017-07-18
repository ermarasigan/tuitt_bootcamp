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

Route::get('/home', 'TaskController@showTasks');

// Route::group(['middleware' => 'auth'], function(){
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'],
 function(){
	Route::post('/create', 'TaskController@createTask');
	Route::get('/home/delete/{id}', 'TaskController@deleteTask');
	Route::get('/home/edit/{id}', 'TaskController@editTask');
	Route::post('/home/edit/{id}', 'TaskController@saveEditTask');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
