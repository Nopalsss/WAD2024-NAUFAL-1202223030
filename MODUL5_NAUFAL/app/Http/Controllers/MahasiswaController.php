<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // 1. Tampilkan Semua Data
    public function index()
    {
        $mahasiswas = Mahasiswa::with('dosens')->get();
        return view('mahasiswas.index', compact('mahasiswas'));
    }

    // 2. Tampilkan Detail
    public function show($id)
    {
        $mahasiswa = Mahasiswa::with('dosens')->findOrFail($id);
        return view('mahasiswas.show', compact('mahasiswa'));
    }

    // 3. Tampilkan Form Tambah
    public function create()
    {
        $dosens = Dosen::all();
        return view('mahasiswas.create', compact('dosens'));
    }

    // 4. Simpan Inputan dari Form Tambah
    public function store(Request $request)
    {
    $request->validate([
        'nim' => 'required|unique:mahasiswas',
        'nama_mahasiswa' => 'required',
        'email' => 'required|email|unique:mahasiswas',
        'jurusan' => 'required',
        'kode_dosen' => 'required|exists:dosens,id',
    ]);

    Mahasiswa::create($request->all());
    return redirect()->route('mahasiswas.index')->with('success', 'Data mahasiswa berhasil ditambahkan');
    }


    // 5. Tampilkan Form Edit Data
    public function getEditForm($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $dosens = Dosen::all();
        return view('mahasiswas.edit', compact('mahasiswa', 'dosens'));
    }

    // 6. Update Data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim,' . $id,
            'nama_mahasiswa' => 'required',
            'email' => 'required|email|unique:mahasiswas,email,' . $id,
            'jurusan' => 'required',
            'kode_dosen' => 'required|exists:dosens,id',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswas.index')->with('success', 'Data mahasiswa berhasil diupdate');
    }

    // 7. Hapus Data
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswas.index')->with('success', 'Data mahasiswa berhasil dihapus');
    }
}
