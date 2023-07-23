@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h4>Daftar Guru</h4>
                @if (auth()->user()->roles->nama_role == "Admin")
                <a href="{{ route('create-guru') }}">
                    <button class="btn btn-success mb-3">Tambah Data</button>
                </a>
                @endif
                @if (session('suksesedit'))
                    <div class="alert alert-success">{{ session('suksesedit') }}</div>
                @endif
                @if (session('suksestambah'))
                    <div class="alert alert-success">{{ session('suksestambah') }}</div>
                @endif
                @if (session('sukseshapus'))
                    <div class="alert alert-success">{{ session('sukseshapus') }}</div>
                @endif
                <br>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr style="text-align: center;">
                            <th scope="col" >No</th>
                            <th scope="col" style="width: 25%;">Nama</th>
                            <th scope="col" style="width: 25%;">NIP</th>
                            <th scope="col" style="width: 25%;">Jenis Kelamin</th>
                            <th scope="col" style="width: 25%;">Tanggal Lahir</th>
                            @if (auth()->user()->roles->nama_role == "Admin")
                            <th scope="col" style="width: 25%;">Aksi</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $x)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $x->nama_guru }}</td>
                            <td>{{ $x->nip }}</td>
                            <td>{{ $x->jenis_kelamin }}</td>
                            <td>{{ $x->tgl_lahir }}</td>
                            @if (auth()->user()->roles->nama_role == "Admin")
                            <td style="display: flex; justify-content: center;">
                                <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
                                <a href="{{ route('edit-guru', $x->id) }}" style="margin-right: 10px;">
                                    <button class="btn btn-warning">Edit</button>
                                </a>
                                <form action="{{ route('delete-guru', $x->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger show_delete" value="delete">Hapus</button>
                                </form>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
