<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'Title 1',
            'content' => 'Konten 1',
            'slug'=>uniqid(),
            'is_published' => 0
        ]);
    }
}
