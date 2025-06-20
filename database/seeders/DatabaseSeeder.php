<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'admin' => true,
        ]);

         User::factory()->create([
            'name' => 'Técnico User',
            'email' => 'tecnico@example.com',
            'tecnico' => true,
        ]);
         User::factory()->create([
            'name' => 'Joaquim',
            'email' => 'joaquim@example.com',
        ]);

         User::factory(20)->create();
    }
}
