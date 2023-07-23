<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'role_id' => 1, // Gunakan nilai angka (integer) untuk mewakili ID peran (role)
            'name' => 'Pusinduk',
            'email' => 'pusinduk@gmail.com',
            'password' => Hash::make('Pusinduk'),
        ]);

        User::create([
            'role_id' => 2, // Gunakan nilai angka (integer) untuk mewakili ID peran (role)
            'name' => 'Yaine',
            'email' => 'yai@gmail.com',
            'password' => Hash::make('Yaine'),
        ]);
    }
}
