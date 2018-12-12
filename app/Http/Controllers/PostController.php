<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Category;

class PostController extends Controller
{
    //

    public function index() {

    	$posts = Post::paginate(4);

    	$category = Category::all();

    	$recent = Post::latest()->take(5)->get();

    	

    	return view('posts.index', compact('posts', 'category', 'recent'));
    }

    public function show(Post $post) {

    	return view('posts.show', compact('post'));
    }
}
