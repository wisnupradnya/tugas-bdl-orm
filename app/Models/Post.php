<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'body',
        'is_published',
        'meta',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'meta'         => 'array',      // JSON column casting
    ];

    // Relation: Post belongs to user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation: Post has many comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Local scope: only published posts
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    // Global scope example: only non-deleted (handled by SoftDeletes default)

    // Accessor: excerpt of body
    public function getExcerptAttribute()
    {
        return substr($this->body, 0, 100) . '...';
    }
}
