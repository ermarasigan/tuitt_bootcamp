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
use App\User;

Route::get('/', function () {
    $users = User::all();
    $connections = Auth::user()->myRequests->merge(Auth::user()->theirRequests);

    $pending_requests = Auth::user()->pendingRequests();

    $friends = Auth::user()->friends();
    
    return view('users', compact('users','connections','pending_requests','friends'));
});

Route::post('addFriend/{id}', function ($id) {
	$user = User::find($id);
	Auth::user()->addFriend($user);

	return redirect('/');
});

Route::post('acceptRequest/{id}', function($id){
	Auth::user()->acceptRequest($id);
	Session::flash('message','Friend Added');
	return redirect('/');
});

Route::post('declineRequest/{id}', function($id){
	Auth::user()->declineRequest($id);

	return redirect('/');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
