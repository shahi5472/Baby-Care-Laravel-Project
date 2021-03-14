<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserReview extends Model
{
    protected $table = 'user_reviews';

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }
}
