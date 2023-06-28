<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                "title" => "Software Engineering",
                "slug" => "software-engineering",
                "description" => "Software engineering is the systematic application of engineering approaches to the development of software."
            ],
            [
                "title" => "Web Development",
                "slug" => "web-development",
                "description" => "Web development is the work involved in developing a Web site for the Internet or an intranet."
            ],
            [
                "title" => "Design",
                "slug" => "design",
                "description" => "Web development is the work involved in developing a Web site for the Internet or an intranet."
            ],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
