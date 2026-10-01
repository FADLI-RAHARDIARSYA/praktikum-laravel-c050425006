@extends('layouts.app')

{{-- Judul dinamis yang menyertakan nama mata kuliah --}}
@section('judul', 'Detail - ' . $matakuliah->nama_mk)

@section('konten')
<h1>Detail Mata Kuliah</h1>

<p><strong>Kode MK:</strong> {{ $matakuliah->kode_mk }}</p>
<p><strong>Nama MK:</strong> {{ $matakuliah->nama_mk }}</p>
<p><strong>SKS:</strong> {{ $matakuliah->sks }}</p>

<a href="{{ route('matakuliah.index') }}">&laquo; Kembali ke Daftar</a>
@endsection