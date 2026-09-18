<?php

use App\Models\Mahasiswa;

Route::get('/mahasiswa', function () {
    $data = Mahasiswa::all();
    return view('mahasiswa.index', compact('data'));
    });