<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::factory()->create([
            'title' => 'Post 1',
            'content' => 'Content 1',
            'category' => 'Category 1',
            'published_at' => now(),
            'is_active' => true
        ]);

        Post::factory()->create([
            'title' => 'Post 2',
            'content' => 'Content 2',
            'category' => 'Category 2',
            'published_at' => now(),
            'is_active' => true
        ]);
    }
}
