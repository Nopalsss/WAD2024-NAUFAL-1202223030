<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = ['kode_dosen', 'nama_dosen', 'nip', 'email', 'no_telepon'];

    /**
     * Relasi One-to-Many: Dosen memiliki banyak Mahasiswa
     */
    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class, 'kode_dosen');
    }
}
