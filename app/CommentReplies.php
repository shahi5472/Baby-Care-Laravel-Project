<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentReplies extends Model
{
    protected $fillable = [
        'comment_id',
        'user_id',
        'message',
    ];

    protected $with = [
        'user'
    ];

    public function comment()
    {
        return $this->belongsTo('App\Comment');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
