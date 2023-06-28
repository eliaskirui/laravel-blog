<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Elias Kirui',
                'username' => 'eliask',
                'email' => 'eliaskirui24@gmail.com',
                'password' => 'password',
                'designation' => 'Software Engineer',
                'email_verified_at' => now()
            ]
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user);
        }
    }
}
