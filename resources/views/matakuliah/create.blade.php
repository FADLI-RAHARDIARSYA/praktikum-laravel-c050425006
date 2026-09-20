<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Kuliah</title>
</head>
<body>
    <h1>Tambah Mata Kuliah Baru</h1>

    <form action="/matakuliah" method="POST">
        @csrf
        <div style="margin-bottom: 10px;">
            <label>Kode MK:</label><br>
            <input type="text" name="kode_mk" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label>Nama MK:</label><br>
            <input type="text" name="nama_mk" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label>SKS:</label><br>
            <input type="number" name="sks" min="1" max="6" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label>Semester:</label><br>
            <input type="number" name="semester" min="1" max="8" required>
        </div>

        <div style="margin-bottom: 15px;">
            <label>Dosen Pengampu:</label><br>
            <select name="dosen_id">
                <option value="">-- Pilih Dosen --</option>
                @foreach ($dosen as $d)
                    <option value="{{ $d->id }}">{{ $d->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Simpan Mata Kuliah</button>
        <a href="/matakuliah">Batal</a>
    </form>
</body>
</html>