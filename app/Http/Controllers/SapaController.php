<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SapaController extends Controller
{
    public function index()
    {
        $nama = 'Ahmad Fauzi';
        $pesan = "Halo, {$nama}! Ini ditulis di dalam Controller.";
        return $pesan;
    }
}
