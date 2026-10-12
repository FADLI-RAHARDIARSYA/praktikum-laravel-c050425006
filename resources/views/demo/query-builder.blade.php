<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Demo Query Builder</title>
</head>
<body>
    <h1>Daftar Mahasiswa (Query Builder)</h1>
    <ul>
        @forelse ($data as $mhs)
            <li>{{ $mhs->nama }} - Semester {{ $mhs->semester }} ({{ $mhs->prodi }})</li>
        @empty
            <li>Tidak ada data mahasiswa.</li>
        @endforelse
    </ul>
</body>
</html>