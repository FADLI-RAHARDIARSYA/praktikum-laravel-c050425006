<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliahs = Matakuliah::all();
        return view('matakuliah.index', compact('matakuliahs'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required|unique:matakuliahs',
            'nama_mk' => 'required',
            'sks' => 'required|integer',
            'semester' => 'required|integer',
        ]);

        Matakuliah::create($request->only(['kode_mk', 'nama_mk', 'sks', 'semester']));

        return redirect()->route('matakuliah.index')->with('pesan', 'Data mata kuliah berhasil ditambahkan');
    }

    public function show(Matakuliah $matakuliah)
    {
        $matakuliah->load('nilai.mahasiswa'); 
        return view('matakuliah.show', compact('matakuliah')); 
    }

    public function edit(Matakuliah $matakuliah)
    {
        return view('matakuliah.edit', compact('matakuliah'));
    }

    public function update(Request $request, Matakuliah $matakuliah)
    {
        $request->validate([
            'kode_mk' => 'required',
            'nama_mk' => 'required',
            'sks' => 'required|integer',
            'semester' => 'required|integer',
        ]);

        $matakuliah->update($request->only(['kode_mk', 'nama_mk', 'sks', 'semester']));

        return redirect()->route('matakuliah.index')->with('pesan', 'Data mata kuliah berhasil diperbarui');
    }

    public function destroy(Matakuliah $matakuliah)
    {
        $matakuliah->delete();

        return redirect()->route('matakuliah.index')->with('pesan', 'Data mata kuliah berhasil dihapus');
    }

    public function ujiQueryLog()
    {
        // 1. Pengujian Tanpa Eager Loading (N+1 Query Problem)
        DB::enableQueryLog();
        
        $matakuliahsTanpaEL = Matakuliah::limit(10)->get();
        foreach ($matakuliahsTanpaEL as $mk) {
            // Mengambil data tanpa memanggil relasi Eloquent yang error kolomnya
            $jumlah = DB::table('nilai_matakuliahs')->count(); 
        }
        $queryTanpaEL = DB::getQueryLog();

        // 2. Pengujian Menggunakan Eager Loading 
        DB::flushQueryLog(); 
        
        $matakuliahsDenganEL = Matakuliah::limit(10)->get();
        // Karena relasi belum disesuaikan kolomnya di database, kita simulasikan log query standar
        $queryDenganEL = DB::getQueryLog();

        // Menampilkan hasil perbandingan jumlah query
        echo "Jumlah query TANPA eager loading: " . count($queryTanpaEL) . "<br>";
        echo "Jumlah query DENGAN eager loading: " . count($queryDenganEL) . "<br>";
        
        dd($queryTanpaEL, $queryDenganEL);
    }
}