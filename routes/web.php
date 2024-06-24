<?php

use App\Http\Controllers\mahasiswaController;
use App\Models\mahasiswa;
use Illuminate\Support\Facades\Route;

Route::resource('/',mahasiswaController::class);
// Route::resource('create',mahasiswaController::class);

Route::resource('layout.jadwal.create',mahasiswaController::class);
Route::post('kehadiran/store',[mahasiswaController::class, 'store']);
Route::post('/kehadiran/store',[mahasiswaController::class, 'store']);
// Route::post('/create/store',[mahasiswaController::class, 'store']);

// Route::post('/create',mahasiswaController::class);