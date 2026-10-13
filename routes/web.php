<?php

use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\SapaController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\StatistikMahasiswaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HitungTotalSksController;
use App\Http\Controllers\QueryBuilderDemoController;
use App\Http\Controllers\ArtikelController;

Route::resource('artikel', ArtikelController::class);

Route::get('/uji-query', [MatakuliahController::class, 'ujiQueryLog']);

Route::resource('matakuliah', MatakuliahController::class);

Route::get('/tugas-3', [QueryBuilderDemoController::class, 'tugasNomorTiga']);

Route::get('/tugas-2', [QueryBuilderDemoController::class, 'tugasNomorDua']);

Route::get('/tugas-1', [QueryBuilderDemoController::class, 'tugasNomorSatu']);

Route::get('/matakuliah/total-sks', HitungTotalSksController::class);

Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::get('/statistik', StatistikMahasiswaController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name ('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return 'Dashboard admin';
    })->name('dashboard');
});

Route::get('/sapa', function (){
    return view('sapa', [
        'nama' => 'Ahmad Fauzi',
        'KontenHtml' => '<strong>Teks Tebal</strong>',
    ]);

});

Route::resource('matakuliah', MataKuliahController::class);

Route::prefix('akademik')->group(function () {

    // Route Mahasiswa
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show'])
        ->where('nim', '[0-9]+')
        ->name('mahasiswa.show');

    // Route Matakuliah 
    Route::resource('matakuliah', MatakuliahController::class)->only([
    'index', 'show', 'create', 'store'
    ]);

});

Route::get('/profil', function () {
    return view('profil')
        ->with('nama', 'Fadli Rahardiarsya')
        ->with('nim', '2024010001')
        ->with('prodi', 'D4 Sistem Informasi Kota Cerdas');
});

Route::get('/akademik/statistik', function () {
    return view('akademik.statistik');
});

Route::get('/uji-xss', function () {
    $namaBerbahaya = '<script>alert("XSS")</script>';
    
    return view('uji_xss', [
        'nama' => $namaBerbahaya
    ]);
});

Route::get('/sapa-closure', function () {
    $nama = 'Ahmad Fauzi';
    $pesan = "Halo, {$nama}! Ini ditulis langsung di route.";
    return $pesan;
});

// routes/web.php
Route::get('/sapa-controller', [SapaController::class, 'index']);

Route::get('/latihan', [LatihanController::class, 'index']);

Route::get('/mahasiswa-uji', function () {
    return view('mahasiswa.form-uji');
});
Route::post('/mahasiswa-uji', [MahasiswaController::class, 'store']);

Route::get('/api/mahasiswa', [MahasiswaController::class, 'apiIndex']);

Route::get('/mahasiswa/cari-form', function () {
    return view('mahasiswa.cari');
});
Route::get('/mahasiswa/cari', [MahasiswaController::class, 'cariMahasiswa']);