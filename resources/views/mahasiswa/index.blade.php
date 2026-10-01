<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <p><a href="{{ route('matakuliah.index') }}">Ke Daftar Mata Kuliah →</a></p>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $index => $mhs)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->prodi }}</td>
                <td>{{ $mhs->email ?? 'Belum Diisi' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
