<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'nama'      => 'Dafa Davern',
            'email'     => 'admin@example.com',
            'Jabatan'   => 'Admin',
            'password'  =>  Hash::make('123321123'),
            'is_status' => true,
        ]);

        User::create([
            'nama'      => 'Titi',
            'email'     => 'titi@example.com',
            'Jabatan'   => 'Client',
            'password'  =>  Hash::make('123321123'),
            'is_status' => true,
        ]);

        User::create([
            'nama'      => 'Toto',
            'email'     => 'toto@example.com',
            'Jabatan'   => 'Client',
            'password'  =>  Hash::make('123321123'),
            'is_status' => true,
        ]);
    }
}
