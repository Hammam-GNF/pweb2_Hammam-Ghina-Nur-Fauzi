@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h4>Tambah Data Guru</h4>
                
                <div class="card mb-4">
                    
                    <div class="card-body">
                      <form action="{{ route('insert-guru') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Nama Lengkap</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input type="text" name="nama_guru" class="form-control" required id="basic-icon-default-fullname" placeholder="contoh : Hammam Ghina Nur Fauzi" aria-label="" aria-describedby="basic-icon-default-fullname2" >
                          </div>
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Nomor Induk Pegawai</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                            <input type="number" name="nip" id="basic-icon-default-company" class="form-control" required placeholder="contoh : 12345" aria-label="" aria-describedby="basic-icon-default-company2">
                          </div>
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Tanggal Lahir</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                            <input type="date" name="tgl_lahir" id="basic-icon-default-company" class="form-control" required>
                          </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <a href="{{ route('guru') }}" class="btn btn-secondary">Batal</a>
                      </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
