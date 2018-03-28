<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($comment)
    {
     	$this->comments()->create([
 			'title' => request('title'),
 			'body' => request('body')
     	]);
    }
}
