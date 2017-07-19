<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use App\Friend;

class UserController extends Controller
{
    function showUsers(){
    	$title = 'Users List';
    	$users = User::all();
   	 	return view('users/users_list', compact('title','users'));
    }

    function userProfile($id){
    	$title = 'Users List';
		$user = User::find($id);
		$logged = Auth::user()->id;

		$pendings = DB::table('friends')
            ->join('users', 'users.id', '=', 'friends.from_user')
			->where([
    			['friends.to_user', '=', $id],
    			['friends.status', '=', 'P'],
				])
            ->get();

        $approveds = DB::table('friends')
            ->join('users', 'users.id', '=', 'friends.from_user')
			->where([
    			['friends.to_user', '=', $id],
    			['friends.status', '=', 'A'],
				])
            ->get();

        $ispend = DB::table('friends')
			->where([
    			['to_user', '=', $id],
    			['from_user', '=', $logged],
    			['friends.status', '=', 'P'],
				])
            ->count();

        $isfriend = DB::table('friends')
			->where([
    			['to_user', '=', $id],
    			['from_user', '=', $logged],
    			['friends.status', '=', 'A'],
				])
			->orwhere([
    			['to_user', '=', $logged],
    			['from_user', '=', $id],
    			['friends.status', '=', 'A'],
				])
            ->count();

		return view('users/user_profile',compact('title','user','pendings','approveds','ispend','isfriend'));
	}

	function addFriend(Request $request){
		$new_friend = new Friend();
		$new_friend->from_user 	= $request->from_user;
		$new_friend->to_user 	= $request->to_user;
		$new_friend->status		= 'P';
		$new_friend->save();

		return redirect('/home');
	}

	function confirmFriend(Request $request){
		$from_user 	= $request->from_user;
		$to_user 	= $request->to_user;

    	$friend_tba = DB::table('friends')
			->where([
    			['from_user', '=', $from_user],
    			['to_user', '=', $to_user],
				])
            ->update(['status' => 'A']);

    	return redirect('/home');
	}
	function deleteFriend(Request $request){
		$from_user 	= $request->from_user;
		$to_user 	= $request->to_user;

    	$friend_tba = DB::table('friends')
			->where([
    			['from_user', '=', $from_user],
    			['to_user', '=', $to_user],
				])
            ->update(['status' => 'D']);

    	return redirect('/home');
	}
}