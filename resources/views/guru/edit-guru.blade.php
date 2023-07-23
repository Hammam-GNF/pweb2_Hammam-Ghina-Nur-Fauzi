@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h4>Edit Data Guru</h4>
                
                <div class="card mb-4">
                    
                    <div class="card-body">
                      <form action="{{ route('update-guru', $data->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Nama Lengkap</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input type="text" name="nama_guru" class="form-control" id="basic-icon-default-fullname" aria-label="" aria-describedby="basic-icon-default-fullname2" value="{{ $data->nama_guru }}">
                          </div>
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Nomor Induk Pegawai</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                            <input type="text" name="nip" id="basic-icon-default-company" class="form-control" placeholder="contoh : 12345" aria-label="" aria-describedby="basic-icon-default-company2" value="{{ $data->nip }}">
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
                            <input type="date" name="tgl_lahir" id="basic-icon-default-company" class="form-control" value="{{ $data->tgl_lahir }}">
                          </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('guru') }}" class="btn btn-secondary">Batal</a>
                      </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
