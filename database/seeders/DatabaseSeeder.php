<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $users = [
            [
                'first_name'   => 'Alice',
                'last_name'     => 'Wonderland',
                'is_active' => true,
                'email'    => 'alice@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'first_name'     => 'Bob',
                'last_name'     => 'Alice',
                'is_active' => true,
                'email'    => 'bob@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'first_name'     => 'Charlie',
                'last_name'     => 'Puth',
                'is_active' => true,
                'email'    => 'charlie@example.com',
                'password' => Hash::make('password'),
            ],
        ];

        foreach ($users as $u) {
            User::create($u);
        }

        // 2. Posts
        $posts = [
            [
                'user_id'      => 1,
                'title'        => 'Introduction to Laravel',
                'body'         => 'Laravel is a web application framework with expressive, elegant syntax...',
                'is_published' => true,
                'meta'         => json_encode(['views' => 150]),
            ],
            [
                'user_id'      => 2,
                'title'        => 'Eloquent ORM Basics',
                'body'         => 'Eloquent makes it easy to interact with your database using Active Record...',
                'is_published' => true,
                'meta'         => json_encode(['views' => 85]),
            ],
            [
                'user_id'      => 3,
                'title'        => 'Working with Soft Deletes',
                'body'         => 'Soft deletes allow you to keep records in the database but mark them as deleted...',
                'is_published' => false,
                'meta'         => json_encode(['views' => 40]),
            ],
        ];

        foreach ($posts as $p) {
            Post::create($p);
        }

        // 3. Comments
        $comments = [
            [
                'post_id' => 1,
                'user_id' => 2,
                'comment' => 'Great intro, thanks!',
            ],
            [
                'post_id' => 1,
                'user_id' => 3,
                'comment' => 'Very helpful, learned a lot.',
            ],
            [
                'post_id' => 2,
                'user_id' => 1,
                'comment' => 'Can you explain eager loading next?',
            ],
        ];

        foreach ($comments as $c) {
            Comment::create($c);
        }
    }
}
