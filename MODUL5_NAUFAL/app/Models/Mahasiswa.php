<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = ['nim', 'nama_mahasiswa', 'email', 'jurusan', 'kode_dosen'];

    /**
     * Relasi Many-to-One: Mahasiswa dimiliki oleh satu Dosen
     */
    public function dosens()
    {
        return $this->belongsTo(Dosen::class, 'kode_dosen');
    }
}
