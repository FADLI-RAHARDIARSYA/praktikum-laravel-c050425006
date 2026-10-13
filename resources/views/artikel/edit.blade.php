@extends('layouts.app')
@section('konten')
<form action="{{ route('artikel.update', $artikel->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <label>Judul Artikel:</label><br>
    <input type="text" name="judul" value="{{ $artikel->judul }}"><br><br>

    <label>Isi Artikel:</label><br>
    <textarea name="isi">{{ $artikel->isi }}</textarea><br><br>

    <label>Status:</label><br>
    <select name="status">
        <option value="draft" {{ $artikel->status == 'draft' ? 'selected' : '' }}>Draft</option>
        <option value="terbit" {{ $artikel->status == 'terbit' ? 'selected' : '' }}>Terbit</option>
    </select><br><br>

    <button type="submit">Perbarui</button>
</form>
@endsection