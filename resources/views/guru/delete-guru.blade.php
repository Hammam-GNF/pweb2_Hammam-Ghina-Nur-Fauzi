@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h4>Hapus Data Guru</h4>
                
                <div class="card mb-4">
                    
                    <div class="card-body">
                      <form action="{{ route('delete-guru', $data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <p>Anda yakin ingin menghapus data guru berikut?</p>
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <p>{{ $data->nama_guru }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor Induk Pegawai</label>
                            <p>{{ $data->nip }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <p>{{ $data->tgl_lahir }}</p>
                        </div>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                        <a href="{{ route('guru') }}" class="btn btn-secondary">Batal</a>
                      </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
