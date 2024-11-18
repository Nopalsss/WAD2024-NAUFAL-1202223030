<?php
// Cek apakah session sudah dimulai, jika belum maka mulai session baru
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Memuat file controller yang diperlukan
require_once 'controllers/AuthController.php';
require_once 'controllers/DashboardController.php';

// Mengambil nilai controller dan action dari URL dengan sanitasi
// Jika tidak ada, gunakan nilai default 'dashboard' untuk controller dan 'index' untuk action
$controller = htmlspecialchars(filter_input(INPUT_GET, 'controller') ?? 'dashboard', ENT_QUOTES, 'UTF-8');
$action = htmlspecialchars(filter_input(INPUT_GET, 'action') ?? 'index', ENT_QUOTES, 'UTF-8');

// Mendefinisikan rute-rute yang valid dalam aplikasi
$valid_routes = [
    'auth' => ['login', 'register_step_1', 'register_step_2', 'logout'], // Rute untuk autentikasi
    'dashboard' => ['index'] // Rute untuk dashboard
];

try {
    // Memeriksa apakah rute yang diminta valid
    if (!array_key_exists($controller, $valid_routes) || 
        !in_array($action, $valid_routes[$controller])) {
        throw new Exception("Invalid route");
    }

    // Mengarahkan ke controller dan action yang sesuai
    switch($controller) {
        case 'auth':
            // Membuat instance AuthController untuk menangani aksi autentikasi
            $authController = new AuthController();
            switch($action) {
                case 'login':
                    $authController->login(); // Menangani proses login
                    break;
                case 'register_step_1':
                    $authController->register_step_1(); // Menangani langkah 1 registrasi
                    break;
                case 'register_step_2':
                    $authController->register_step_2(); // Menangani langkah 2 registrasi
                    break;
                case 'logout':
                    $authController->logout(); // Menangani proses logout
                    break;
            }
            break;

        case 'dashboard':
            // Membuat instance DashboardController untuk menangani tampilan dashboard
            $dashboardController = new DashboardController();
            $dashboardController->index(); // Menampilkan halaman dashboard
            break;
    }

} catch (Exception $e) {
    // Jika terjadi kesalahan, tampilkan halaman 404
    // Set pesan error untuk ditampilkan di halaman 404
    $_SESSION['error'] = $e->getMessage();
    include 'views/errors/404.php';
}
?>