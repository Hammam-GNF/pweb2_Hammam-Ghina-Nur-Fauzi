@extends('layouts.main')
@section('content')
   <div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h4>Masukkan Data Siswa</h4>
                
                <div class="card mb-4">
                    
                    <div class="card-body">
                      <form action="{{ route('insert-siswa') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Nama Lengkap</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input type="text" name="nama_siswa" class="form-control" id="basic-icon-default-fullname" placeholder="contoh : Hammam Ghina Nur Fauzi" aria-label="" aria-describedby="basic-icon-default-fullname2">
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Nomor Induk Siswa</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                            <input type="text" name="nis" id="basic-icon-default-company" class="form-control" placeholder="contoh : 12345" aria-label="" aria-describedby="basic-icon-default-company2">
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Tanggal Lahir</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                            <input type="date" name="tgl_lahir" id="basic-icon-default-company" class="form-control">
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
   </div>
@endsection