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
        User::factory(5)->create();
        User::create([

            'name' => 'wildan anwarul',
            'email' => 'anwarulwildan@gmail.com',
            'email_verified_at'  => now(),
            'password' => Hash::make('123456'),
            'role' => 'admin',
            'phone' => '6285640899224',
            'bio' => 'flutter dev',
        ]);
    }
}