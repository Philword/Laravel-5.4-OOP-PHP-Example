<?php

namespace App;

use App\Post;
use App\Comments;
use App\User;


use Illuminate\Database\Eloquent\Model;
use \Conner\Likeable\Likeable;

class Post extends Model
{
    protected $fillable = ['description', 'image', 'user_id'];
    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
