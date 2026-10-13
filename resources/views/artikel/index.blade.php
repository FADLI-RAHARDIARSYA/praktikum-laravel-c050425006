@extends('layouts.app')

@section('konten')
<h1>Daftar Artikel</h1>

<a href="{{ route('artikel.create') }}">+ Tambah Artikel Baru</a>
<br><br>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($artikel as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>
                <a href="{{ route('artikel.show', $item->id) }}">{{ $item->judul }}</a>
            </td>
            <td>{{ $item->status }}</td>
            <td>
                <a href="{{ route('artikel.edit', $item->id) }}">Edit</a>
                <form action="{{ route('artikel.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div style="margin-top: 15px;">
    {{ $artikel->links() }}
</div>
@endsection