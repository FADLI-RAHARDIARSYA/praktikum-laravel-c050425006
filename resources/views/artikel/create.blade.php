@extends('layouts.app')

@section('konten')
<h1>Tambah Artikel Baru</h1>

{{-- Menampilkan daftar pesan error validasi --}}
@if ($errors->any())
    <div style="background:#fee2e2; padding:10px; margin-bottom: 15px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('artikel.store') }}" method="POST">
    @csrf
    
    <label>Judul Artikel:</label><br>
    <input type="text" name="judul" placeholder="Judul Artikel" value="{{ old('judul') }}"><br>
    @error('judul')
        <small style="color:red;">{{ $message }}</small>
    @enderror
    <br><br>

    <label>Isi Artikel:</label><br>
    <textarea name="isi" placeholder="Isi Artikel">{{ old('isi') }}</textarea><br>
    @error('isi')
        <small style="color:red;">{{ $message }}</small>
    @enderror
    <br><br>

    <label>Status:</label><br>
    <select name="status">
        <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
        <option value="terbit" {{ old('status') == 'terbit' ? 'selected' : '' }}>Terbit</option>
    </select><br><br>

    <button type="submit">Simpan</button>
</form>
@endsection