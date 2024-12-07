@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')
<h1 class="mb-4">Daftar Mahasiswa</h1>
<a href="{{ route('mahasiswas.create') }}" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Dosen Wali</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mahasiswas as $mahasiswa)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->nama_mahasiswa }}</td>
            <td>{{ $mahasiswa->email }}</td>
            <td>{{ $mahasiswa->jurusan }}</td>
            <td>{{ $mahasiswa->kode_dosen}}</td>
            <td>
                <a href="{{ route('mahasiswas.edit', $mahasiswa->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('mahasiswas.destroy', $mahasiswa->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
