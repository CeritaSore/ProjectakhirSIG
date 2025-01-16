<?php

use App\Http\Controllers\MapController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', function () {
    return view('index');
});
Route::get('/map', function () {
    return view('map');
});
Route::get('/spatial', [MapController::class, 'spatial']);
Route::get('/spatial', [MapController::class, 'spatial']);
Route::get('/nonspatial', [MapController::class,'nonspatial']);
