<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    // 1. Tampilkan Semua Data
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosens.index', compact('dosens'));
    }

    // 2. Tampilkan Detail
    public function show($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosens.show', compact('dosen'));
    }

    // 3. Tampilkan Form Tambah
    public function create()
    {
        return view('dosens.create');
    }

    // 4. Simpan Inputan dari Form Tambah
    public function store(Request $request)
    {
        $request->validate([
            'kode_dosen' => 'required',
            'nama_dosen' => 'required',
            'nip' => 'required|unique:dosens',
            'email' => 'required|email|unique:dosens',
            'no_telepon' => 'required|unique:dosens,no_telepon',
        ]);

        Dosen::create($request->all());
        return redirect()->route('dosens.index')->with('success', 'Data dosen berhasil ditambahkan');
    }

    // 5. Tampilkan Form Edit Data
    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosens.edit', compact('dosen'));
    }

    // 6. Update Data
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_dosen' => 'required',
            'nama_dosen' => 'required',
            'email' => 'required|email|unique:dosens,email,' . $id,
            'no_telepon' => 'required|unique:dosens,no_telepon,'. $id,
        ]);


        $dosen = Dosen::findOrFail($id);
        $dosen->update($request->all());
        return redirect()->route('dosens.index')->with('success', 'Data dosen berhasil diupdate');
    }

    // 7. Hapus Data
    public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();
        return redirect()->route('dosens.index')->with('success', 'Data dosen berhasil dihapus');
    }
}
