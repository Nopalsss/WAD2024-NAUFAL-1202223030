# Alur Aplikasi Sistem Informasi Akademik

## 1. Struktur Aplikasi
Aplikasi ini menggunakan arsitektur yang mirip dengan MVC (Model-View-Controller) sederhana dengan komponen utama:
- Controllers: Menangani logika bisnis
- Views: Menampilkan interface ke user
- Config: Konfigurasi aplikasi (database dll)

## 2. Alur Autentikasi

### 2.1 Login
1. User mengakses halaman login
2. User memasukkan NIM dan password
3. Sistem melakukan verifikasi:
   - Cek keberadaan NIM di database
   - Verifikasi password dengan hash yang tersimpan
4. Jika berhasil:
   - Session login dibuat
   - Jika "Remember Me" dicentang, cookie dibuat
   - User diarahkan ke dashboard
5. Jika gagal, pesan error ditampilkan

### 2.2 Registrasi (2 Tahap)
#### Tahap 1:
1. User memasukkan ID Pendaftaran
2. Sistem mengecek:
   - Validitas ID Pendaftaran
   - Status kelulusan (harus 'lulus')
3. Jika valid, lanjut ke tahap 2

#### Tahap 2:
1. User membuat password baru
2. Sistem:
   - Generate NIM berdasarkan: [Kode Jurusan][Tahun Masuk][ID Pendaftaran]
   - Validasi keunikan NIM
   - Hash password
   - Simpan data mahasiswa baru
3. User diarahkan ke halaman login

### 2.3 Logout
1. Session dihapus
2. User diarahkan ke halaman login

## 3. Dashboard
1. Cek status login (session/cookie)
2. Tampilkan informasi mahasiswa:
   - NIM
   - Nama
   - Jurusan
   - Tahun Akademik (dari NIM)
   - Profil lengkap

## 4. Keamanan
- Password di-hash menggunakan PASSWORD_DEFAULT
- Session untuk tracking status login
- Cookie untuk "Remember Me"
- Validasi input pada setiap form
- Pengecekan status login pada setiap halaman terproteksi

## 5. Format NIM
Format: XXYYZZ
- XX: Kode Jurusan
  - 11: Kedokteran
  - 12: Psikologi
  - 13: Biologi
  - 14: Teknik Informatika
- YY: Tahun Masuk
- ZZ: ID Pendaftaran (padding dengan 0)

## 6. Database
### Tabel pendaftaran
- id (Primary Key)
- nama
- jurusan
- status (lulus/tidak_lulus)

### Tabel mahasiswa
- id (Primary Key)
- nim (Unique)
- id_pendaftaran (Foreign Key)
- nama
- jurusan
- password