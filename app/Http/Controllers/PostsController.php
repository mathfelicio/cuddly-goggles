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

    public function store(Request $request){
	
		$this->validate($request, [
			'title' => 'required',
			'body' => 'required|max:500'
		]);

		Task::create(['body' => request('body'), 'title' => request('title')]);

    	return redirect('/posts');
    }

    public function destroy($id){
    	$post = Post::findOrFail($id);
    	$post->delete();
    	return 204;
    }
}
