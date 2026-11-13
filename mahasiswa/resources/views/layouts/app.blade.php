<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
   <nav class="navbar navbar-expand navbar-dark bg-dark px-3">
    <a class="navbar-brand" href="{{ route('beranda') }}">Daftar Mahasiswa</a>
    <div class="navbar-nav">
        <a class="nav-link {{ request()->routeIs('mahasiswa.*') ? 'active' : '' }}"
           href="{{ route('mahasiswa.index') }}">mahasiswa</a>
        <a class="nav-link {{ request()->routeIs('prodi.*') ? 'active' : '' }}"
           href="{{ route('prodi.index') }}">prodi</a>
        <a class="nav-link {{ request()->routeIs('tentang') ? 'active' : '' }}"
           href="{{ route('tentang') }}">Tentang</a>
    </div>
</nav>

    <div class="container mt-4">
        @yield('isi')
    </div>
</body>
</html>