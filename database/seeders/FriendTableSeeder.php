<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Friend;

class FriendTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $friend = [
            ['name' => 'lily', 'image' => '', 'role_id' => '2', 'user_id' => '1'],
            ['name' => 'mili', 'image' => '', 'role_id' => '1', 'user_id' => '1'],
            ['name' => 'moni', 'image' => '', 'role_id' => '3', 'user_id' => '1'],
            
        ];
        Friend::insert($friend);
    }
}
