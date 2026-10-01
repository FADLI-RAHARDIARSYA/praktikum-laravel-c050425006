<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Models\User;
use Illuminate\Http\Request;

class MatakuliahController extends Controller

{
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return view('matakuliah.index', compact('matakuliah'));
    }

    public function create()
    {
        return 'create: form tambah mata kuliah';
    }

    public function store(Request $request)
    {
        return 'store: simpan data mata kuliah baru';
    }

    public function show(Matakuliah $matakuliah)
    {
        return view('matakuliah.show', compact('matakuliah'));
    }
}