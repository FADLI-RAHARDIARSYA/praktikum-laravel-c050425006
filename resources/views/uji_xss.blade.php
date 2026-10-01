<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Uji Coba XSS</title>
</head>
<body>
    <h1>Pengujian Keamanan Blade</h1>

    <h3>1. Menggunakan {{ $nama }} (Di-escape / Aman):</h3>
    <div>
        {{ $nama }}
    </div>

    <hr>

    <h3>2. Menggunakan {!! $nama !!} (Tidak di-escape / Bahaya):</h3>
    <div>
        {!! $nama !!}
    </div>
</body>
</html>