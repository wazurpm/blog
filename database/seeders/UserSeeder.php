<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = 'Javier Carrillo';
        $user->email = 'javier@carrillo.com';
        $user->password = bcrypt('123456789');

        $user->save();

        $user = new User();

        $user->name = 'Ana Pablos';
        $user->email = 'Ana@Pablos.com';
        $user->password = bcrypt('987654321');

        $user->save();
    }
}
