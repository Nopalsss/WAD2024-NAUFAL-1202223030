<!-- resources/views/dosens/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Dosen</title>
    <!-- Tambahkan CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h2 class="text-center">Tambah Data Dosen</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('mahasiswas.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" id="nim" name="nim" class="form-control" placeholder="Masukkan NIM" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                        <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" class="form-control" placeholder="Masukkan Nama Mahasiswa" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Masukkan Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" id="jurusan" name="jurusan" class="form-control" placeholder="Masukkan Jurusan" required>
                    </div>
                    <div class="mb-3">
                         <label for="kode_dosen" class="form-label">Dosen Wali</label>
                        <select id="kode_dosen" name="kode_dosen" class="form-control" required>
                        <option value="">-- Pilih Dosen Wali --</option>
                    @foreach ($dosens as $dosen)
                        <option value="{{ $dosen->id }}">{{ $dosen->kode_dosen }}</option>
                    @endforeach
                        </select>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="{{ route('mahasiswas.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Tambahkan JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>