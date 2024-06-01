<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\UnitkerjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/pasien', function () {
    return view('pasien');
});

Route::get('/periksa', function () {
    return view('periksa');
});

Route::get('/dokter', function () {
    return view('dokter');
});
Route::get('/unitkerja', function () {
    return view('unitkerja');
});

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pasien', [PasienController::class, 'index']);
Route::get('/periksa', [PeriksaController::class, 'index']);

Route::get('/dokter', [DokterController::class, 'index']);

Route::get('/unitkerja', [UnitkerjaController::class, 'index']);
