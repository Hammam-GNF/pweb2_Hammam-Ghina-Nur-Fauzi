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
        User::create([
            'role_id' => '1',
            'nama' => 'Hammam',
            'email' => 'hammam@gmail.com',
            'password' => Hash::make('admin'),
        ]);
        User::create([
            'role_id' => '2',
            'nama' => 'Narindra',
            'email' => 'narindra@gmail.com',
            'password' => Hash::make('guru'),
        ]);
    }
}
