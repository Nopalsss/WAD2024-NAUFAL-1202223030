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
                <form action="{{ route('dosens.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="kode_dosen" class="form-label">Kode Dosen</label>
                        <input type="text" id="kode_dosen" name="kode_dosen" class="form-control" placeholder="Masukkan Kode Dosen" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_dosen" class="form-label">Nama Dosen</label>
                        <input type="text" id="nama_dosen" name="nama_dosen" class="form-control" placeholder="Masukkan Nama Dosen" required>
                    </div>
                    <div class="mb-3">
                        <label for="nip" class="form-label">NIP</label>
                        <input type="text" id="nip" name="nip" class="form-control" placeholder="Masukkan NIP" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Masukkan Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Nomor Telfon</label>
                        <input type="text" id="no_telepon" name="no_telepon" class="form-control" placeholder="Masukkan Nomor Telfon" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="{{ route('dosens.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Tambahkan JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>