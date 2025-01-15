<?php

use App\Http\Controllers\KabupatenController;
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

