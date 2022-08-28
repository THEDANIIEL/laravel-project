<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'Post One',
                'excerpt' => 'Summary of post One',
                'body' => 'Body of post One',
                'image_path' => 'empty',
                'is_published' => false,
                'min_to_read' => 2,
            ],
            [
                'title' => 'Post Two',
                'excerpt' => 'Summary of post Two',
                'body' => 'Body of post Two',
                'image_path' => 'empty',
                'is_published' => false,
                'min_to_read' => 2,
            ]
           
            ];

            foreach($posts as $key => $value){
                Post::create($value);
            }
    }
}
