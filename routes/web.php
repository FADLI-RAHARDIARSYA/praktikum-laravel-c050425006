<?php

use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artikel', [App\Http\Controllers\ArtikelController::class, 'index']);

use App\Http\Controllers\MatakuliahController;

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/create', [MatakuliahController::class, 'create']);
Route::post('/matakuliah', [MatakuliahController::class, 'store']);

Route::resource('mahasiswa', MahasiswaController::class);

Route::prefix('admin')->name ('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return 'Dashboard admin';
    })->name('dashboard');
});

Route::get('/sapa', function (){
    return view('sapa', ['nama' => 'Ahmad Fauzi']);
});