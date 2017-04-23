<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class BlogController extends Controller
{
	public function getIndex(){
		$post=Post::paginate(10);
		return view('blog.index')->with('posts',$post);
	}
    public function getSingle($slug){
    	//fetch from the db based on the slug
        $post=Post::where('slug','=', $slug)->first();
    	//return the view and pass in the post object
    	return view('blog.single')->with('posts',$post);
    }
}
?>