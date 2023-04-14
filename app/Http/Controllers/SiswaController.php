<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function siswa()
    {
        $data = Siswa::all();
        // dd($data);
        return view('siswa.daftar-siswa', compact('data'));
    }

    public function create()
    {
        return view('siswa.create-siswa');
    }

    public function insert(Request $request)
    {
        $data = Siswa::create([
            'nama_siswa' => $request->nama_siswa,
            'nis' => $request->nis,
            'tgl_lahir' => $request->tgl_lahir,
        ]);
        dd($data);
        $data->save();
        return redirect()->route('siswa');
    }
}
