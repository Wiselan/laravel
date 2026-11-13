@extends('layouts.app')
@section('judul', 'Daftar Mahasiswa')
@section('isi')
    <h1>Daftar Mahasiswa</h1>

    <table class="table table-striped">
        <tr>
            <th>NIM</th><th>Nama</th><th>Prodi</th>
        </tr>
        @foreach ($mahasiswa as $p)
        <tr>
            <td>{{ $p['nim'] }}</td>
            <td>{{ $p['nama'] }}</td>
            <td>{{ $p['prodi'] }}</td>
        </tr>
        @endforeach
    </table>
@endsection