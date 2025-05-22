<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'user_id',
        'comment',
    ];

    // Relation: Comment belongs to post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    // Relation: Comment belongs to user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
