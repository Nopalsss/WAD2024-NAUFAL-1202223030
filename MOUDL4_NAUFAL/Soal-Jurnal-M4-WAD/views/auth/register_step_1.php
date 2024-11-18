<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Mahasiswa - Step 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="public/css/auth/register_step_1.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <i class="fas fa-user-plus fa-3x mb-3"></i>
                        <h4 class="mb-2">Registrasi Mahasiswa</h4>
                        <div class="progress-steps">
                            <div class="step active">1</div>
                            <div class="step">2</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php // TODO: Tampilkan session message
                            // 1. Cek apakah session message ada
                            ?>
                            <div class="alert alert-info alert-dismissible fade show">
                                <i class="fas fa-info-circle me-2"></i>
                                <?php
                                // 2. Tampilkan session message
                                // 3. Hapus session message setelah ditampilkan
                                ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php // TODO: Tutup if ?>

                        <form action="index.php?controller=auth&action=register_step_1" method="POST">
                            <div class="mb-4">
                                <label for="id_pendaftaran" class="form-label">
                                    <i class="fas fa-id-card me-2"></i>ID Pendaftaran
                                </label>
                                <input type="text" class="form-control" id="id_pendaftaran" name="id_pendaftaran"
                                    placeholder="Masukkan ID Pendaftaran Anda" required>
                                <div class="form-text">
                                    <i class="fas fa-info-circle me-1"></i>
                                    Masukkan ID Pendaftaran yang telah dinyatakan lulus seleksi
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="fas fa-arrow-right me-2"></i>Lanjutkan
                                </button>
                            </div>
                        </form>
                        <div class="text-center mt-4">
                            <p class="mb-0">Sudah punya akun?
                                <a href="index.php?controller=auth&action=login" class="login-link">
                                    <i class="fas fa-sign-in-alt me-1"></i>Login disini
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>