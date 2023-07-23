<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class SiswaController extends Controller
{
    public function siswa()
    {
        $data = Siswa::all();
        return view('siswa.daftar-siswa', compact('data'));
    }

    public function create()
    {
        return view('siswa.create-siswa');
    }

    public function insert(Request $request)
    {
        $data = siswa::create([
            'nama_siswa' => $request->nama_siswa,
            'nis' => $request->nis,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
        ]);
        // dd($data);
        $data->save();
        return redirect()->route('siswa')->with('suksestambah', 'Data berhasil ditambahkan');
    }
    public function update(Request $request, $id)
    {
        $data = Siswa::findOrFail($id);

        // Mengupdate data berdasarkan input dari form edit
        $data->nama_siswa = $request->nama_siswa;
        $data->nis = $request->nis;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->save();

        return redirect()->route('siswa')->with('suksesedit', 'Data berhasil diubah');
    }
    public function destroy(Request $request, $id)
    {
        $data = Siswa::findOrFail($id);
        $data->delete();

        return redirect()->route('siswa')->with('sukseshapus', 'Data berhasil dihapus');
    }
    public function edit($id)
    {
        $data = Siswa::find($id);
        return view('siswa.edit-siswa', compact('data'));
    }
}
