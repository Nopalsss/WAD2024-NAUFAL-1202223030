<?php

class DashboardController {
    private $conn;
    public function __construct() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        require_once 'config/database.php';
        $this->conn = $conn;
    }

    public function index() {
        // TODO: Implementasi sistem autentikasi dengan langkah berikut:
        // 1. Cek apakah user sudah login dengan memeriksa session login
        // 2. Jika belum login:
        //    - Cek apakah ada cookie 'nim' dan 'password'
        //    - Jika ada cookie:
        //      * Ambil nilai nim dan password dari cookie
        //      * Buat query untuk mencari mahasiswa dengan nim tersebut
        //      * Eksekusi query dengan mysqli_query
        //      * Ambil hasil dengan mysqli_fetch_assoc
        //      * Jika mahasiswa ditemukan dan password valid (gunakan password_verify):
        //        - Set session login = true
        //        - Set session user dengan data mahasiswa
        //        - Set session message = "Login Berhasil (Melalui Cookie)"
        //      * Jika tidak valid:
        //        - Set session message = "Login Gagal (Melalui Cookie)"
        //        - Redirect ke halaman login menggunakan header('Location: index.php?controller=auth&action=login')
        //        - Exit
        //    - Jika tidak ada cookie:
        //      * Set session message = "Please login first"
        //      * Redirect ke halaman login menggunakan header('Location: index.php?controller=auth&action=login')
        //      * Exit

        // TODO: Ambil data mahasiswa yang sedang login
        // 1. Ambil nim dari session user
        // 2. Buat query untuk mengambil data mahasiswa berdasarkan nim
        // 3. Eksekusi query
        // 4. Ambil hasil query dengan mysqli_fetch_assoc dan simpan ke variabel $mahasiswa

        include 'views/dashboard/index.php';
    }
}

?>