@extends('layouts.app')

@section('konten')
<h1>Tambah Artikel Baru</h1>

@if ($errors->any())
    <div style="background: #fee2e2; color: #991b1b; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('artikel.store') }}" method="POST">
    @csrf
    
    <div>
        <label>Judul Artikel:</label><br>
        <input type="text" name="judul" value="{{ old('judul') }}" placeholder="Judul Artikel"><br>
        @error('judul')
            <small style="color: red;">{{ $message }}</small><br>
        @enderror
    </div><br>

    <div>
        <label>Isi Artikel:</label><br>
        <textarea name="isi" placeholder="Isi Artikel (minimal 20 karakter)">{{ old('isi') }}</textarea><br>
        @error('isi')
            <small style="color: red;">{{ $message }}</small><br>
        @enderror
    </div><br>

    <div>
        <label>Status:</label><br>
        <select name="status">
            <option value="">-- Pilih Status --</option>
            <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
            <option value="terbit" {{ old('status') == 'terbit' ? 'selected' : '' }}>Terbit</option>
        </select><br>
        @error('status')
            <small style="color: red;">{{ $message }}</small><br>
        @enderror
    </div><br>

    <button type="submit">Simpan</button>
</form>
@endsection