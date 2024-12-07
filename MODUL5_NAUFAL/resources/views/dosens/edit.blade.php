<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Dosen</title>
    <!-- Tambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-warning text-white text-center">
                <h2>Update Data Dosen</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('dosens.update', $dosen->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <!-- Input Kode Dosen -->
                    <div class="mb-3">
                        <label for="kode_dosen" class="form-label">Kode Dosen</label>
                        <input type="text" id="kode_dosen" name="kode_dosen" class="form-control" value="{{ $dosen->kode_dosen }}" required>
                    </div>
                    <!-- Input Nama Dosen -->
                    <div class="mb-3">
                        <label for="nama_dosen" class="form-label">Nama Dosen</label>
                        <input type="text" id="nama_dosen" name="nama_dosen" class="form-control" value="{{ $dosen->nama_dosen }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" id="emmail" name="email" class="form-control" value="{{ $dosen->email }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_telepon" class="form-label">Nomor Telepon</label>
                        <input type="text" id="no_telepon" name="no_telepon" class="form-control" value="{{ $dosen->no_telepon }}" required>
                    </div>
                    <!-- Tombol -->
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('dosens.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Tambahkan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>