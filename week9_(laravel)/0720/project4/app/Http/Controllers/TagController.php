<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    function showBlogs($id){
    	$tag = Tag::find($id);
    	// $blogs = $tag->blog;
    	$blogs = $tag->blog()->get();

 	 	return view('blogstagged', compact('blogs','tag'));
    }
}
