<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Models\User;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::with('dosen')->get();
        return view('matakuliah.index', compact('matakuliah'));
    }

    public function create()
    {
        $dosen = User::all();
        return view('matakuliah.create', compact('dosen'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required|unique:matakuliahs',
            'nama_mk' => 'required',
            'sks' => 'required|numeric',
            'semester' => 'required|numeric',
            'dosen_id' => 'nullable|exists:users,id'
        ]);

        Matakuliah::create($request->all());

        return redirect('/matakuliah');
    }
}