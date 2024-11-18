-- Create database and tables
CREATE DATABASE db_modul_4;

USE db_modul_4;

-- Table for student registration
CREATE TABLE pendaftaran (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    jurusan VARCHAR(50),
    status ENUM('lulus', 'tidak_lulus') DEFAULT 'tidak_lulus'
);

-- Table for registered students
CREATE TABLE mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(20) UNIQUE,
    id_pendaftaran INT,
    nama VARCHAR(100),
    jurusan VARCHAR(50),
    password VARCHAR(255),
    FOREIGN KEY (id_pendaftaran) REFERENCES pendaftaran(id)
);

-- Insert dummy data for pendaftaran
INSERT INTO pendaftaran (nama, jurusan, status) VALUES
('Xander Simatupang', 'Psikologi', 'lulus'), 
('Walrus', 'Kedokteran', 'tidak_lulus'),
('Putri Anggi', 'Biologi', 'lulus'),
('Tio', 'Teknik Informatika', 'lulus'),
('Rizky', 'Teknik Informatika', 'tidak_lulus');

-- Insert dummy data for mahasiswa
INSERT INTO mahasiswa (nim, id_pendaftaran, nama, jurusan, password) VALUES
('142301', null, 'Agus Setiawan', 'Teknik Informatika', '$2y$10$lsFaQUTO.Seh/rc8iqmdD./TUjRAcyUoEFLb4p6NN6e.UeE6HCO5m'),
('122302', null, 'Dewi Sartika', 'Psikologi', '$2y$10$lsFaQUTO.Seh/rc8iqmdD./TUjRAcyUoEFLb4p6NN6e.UeE6HCO5m'),
('132304', null, 'Siti Aminah', 'Biologi', '$2y$10$lsFaQUTO.Seh/rc8iqmdD./TUjRAcyUoEFLb4p6NN6e.UeE6HCO5m'),
('142305', null, 'Ahmad Wijaya', 'Teknik Informatika', '$2y$10$lsFaQUTO.Seh/rc8iqmdD./TUjRAcyUoEFLb4p6NN6e.UeE6HCO5m');