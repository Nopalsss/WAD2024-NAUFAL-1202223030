<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Mahasiswa - Step 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="public/css/auth/register_step_2.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <i class="fas fa-lock fa-3x mb-3"></i>
                        <h4 class="mb-2">Buat Password</h4>
                        <div class="progress-steps">
                            <div class="step">1</div>
                            <div class="step active">2</div>
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

                        <form action="index.php?controller=auth&action=register_step_2" method="POST" id="passwordForm">
                            <div class="mb-4">
                                <label for="password" class="form-label">
                                    <i class="fas fa-key me-2"></i>Password
                                </label>
                                <div class="password-wrapper">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Masukkan password baru" required>
                                    <i class="fas fa-eye toggle-password" onclick="togglePassword('password')"></i>
                                </div>
                                <div class="form-text">
                                    <i class="fas fa-info-circle me-1"></i>
                                    Password minimal 8 karakter dengan kombinasi huruf dan angka
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="confirm_password" class="form-label">
                                    <i class="fas fa-check-circle me-2"></i>Konfirmasi Password
                                </label>
                                <div class="password-wrapper">
                                    <input type="password" class="form-control" id="confirm_password"
                                        name="confirm_password" placeholder="Konfirmasi password baru" required>
                                    <i class="fas fa-eye toggle-password"
                                        onclick="togglePassword('confirm_password')"></i>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="fas fa-user-plus me-2"></i>Daftar Sekarang
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

    <script>
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            const icon = input.nextElementSibling;

            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>