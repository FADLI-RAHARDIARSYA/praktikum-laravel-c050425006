<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas Mandiri 2 - Query Builder</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { border-collapse: collapse; width: 60%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>

    <h2>Rekap Jumlah Mahasiswa per Program Studi</h2>
    
    <table>
        <thead>
            <tr>
                <th>Program Studi</th>
                <th>Jumlah Mahasiswa</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($rekap as $item)
                <tr>
                    <td>{{ $item->prodi }}</td>
                    <td>{{ $item->jumlah }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="2" style="text-align: center;">Belum ada data rekap.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>