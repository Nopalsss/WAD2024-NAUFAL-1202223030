<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="public/css/dashboard/index.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <div class="brand-icon me-2">
                    <i class="fas fa-university"></i>
                </div>
                <div class="brand-text">
                    <span class="brand-title">EAD University</span>
                    <span class="brand-subtitle d-none d-md-block">Dashboard</span>
                </div>
            </a>
            <div class="nav-actions d-flex align-items-center">
                <div class="user-info me-3 d-none d-md-flex align-items-center">
                    <div class="user-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="user-details ms-2">
                        <div class="user-name"><?php echo $mahasiswa['nama']; ?></div>
                        <div class="user-role">Mahasiswa</div>
                    </div>
                </div>
                <a class="btn btn-logout" href="index.php?controller=auth&action=logout">
                    <i class="fas fa-sign-out-alt me-2"></i>Logout
                </a>
            </div>
        </div>
    </nav>

    <div class="container dashboard-wrapper">
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

        <div class="welcome-card">
            <h2 class="mb-0">Selamat Datang, <?php echo $mahasiswa['nama']; ?>! 👋</h2>
            <p class="mb-0 mt-2 opacity-75">Berikut adalah dashboard akademik Anda</p>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="stats-card">
                    <div class="stats-icon" style="background: rgba(67, 97, 238, 0.1); color: var(--primary-color);">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <div class="stats-value"><?php echo $mahasiswa['nim']; ?></div>
                    <div class="stats-label">NIM</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-card">
                    <div class="stats-icon" style="background: rgba(76, 201, 240, 0.1); color: var(--success-color);">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="stats-value"><?php echo $mahasiswa['jurusan']; ?></div>
                    <div class="stats-label">Jurusan</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-card">
                    <div class="stats-icon" style="background: rgba(247, 37, 133, 0.1); color: var(--warning-color);">
                        <i class="fas fa-calendar"></i>
                    </div>
                    <div class="stats-value">
                        <?php
                        $nimYear = substr($mahasiswa['nim'], 2, 2);
                        echo '20' . $nimYear;
                        ?>
                    </div>
                    <div class="stats-label">Tahun Akademik</div>
                </div>
            </div>
        </div>

        <div class="profile-card">
            <div class="profile-header">
                <h4 class="mb-0">Profil Mahasiswa</h4>
            </div>
            <div class="profile-info">
                <div class="d-flex align-items-center mb-4">
                    <div class="profile-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="mb-1"><?php echo $mahasiswa['nama']; ?></h5>
                        <p class="mb-0 text-muted"><?php echo $mahasiswa['jurusan']; ?></p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-label">NIM</div>
                    <div class="info-value"><?php echo $mahasiswa['nim']; ?></div>
                </div>
                
                <div class="info-item">
                    <div class="info-label">Nama Lengkap</div>
                    <div class="info-value"><?php echo $mahasiswa['nama']; ?></div>
                </div>
                
                <div class="info-item">
                    <div class="info-label">Jurusan</div>
                    <div class="info-value"><?php echo $mahasiswa['jurusan']; ?></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

