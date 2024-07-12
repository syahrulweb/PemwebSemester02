<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JatahController;
use App\Http\Controllers\DivisiController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman selamat datang
Route::get('/', function () {
    return view('welcome');
});

// Route untuk dashboard yang memerlukan autentikasi dan verifikasi email
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route untuk profil pengguna
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route untuk pegawai dan pengajuan hanya bisa diakses oleh karyawan
    Route::resource('pegawais', PegawaiController::class)->only(['index', 'show']);
    Route::resource('pengajuan', PengajuanController::class)->only(['index', 'show', 'create', 'store']);
});

// Route untuk login, proses login, dan logout
Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route-group untuk admin yang memerlukan autentikasi dan role admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/pegawai', [PegawaiController::class, 'index'])->name('admin.pegawai.index');
    Route::get('/admin/divisi', [DivisiController::class, 'index'])->name('admin.Divisi.index');
    Route::get('/admin/jatah', [JatahController::class, 'index'])->name('admin.jatah.index');
    Route::get('/admin/pengajuan', [PengajuanController::class, 'index'])->name('admin.pengajuan.index');
    
    // Route resource untuk pegawai
    Route::resource('pegawais', PegawaiController::class)->except(['create', 'store']); // Exclude create and store
    Route::put('/pegawais/{pegawai}', [PegawaiController::class, 'update'])->name('pegawais.update');
    Route::patch('/pengajuan/terima/{id}', [PengajuanController::class, 'terima'])->name('pengajuan.terima');
    Route::patch('/pengajuan/tolak/{id}', [PengajuanController::class, 'tolak'])->name('pengajuan.tolak');
    Route::get('admin/pegawais/create', [PegawaiController::class, 'create'])->name('pegawais.create');
    Route::post('admin/pegawais', [PegawaiController::class, 'store'])->name('pegawais.store');
    Route::get('/pegawais/{pegawai}/edit', [PegawaiController::class, 'edit'])->name('pegawais.edit');
    Route::delete('/pegawais/{pegawai}', [PegawaiController::class, 'destroy'])->name('pegawais.destroy');

    // divisi
    
    Route::resource('divisi', DivisiController::class)->except(['create', 'store', 'destroy']);
     Route::get('admin/divisi/create', [DivisiController::class, 'create'])->name('divisi.create');
     Route::post('admin/divisi', [DivisiController::class, 'store'])->name('divisi.store');
     Route::get('/divisi/{divisi}/edit', [DivisiController::class, 'edit'])->name('divisi.edit');
     Route::put('/divisi/{divisi}', [DivisiController::class, 'update'])->name('divisi.update');
     Route::delete('/divisi/{divisi}', [DivisiController::class, 'destroy'])->name('divisi.destroy');


    // jatah
     Route::resource('jatahs', JatahController::class)->except(['create', 'store', 'destroy']);
     Route::patch('/pengajuan/terima/{id}', [PengajuanController::class, 'terima'])->name('pengajuan.terima');
     Route::patch('/pengajuan/tolak/{id}', [PengajuanController::class, 'tolak'])->name('pengajuan.tolak');
     Route::get('admin/jatahs/create', [JatahController::class, 'create'])->name('jatahs.create');
     Route::post('admin/jatahs', [JatahController::class, 'store'])->name('jatahs.store');
     Route::get('/jatahs/{jatah}/edit', [JatahController::class, 'edit'])->name('jatahs.edit');
     Route::put('/jatahs/{jatah}', [JatahController::class, 'update'])->name('jatahs.update');
     Route::delete('/jatahs/{jatah}', [JatahController::class, 'destroy'])->name('jatahs.destroy');


    //  pengajuan
    Route::resource('pengajuan', PengajuanController::class)->except(['create', 'store']); // Exclude create, store
    Route::put('/pengajuan/{pengajuan}', [PengajuanController::class, 'update'])->name('pengajuan.update');
    Route::delete('/pengajuan/{pengajuan}', [PengajuanController::class, 'destroy'])->name('pengajuan.destroy');

    Route::resource('jatahs', JatahController::class)->except(['create', 'store', 'destroy']);
    Route::resource('divisi', DivisiController::class)->except(['create', 'store', 'destroy']);
    Route::patch('/pengajuan/terima/{id}', [PengajuanController::class, 'terima'])->name('pengajuan.terima');
    Route::patch('/pengajuan/tolak/{id}', [PengajuanController::class, 'tolak'])->name('pengajuan.tolak');
    
    // Route untuk create pegawai
    Route::get('admin/pegawais/create', [PegawaiController::class, 'create'])->name('pegawais.create');
    Route::post('admin/pegawais', [PegawaiController::class, 'store'])->name('pegawais.store');
    
    // Route untuk edit dan hapus pegawai
    Route::get('/pegawais/{pegawai}/edit', [PegawaiController::class, 'edit'])->name('pegawais.edit');
    Route::delete('/pegawais/{pegawai}', [PegawaiController::class, 'destroy'])->name('pegawais.destroy');

    // Route untuk edit pengajuan
    Route::get('/pengajuan/{pengajuan}/edit', [PengajuanController::class, 'edit'])->name('pengajuan.edit');
});


// Menggunakan require untuk menyertakan file auth.php
require __DIR__.'/auth.php';
