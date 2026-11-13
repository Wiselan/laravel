<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            ['nim' => '2511061','nama' => 'Budi', 'prodi' => 'informatika', 'angkatan' => 2021],
            ['nim' => '2511062','nama' => 'Siti', 'prodi' => 'sistem informasi', 'angkatan' => 2020],
            ['nim' => '2511063','nama' => 'Joko', 'prodi' => 'teknik komputer', 'angkatan' => 2022],
        ];

        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }
}