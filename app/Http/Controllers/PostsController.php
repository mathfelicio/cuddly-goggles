<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index(){
    	return view('posts.index');
    }

    public function create(){

    	return view('posts.create');
    }

    public function store(){
    	$post = new Post();

    	$post->title = request('title');

    	$post->body = request('body');

    	$post->save();

    	return redirect('/posts');
    }
}
