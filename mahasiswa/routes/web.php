<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/{nomor}', [MahasiswaController::class, 'detail'])->name('mahasiswa.detail');
Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi.index');
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');