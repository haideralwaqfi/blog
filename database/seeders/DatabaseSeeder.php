<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        Post::factory()->create();

        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        // $user = User::factory()->create();

        // $work = Category::create([
        //     "name" => "Work",
        //     "slug" => "work"
        // ]);
        // $personal = Category::create([
        //     "name" => "Personal",
        //     "slug" => "personal"
        // ]);
        // $family = Category::create([
        //     "name" => "Family",
        //     "slug" => "family"
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id'=> $work->id,
        //     'slug' => 'my-first-post',
        //     'title' => 'My Work Post',
        //     'excerpt' => 'Lerom epsom dolar sit amot',
        //     'body' => 'Lerom epsom dolar sit amotLerom epsom dolar sit amotLerom epsom dolar sit amotLerom epsom dolar sit amot Lerom epsom dolar sit amot.'
        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id'=> $family->id,
        //     'slug' => 'my-second-post',
        //     'title' => 'My family Post',
        //     'excerpt' => 'Lerom epsom dolar sit amot',
        //     'body' => 'Lerom epsom dolar sit amotLerom epsom dolar sit amotLerom epsom dolar sit amotLerom epsom dolar sit amot Lerom epsom dolar sit amot.'
        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id'=> $personal->id,
        //     'slug' => 'my-third-post',
        //     'title' => 'My personal Post',
        //     'excerpt' => 'Lerom epsom dolar sit amot',
        //     'body' => 'Lerom epsom dolar sit amotLerom epsom dolar sit amotLerom epsom dolar sit amotLerom epsom dolar sit amot Lerom epsom dolar sit amot.'
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
