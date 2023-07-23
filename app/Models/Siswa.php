<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = ([
        'nama_siswa', 'nis', 'jenis_kelamin', 'tgl_lahir'
    ]);
}
