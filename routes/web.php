<?php

use App\Http\Controllers\KabupatenController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\ProvinsiController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layout/app');
});

Route::get('/persebaran', function () {
    return view('tematik/persebaran');
});

Route::get('/provinsi', [ProvinsiController::class, 'index'])->name('provinsi.index');

Route::get('/kabupaten', [KabupatenController::class, 'index'])->name('kabupaten.index');

Route::get('/persebaran', [MapController::class, 'index'])->name('persebaran.index');
Route::get('/kepadatan_penduduk', [MapController::class, 'kepadatan_penduduk'])->name('kepadatan.penduduk');

Route::get('/jumlah_sekolah', [MapController::class, 'jumlah_sekolah'])->name('jumlah.sekolah');
Route::get('/kepadatan_sekolah', [MapController::class, 'kepadatan_sekolah'])->name('kepadatan.sekolah');

Route::get('/jumlah_guru', [MapController::class, 'jumlah_guru'])->name('jumlah.guru');
Route::get('/kepadatan_guru', [MapController::class, 'kepadatan_guru'])->name('kepadatan.guru');
