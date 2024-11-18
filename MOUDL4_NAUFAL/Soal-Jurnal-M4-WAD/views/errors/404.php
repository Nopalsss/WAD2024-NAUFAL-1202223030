<!DOCTYPE html>
<html>
<head>
    <title>404 Not Found</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5 text-center">
        <h1 class="display-1">404</h1>
        <?php if (isset($_SESSION['error'])): ?>
            <p class="lead"><?php echo $_SESSION['error']; ?></p>
            <?php unset($_SESSION['error']); ?>
        <?php endif; ?>
        <p class="lead">Mau kemana nih? Halaman yang kamu cari tidak ditemukan.</p>
        <a href="index.php" class="btn btn-primary">Kembali ke halaman utama</a>
    </div>
</body>
</html>