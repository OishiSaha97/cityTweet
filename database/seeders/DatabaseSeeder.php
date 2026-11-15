<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role_id'=>1,
            'lname'=>fake()->firstName(),
            'password'=>bcrypt('123456')
        ]);

        User::factory()->count(100)->create([
            'role_id'=>1,
            'lname'=>fake()->lastName(),
            'password'=>bcrypt('123456')
        ]);

        $this->call([
            // FriendTableSeeder::class,
            
        ]);
    }
}
