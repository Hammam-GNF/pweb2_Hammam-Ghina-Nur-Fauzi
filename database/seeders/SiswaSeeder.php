<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Siswa::create([
            'nama_siswa' => 'Hafidh',
            'nis' => '123',
            'tgl_lahir' => '2004-01-01',
        ]);
        Siswa::create([
            'nama_siswa' => 'Hani',
            'nis' => '321',
            'tgl_lahir' => '2005-01-01',
        ]);
    }
}
