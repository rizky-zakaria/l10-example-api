<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 50; $i++) {
            User::create([
                'name' => 'User' . rand(1, 199),
                'email' => 'user' . rand(1, 199) . $i . '@gmail.com',
                'password' => Hash::make('123')
            ]);
        }
    }
}
