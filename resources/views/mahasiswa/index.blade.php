@extends('layouts.app')
@section('judul', 'Daftar Mahasiswa')
@section('konten')
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr><th>No</th><th>NIM</th><th>Nama</th><th>Prodi</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @forelse ($mahasiswa as $mhs)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->prodi }}</td>
                <td><a href="{{ route('mahasiswa.show', $mhs->id) }}">Detail</a></td>
            </tr>
            @empty
            <tr><td colspan="5">Belum ada data.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection