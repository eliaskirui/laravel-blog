<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                "title" => "How to become a software engineer?",
                "slug" => "how-to-become-a-software-engineer",
                "category_id" => 1,
                "user_id" => 1,
                "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, diam id aliquam aliquam, nunc nunc aliquet nunc, vitae aliquam nisl nunc vitae nisl. Null",
            ],
            [
                "title" => "How to become a web developer?",
                "slug" => "how-to-become-a-web-developer",
                "category_id" => 2,
                "user_id" => 1,
                "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, diam id aliquam aliquam, nunc nunc aliquet nunc, vitae aliquam nisl nunc vitae nisl. Null",
            ],
            [
                "title" => "How to become a designer?",
                "slug" => "how-to-become-a-designer",
                "category_id" => 3,
                "user_id" => 1,
                "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, diam id aliquam aliquam, nunc nunc aliquet nunc, vitae aliquam nisl nunc vitae nisl. Null",
            ]
        ];

        foreach ($posts as $post) {
            $postModel = \App\Models\Post::create($post);
            $postModel->copyMedia(new File(public_path("images/dummy/posts/$postModel->slug.jpeg")))->toMediaCollection('image');
        }
    }
}
