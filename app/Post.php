<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;
use App\Comment;

class Post extends Model
{
    protected $table = 'posts';

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
