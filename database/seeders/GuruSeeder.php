<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guru::create([
            'nama_guru' => 'Narindra',
            'nip' => '12345',
            'tgl_lahir' => '1997-01-01',
        ]);
        Guru::create([
            'nama_guru' => 'Laura',
            'nip' => '54321',
            'tgl_lahir' => '1998-01-01',
        ]);
    }
}
