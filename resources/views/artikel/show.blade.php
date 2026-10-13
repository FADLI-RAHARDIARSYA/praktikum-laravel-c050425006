@extends('layouts.app')

@section('konten')
<h1>{{ $artikel->judul }}</h1>

<p>
    <strong>Status:</strong> {{ ucfirst($artikel->status) }} | 
    <strong>Dibuat pada:</strong> {{ $artikel->created_at }}
</p>

<hr>

<p>{{ $artikel->isi }}</p>

<br>
<a href="{{ route('artikel.index') }}">Kembali ke Daftar Artikel</a>
@endsection