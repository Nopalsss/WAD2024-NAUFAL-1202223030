@extends('layouts.app')

@section('title', $dosen->exists ? 'Edit Dosen' : 'Tambah Dosen')

@section('content')
<h1 class="mb-4">{{ $dosen->exists ? 'Edit Dosen' : 'Tambah Dosen' }}</h1>
<form action="{{ $dosen->exists ? route('dosens.update', $dosen->id) : route('dosens.store') }}" method="POST">
    @csrf
    @if($dosen->exists)
        @method('PUT')
    @endif
    <div class="mb-3">
        <label for="kode_dosen" class="form-label">Kode Dosen</label>
        <input type="text" name="kode_dosen" id="kode_dosen" class="form-control" value="{{ old('kode_dosen', $dosen->kode_dosen) }}" required>
    </div>
    <div class="mb-3">
        <label for="nama_dosen" class="form-label">Nama Dosen</label>
        <input type="text" name="nama_dosen" id="nama_dosen" class="form-control" value="{{ old('nama_dosen', $dosen->nama_dosen) }}" required>
    </div>
    <!-- Tambahkan input lainnya sesuai kebutuhan -->
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection
