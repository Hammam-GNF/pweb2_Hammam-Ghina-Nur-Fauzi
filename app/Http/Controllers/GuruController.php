<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class GuruController extends Controller
{
    public function guru()
    {
        $data = Guru::all();
        return view('guru.daftar-guru', compact('data'));
    }

    public function create()
    {
        return view('guru.create-guru');
    }

    public function insert(Request $request)
    {
        $data = Guru::create([
            'nama_guru' => $request->nama_guru,
            'nip' => $request->nip,
            'tgl_lahir' => $request->tgl_lahir,
        ]);
        // dd($data);
        $data->save();
        return redirect()->route('guru');
    }
}
