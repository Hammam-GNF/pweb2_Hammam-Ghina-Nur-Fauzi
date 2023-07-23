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
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
        ]);
        // dd($data);
        $data->save();
        return redirect()->route('guru')->with('suksestambah', 'Data berhasil ditambahkan');
    }
    public function update(Request $request, $id)
    {
        $data = Guru::findOrFail($id);

        // Mengupdate data berdasarkan input dari form edit
        $data->nama_guru = $request->nama_guru;
        $data->nip = $request->nip;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->save();

        return redirect()->route('guru')->with('suksesedit', 'Data berhasil diubah');
    }
    public function destroy(Request $request, $id)
    {
        $data = Guru::findOrFail($id);
        $data->delete();

        return redirect()->route('guru')->with('suksestambah', 'Data berhasil dihapus');
    }
    public function edit($id)
    {
        $data = Guru::find($id);
        return view('guru.edit-guru', compact('data'));
    }
}
