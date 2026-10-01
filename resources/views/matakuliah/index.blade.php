@extends('layouts.app')

{{-- Menentukan judul unik untuk tab browser --}}
@section('judul', 'Daftar Mata Kuliah')

@section('konten')
<h1>Daftar Mata Kuliah</h1>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode MK</th>
            <th>Nama MK</th>
            <th>SKS</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($matakuliah as $mk)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $mk->kode_mk }}</td>
            <td>{{ $mk->nama_mk }}</td>
            <td>{{ $mk->sks }}</td>
            <td>
                <a href="{{ route('matakuliah.show', $mk->id) }}">Detail</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5">Belum ada data mata kuliah.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection