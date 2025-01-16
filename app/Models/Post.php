<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $table = 'posts';
  protected $fillable = ['title', 'content', 'user_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }
}
