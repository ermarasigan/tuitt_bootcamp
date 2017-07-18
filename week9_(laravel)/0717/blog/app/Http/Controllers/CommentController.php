<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    function saveNewComment($id, Request $request){
    	$new_comment = new Comment();
    	$new_comment->content = $request->content;
    	$new_comment->article_id = $request->id;
    	$new_comment->save();

    	return back();
    }
}
