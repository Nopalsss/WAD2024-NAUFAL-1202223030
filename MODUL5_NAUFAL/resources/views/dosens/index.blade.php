@extends('layouts.app')

@section('title', 'Daftar Dosen')

@section('content')
<h1 class="mb-4">Daftar Dosen</h1>
<a href="{{ route('dosens.create') }}" class="btn btn-primary mb-3">Tambah Dosen</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>Email</th>
            <th>No Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dosens as $dosen)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $dosen->kode_dosen }}</td>
            <td>{{ $dosen->nama_dosen }}</td>
            <td>{{ $dosen->nip }}</td>
            <td>{{ $dosen->email }}</td>
            <td>{{ $dosen->no_telepon }}</td>
            <td>
                <a href="{{ route('dosens.edit', $dosen->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('dosens.destroy', $dosen->id) }}" method="POST" class="d-inline">
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
