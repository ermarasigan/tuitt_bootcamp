<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
		// $pendings = DB::table('friends')->where('to_user', $id, 'status', 'P')->get();

		$pendings = DB::table('friends')
            ->join('users', 'users.id', '=', 'friends.from_user')

			->where([
    			['friends.to_user', '=', $id],
    			['friends.status', '=', 'P'],
				])
            // ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();

            // dd($pendings);
		return view('users/user_profile',compact('title','user','pendings'));
	}

	function addFriend(Request $request){
		$new_friend = new Friend();
		$new_friend->from_user 	= $request->from_user;
		$new_friend->to_user 	= $request->to_user;
		$new_friend->status		= 'P';
		$new_friend->save();

		return redirect('/home');
	}
}
