<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Mahasiswa - EAD University</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="public/css/auth/login.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header">
                        <i class="fas fa-user-graduate fa-3x mb-3"></i>
                        <h4 class="mb-0">Login Mahasiswa</h4>
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

                        <form action="index.php?controller=auth&action=login" method="POST">
                            <div class="mb-4">
                                <label for="nim" class="form-label">
                                    <i class="fas fa-id-card me-2"></i>NIM
                                </label>
                                <input type="text" class="form-control" id="nim" name="nim"
                                    value="<?php // TODO: Tampilkan cookie nim
                                        // 1. Cek apakah cookie nim ada
                                        // 2. Tampilkan cookie nim
                                        ?>"
                                    placeholder="Masukkan NIM Anda" required>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">
                                    <i class="fas fa-lock me-2"></i>Password
                                </label>
                                <input type="password" class="form-control" id="password" name="password"
                                    value="<?php // TODO: Tampilkan cookie password
                                        // 1. Cek apakah cookie password ada
                                        // 2. Tampilkan cookie password
                                        ?>"
                                    placeholder="Masukkan password Anda" required>
                            </div>
                            <div class="remember-me-switch">
                                <label class="switch">
                                    <input type="checkbox" id="remember_me" name="remember_me"
                                        <?php // TODO: Tampilkan cookie remember me
                                            // 1. Cek apakah cookie remember me ada
                                            // 2. Tampilkan cookie remember me
                                        ?>
                                    >
                                    <span class="slider"></span>
                                </label>
                                <span class="remember-me-text">
                                    Ingat Saya
                                </span>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="fas fa-sign-in-alt me-2"></i>Login
                                </button>
                                <?php if (isset($_COOKIE['nim']) && isset($_COOKIE['password'])): ?>
                                    <a href="index.php?controller=dashboard&action=index" class="btn btn-outline-primary">
                                        <i class="fas fa-cookie me-2"></i>Test Login dengan Cookie
                                    </a>
                                <?php endif; ?>
                            </div>
                        </form>
                        <div class="text-center mt-4">
                            <p class="mb-0">Belum punya akun?
                                <a href="index.php?controller=auth&action=register_step_1" class="register-link">
                                    <i class="fas fa-user-plus me-1"></i>Register disini
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