<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index()
    {
        $nama = 'Fadli Rahardiarsya'; 
        $nim = 'C050425006'; 
        $prodi = 'Sistem Informasi Kota Cerdas'; 

        return "Halo! Perkenalkan nama saya {$nama}, NIM {$nim}, dari program studi {$prodi}.";
    }
}
