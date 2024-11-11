-- Buat database u_wibu jika belum ada
CREATE DATABASE IF NOT EXISTS u_wibu;

-- Gunakan database u_wibu
USE u_wibu;

-- Buat tabel tb_student jika belum ada
CREATE TABLE tb_student (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nim VARCHAR(20) UNIQUE NOT NULL,
    jurusan VARCHAR(50) NOT NULL,
    angkatan YEAR NOT NULL
);

-- Masukkan data jika belum ada
INSERT IGNORE INTO tb_student (nama, nim, jurusan, angkatan) VALUES
('Gojo Satoru', 'NIM5147', 'Teknik Domain Expansion', 2020),
('Rikka Takanashi', 'NIM1203', 'Ilmu Pengendalian Chuunibyou', 2020),
('Zero Two', 'NIM8654', 'Psikologi Hubungan Anime', 2022),
('Yuta Togashi', 'NIM4576', 'Ilmu Pengendalian Chuunibyou', 2023),
('Mai Sakurajima', 'NIM6721', 'Psikologi Hubungan Anime', 2019),
('Sukuna Ryomen', 'NIM9831', 'Teknik Domain Expansion', 2023),
('Rimuru Tempest', 'NIM7842', 'Manajemen Isekai', 2019),
('Megumi Fushiguro', 'NIM2195', 'Teknik Domain Expansion', 2021),
('Chizuru Mizuhara', 'NIM3098', 'Psikologi Hubungan Anime', 2022),
('Ainz Ooal Gown', 'NIM9823', 'Manajemen Isekai', 2021);
