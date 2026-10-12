@extends('layouts.app')
@section('judul', 'Detail Mahasiswa - ' . $mahasiswa->nama)

<h3>Daftar Nilai</h3>
@forelse ($mahasiswa->nilai as $n)
    <p>{{ $n->matakuliah->nama_mk ?? '-' }} {{ $n->nilai }}</p>
@empty
    <p>Belum ada data nilai.</p>
@endforelse
```
@section('konten')
    <h1>Detail Mahasiswa</h1>
    <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
    <p><strong>Nama:</strong> {{ $mahasiswa->nama }}</p>
    <p><strong>Prodi:</strong> {{ $mahasiswa->prodi }}</p>
    <a href="{{ route('mahasiswa.index') }}">&laquo; Kembali</a>
@endsection