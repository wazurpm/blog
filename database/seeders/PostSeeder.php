<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        do {
            Post::factory()->create();
            
            $continue = $this->command->confirm('¿Desea continuar con la iteración?');
        } while ($continue);

        $this->command->info('Seeding finalizado.');
    }
}