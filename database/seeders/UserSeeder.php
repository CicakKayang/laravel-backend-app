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
            'name' => 'Galuh Hasan',
            'email' => 'admin@gmail.com',
            'email_verified_at'  => now(),
            'role' => 'admin',
            'phone' => '6285226983111',
            'bio' => 'flutter dev',
            'password' => Hash::make('1234567890'),
        ]);
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at'  => now(),
            'role' => 'superadmin',
            'phone' => '6285666777888',
            'bio' => 'laravel dev',
            'password' => Hash::make('1234567890'),
        ]);
    }
}
