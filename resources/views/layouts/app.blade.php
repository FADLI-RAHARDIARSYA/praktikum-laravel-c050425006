<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- @yield('judul') akan diisi secara dinamis oleh halaman anak --}}
    <title>@yield('judul', 'Aplikasi Akademik')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        header { background-color: #f4f4f4; padding: 10px; margin-bottom: 20px; }
        footer { margin-top: 30px; padding-top: 10px; border-top: 1px solid #ccc; font-size: 14px; }
    </style>
</head>
<body>
    <header>
        <h2>Sistem Informasi Akademik</h2>
        {{-- Menggunakan @include untuk menyisipkan partial navbar (Jawaban Soal 3) --}}
        @include('partials.navbar')
    </header>

    <main>
        {{-- Tempat konten utama dari halaman anak disisipkan --}}
        @yield('konten')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Praktikum Pemrograman Web - Politeknik Negeri Banjarmasin</p>
    </footer>
</body>
</html>