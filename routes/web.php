<?php
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/show/{post}', 'PostsController@show');
Route::post('/posts/create/data', 'PostsController@store');

Route::post('/posts/show/{post}/comments', 'CommentsController@store');