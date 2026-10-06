<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'create: form tambah mahasiswa';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nama = $request->input('nama');
        $nim  = $request->input('nim');

        return "Data yang diterima -> NIM: {$nim}, Nama: {$nama}";
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return "edit: from edit mahasiswa id {$id}";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        return "update: perbarui data id {$id}";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return "destroy: hapus data id {$id}";
    }

    public function apiIndex()
    {
        return response()->json([
            'status' => 'sukses',
            'pesan' => 'Ini contoh response JSON dari Controller',
        ]);
    }

    public function cariMahasiswa(Request $request)
    {
    $keyword = $request->query('nama');
    
    if ($keyword) {
        return "Kata kunci pencarian nama mahasiswa: {$keyword}";
    }
    
        return "Silakan masukkan kata kunci pencarian pada form.";
    }
}
