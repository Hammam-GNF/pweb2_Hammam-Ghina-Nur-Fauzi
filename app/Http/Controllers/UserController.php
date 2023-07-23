<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import model User
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserController extends Controller
{
    public function user()
    {
        // Mengambil data user berdasarkan email dan nama tertentu
        $user = User::where('email', 'yai@gmail.com')->where('name', 'Yaine')->first();
        $adminUser = User::where('email', 'pusinduk@gmail.com')->where('name', 'Pusinduk')->first();

        // Menggunakan kolom 'email' sebagai data yang akan ditampilkan
        $data = $user ?? ['name' => 'Admin']; // Jika user tidak ditemukan, akan menampilkan 'Admin'
        $adminData = $adminUser ?? ['name' => 'Penanggungjawab']; // Jika adminUser tidak ditemukan, akan menampilkan 'Penanggungjawab'

        return view('dashboard', compact('data', 'adminData'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
