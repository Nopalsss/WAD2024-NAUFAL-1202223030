<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return redirect()->route('dosens.index');
});

Route::resource('dosens', DosenController::class);
Route::resource('mahasiswas', MahasiswaController::class);

Route::prefix('dosens')->group(function () {
    Route::get('/', [DosenController::class, 'index'])->name('dosens.index'); // Tampilkan daftar dosen
    Route::get('/create', [DosenController::class, 'create'])->name('dosens.create'); // Tampilkan form tambah dosen
    Route::post('/', [DosenController::class, 'store'])->name('dosens.store'); // Simpan dosen baru
    Route::get('/{id}/edit', [DosenController::class, 'edit'])->name('dosens.edit'); // Tampilkan form edit dosen
    Route::put('/{id}', [DosenController::class, 'update'])->name('dosens.update'); // Update data dosen
    Route::delete('/{id}', [DosenController::class, 'destroy'])->name('dosens.destroy'); // Hapus data dosen
    Route::get('/{id}', [DosenController::class, 'show'])->name('dosens.show'); // Tampilkan detail dosen
});


Route::prefix('mahasiswas')->group(function () {
    Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswas.index'); // Tampilkan daftar mahasiswa
    Route::get('/create', [MahasiswaController::class, 'create'])->name('mahasiswas.create'); // Tampilkan form tambah mahasiswa
    Route::post('/', [MahasiswaController::class, 'store'])->name('mahasiswas.store'); // Simpan mahasiswa baru
    Route::get('/{id}/edit', [MahasiswaController::class, 'getEditForm'])->name('mahasiswas.edit'); // Tampilkan form edit mahasiswa
    Route::put('/{id}', [MahasiswaController::class, 'update'])->name('mahasiswas.update'); // Update data mahasiswa
    Route::delete('/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswas.destroy'); // Hapus data mahasiswa
    Route::get('/{id}', [MahasiswaController::class, 'show'])->name('mahasiswas.show'); // Tampilkan detail mahasiswa
});