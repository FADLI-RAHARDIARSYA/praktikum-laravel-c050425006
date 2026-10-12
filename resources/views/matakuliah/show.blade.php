@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Mata Kuliah: {{ $matakuliah->nama_mk }}</h2>
    <p>Kode: {{ $matakuliah->kode_mk }} | SKS: {{ $matakuliah->sks }} | Semester: {{ $matakuliah->semester }}</p>

    <hr>

    <h3>Daftar Mahasiswa yang Mengambil Mata Kuliah Ini</h3>
    <ul>
        @forelse ($matakuliah->nilai as $n)
            <li>
                <strong>{{ $n->mahasiswa->nim ?? '-' }}</strong> - 
                {{ $n->mahasiswa->nama ?? '-' }} 
                (Nilai: {{ $n->nilai }})
            </li>
        @empty
            <p>Belum ada data mahasiswa yang mengambil mata kuliah ini.</p>
        @endforelse
    </ul>

    <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection