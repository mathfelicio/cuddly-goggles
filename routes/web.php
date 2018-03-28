<?php
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::prefix('api')->group(function(){
	Route::resource('posts', 'PostsController');
});

//Route::get('/posts', 'PostsController@index');
//Route::get('/posts/create', 'PostsController@create');
//Route::post('/posts/create/data', 'PostsController@store');
