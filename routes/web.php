<?php
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::prefix('api')->group(function(){
	Route::resource('posts', 'PostsController');
});

