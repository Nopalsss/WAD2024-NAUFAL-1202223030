<?php
// Mendefinisikan konfigurasi koneksi database
// $db_host: Alamat host database, defaultnya localhost untuk database lokal
// $db_user: Username untuk mengakses database, defaultnya root untuk XAMPP
// $db_pass: Password untuk mengakses database, dikosongkan untuk konfigurasi default XAMPP
// $db_name: Nama database yang akan digunakan yaitu db_modul_4
// $db_port: Port yang digunakan untuk koneksi database MySQL, defaultnya 3306
$db_host = "localhost";
$db_user = "root"; 
$db_pass = "";
$db_name = "db_modul_4";
$db_port = 3306;

// Membuat koneksi ke database menggunakan fungsi mysqli_connect
// Parameter berurutan: host, username, password, nama database, port
// Hasil koneksi disimpan dalam variabel $conn
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name, $db_port);

// Melakukan pengecekan apakah koneksi berhasil
// Jika koneksi gagal ($conn bernilai false)
// Maka program akan dihentikan dan menampilkan pesan error
if (!$conn) {
    die("Koneksi Database Gagal: " . mysqli_connect_error());
}
?>