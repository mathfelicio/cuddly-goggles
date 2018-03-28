<?php
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts/create/data', 'PostsController@store');
