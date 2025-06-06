<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'version','is_published'];



    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
