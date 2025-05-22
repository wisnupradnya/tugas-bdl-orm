<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{

    public function updateUser()
    {
        $user =  User::find(1);
        $user->first_name = "Wisnu";
        $user->save();
    }

    public function getUserPost()
    {
        $user = User::find(1);
        $allPosts = $user->posts;

        return $allPosts;
    }

    public function postLazyLoading()
    {
        $user = User::find(1);

        if ($user->is_active) {
            // Baru ambil posts ketika user aktif
            $posts = $user->posts;
            return $posts;
        }
    }

    public function postEagerLoading()
    {
        $users = User::with('posts')->get();

        foreach ($users as $user) {
            foreach ($user->posts as $post) {
                echo $user->name . ': ' . $post->title;
            }
        }
    }

    public function testAssesorAndMutators()
    {
        $user = User::findOrFail(1);

        $user->full_name;

        $user->password = "password";
        $user->save();
    }
}
