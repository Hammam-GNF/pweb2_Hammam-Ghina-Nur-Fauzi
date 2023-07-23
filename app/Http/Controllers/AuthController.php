<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginpage()
    {
        // Gunakan middleware 'guest' untuk mengarahkan pengguna yang sudah login ke halaman dashboard
        if (Auth::check()) {
            return redirect('/dashboard');
        }

        return view('authentication.login');
    }

    public function postlogin(Request $request)
    {
        // Validasi input
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);

        // Cek apakah pengguna sudah terotentikasi
        if (Auth::attempt($request->only('name', 'password'))) {
            return redirect('/dashboard');
        }

        return redirect('/')->with('gagal', 'Login gagal!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
