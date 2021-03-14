<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'message',
        'post_id',
        'user_id',
    ];

    protected $with = [
        'replies',
        'user',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function replies()
    {
        return $this->hasMany(CommentReplies::class, 'comment_id');
    }
}
