<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        Post::factory(20)->create();
        
        Category::create([
            "title"=>"Programing",
            "slug"=>"programing"
        ]);

        Category::create([
            "title"=>"Design",
            "slug"=>"design"
        ]);
    }
}
