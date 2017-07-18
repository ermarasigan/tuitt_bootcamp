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

// Route::get('/home', function () {
// 	echo 'Hello World';
// });

// return view('articles.articles_list');
// Route::get('/home', function () {
// 	$title = 'Articles List';
// 	$article1 = 'Tutorial';
// 	$article2 = 'Getting started';
//     return view('articles/articles_list', compact('title','article1','article2'));
// });

// Route::get('/home', function () {
// 	$title = 'Articles List';
// 	$articles = ['Article 1'
// 				,'Article 2'
// 				,'Article 3'
// 				,'Article 4'
// 				,'Article 5'];
//     return view('articles/articles_list', compact('title','articles'));
// });

Route::get('/create', 'ArticlesController@createArticle');

Route::post('/create', 'ArticlesController@saveNewArticle');

Route::get('/home', 'ArticlesController@showArticles');

Route::get('/home/{id}', 'ArticlesController@displayOneArticle');

Route::get('/home/delete/{id}', 'ArticlesController@deleteArticle');

Route::get('/home/edit/{id}', 'ArticlesController@editArticle');

Route::post('/home/edit/{id}', 'ArticlesController@saveEditArticle');


Route::post('/create_comment/{id}', 'CommentController@saveNewComment');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
