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
    public function addTag(Request $request){

        $inputTag = $request->inputTag;
        $blogID = $request->blogID;

        if ($request->isMethod('post')){

            // Find the blog sent thru ajax
            $blog = Blog::find($blogID);

            //Check if tag already exists
            $tag = Tag::where('name','=',$inputTag)->first(['id','name']);
            $hasTag = Tag::where('name','=',$inputTag)->count();

            if($hasTag){
                // Check if tag is already associated to blog
                $hasBlogTag = $blog->tag()->where('tag_id', $tag->id)->exists();
                if($hasBlogTag){
                    return response()->json(['response' => 'tag exists']);
                } else {
                    $blog->tag()->attach($tag->id);
                }
            } else {
                // Create new tag if none
                $new_tag = new Tag();
                $new_tag->name = $inputTag;
                $new_tag->save();

                // Find the new tag
                $new_tag = Tag::where('name','=',$inputTag)->first(['id']);

                // Insert record to pivot row to associate tag with blog
                $blog->tag()->attach($new_tag->id);
            }
            // // Output response to send to ajax
            return response()->json(['response' => 'success']);
        } 
        // Reload page in ajax instead
   	 	// return redirect('/home');
    }
}