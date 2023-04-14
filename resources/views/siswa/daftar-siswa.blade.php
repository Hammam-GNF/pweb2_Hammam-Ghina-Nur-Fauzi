@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h4>Daftar Siswa</h4>
                    <a href="">
                        <button class="btn btn-success">Tambah Data</button>
                    </a>
                    <br><br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>                           
                                <th scope="col">NIS</th>                           
                                <th scope="col">Tanggal Lahir</th>                           
                                <th scope="col">Aksi</th>                           
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $x)
                            <tr>
                                <th>{{ $x->nama_siswa }}</th>
                                <td>{{ $x->nis }}</td>
                                <td>{{ $x->tgl_lahir }}</td>
                                <td>
                                    <a href="">
                                        <button class="btn btn-warning">Edit</button>
                                    </a>
                                    <a href="">
                                        <button class="btn btn-danger">Hapus</button>
                                    </a>
                                </td>
                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection