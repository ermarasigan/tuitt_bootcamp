<?php

namespace App\Http\Controllers;
use App\Blog;
use App\Tag;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function showBlogs(){
    	$blogs = Blog::all();
    	$tags = Tag::all();

   	 	return view('blogs', compact('blogs','tags'));
    }
    function addTag(Request $request){

    	if(Request::ajax()){
    		return Response::json(Request::all());
    	}


    	// $blogid = $request->blogid;
    	// dd("hello");

   	 	// return redirect('/home');
    }
    // function addFriend(User $user){
    //     $this->myRequests()->attach($user->id);
    // }

}