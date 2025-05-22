<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getPublishedPost()
    {
        $posts = Post::where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->get();

        return $posts;
    }
}
