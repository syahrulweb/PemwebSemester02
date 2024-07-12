<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\JatahController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman selamat datang
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route untuk dashboard yang memerlukan autentikasi dan verifikasi email
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route untuk pengajuan
    Route::middleware(['auth', 'verified', 'level:karyawan'])->group(function () {
        Route::get('/pengajuan', [PengajuanController::class, 'index'])->name('pengajuan.index');
        Route::get('/pengajuan/create', [PengajuanController::class, 'create'])->name('pengajuan.create');
        Route::post('/pengajuan', [PengajuanController::class, 'store'])->name('pengajuan.store');
        Route::get('/pengajuan/{pengajuan}', [PengajuanController::class, 'show'])->name('pengajuan.show');
        Route::get('/pengajuan/{pengajuan}/edit', [PengajuanController::class, 'edit'])->name('pengajuan.edit');
        Route::put('/pengajuan/{pengajuan}', [PengajuanController::class, 'update'])->name('pengajuan.update');
        Route::delete('/pengajuan/{pengajuan}', [PengajuanController::class, 'destroy'])->name('pengajuan.destroy');
    });

    // Route untuk landing page setelah login
    Route::get('/landing/index', [LandingController::class, 'index'])->name('landing.index');
    Route::get('/landing/admin/jatah', [LandingController::class, 'index'])->name('landing.admin.jatah.index');
    Route::get('/landing/pengajuan/create', [LandingController::class, 'index'])->name('landing.pengajuan.create.index');
    Route::get('admin/pengajuan/create', [PengajuanController::class, 'create'])->name('pengajuan.create');
    Route::put('/pengajuan/{pengajuan}', [PengajuanController::class, 'update'])->name('pengajuan.update');
    Route::post('admin/pengajuan', [PengajuanController::class, 'store'])->name('pengajuan.store');

    // Route resource untuk jatah dan pengajuan
    Route::resource('jatahs', JatahController::class);
    Route::resource('pengajuans', PengajuanController::class);
});

// Route untuk profil pengguna
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route untuk pegawai dan pengajuan hanya bisa diakses oleh karyawan
    Route::resource('pegawais', PegawaiController::class)->only(['index', 'show']);
    Route::resource('pengajuans', PengajuanController::class)->only(['index', 'show', 'create', 'store']);

    Route::get('/jatah', [JatahController::class, 'index'])->name('jatah.index');
    Route::get('/pengajuan', [PengajuanController::class, 'index'])->name('pengajuan.index');
});

// Route untuk login, proses login, dan logout
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('postlogin');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Route untuk admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/pegawai', [PegawaiController::class, 'index'])->name('admin.pegawai.index');
    Route::get('/admin/divisi', [DivisiController::class, 'index'])->name('admin.Divisi.index');
    Route::get('/admin/jatah', [JatahController::class, 'index'])->name('admin.jatah.index');
    Route::get('/admin/pengajuan', [PengajuanController::class, 'index'])->name('admin.pengajuan.index');

    // Route resource untuk pegawai
    Route::resource('pegawais', PegawaiController::class)->except(['create', 'store']); // Exclude create and store
    Route::put('/pegawais/{pegawai}', [PegawaiController::class, 'update'])->name('pegawais.update');
    Route::get('admin/pegawais/create', [PegawaiController::class, 'create'])->name('pegawais.create');
    Route::post('admin/pegawais', [PegawaiController::class, 'store'])->name('pegawais.store');
    Route::get('/pegawais/{pegawai}/edit', [PegawaiController::class, 'edit'])->name('pegawais.edit');
    Route::delete('/pegawais/{pegawai}', [PegawaiController::class, 'destroy'])->name('pegawais.destroy');

    // Route untuk divisi
    Route::resource('divisi', DivisiController::class)->except(['create', 'store', 'destroy']);
    Route::get('admin/divisi/create', [DivisiController::class, 'create'])->name('divisi.create');
    Route::post('admin/divisi', [DivisiController::class, 'store'])->name('divisi.store');
    Route::get('/divisi/{divisi}/edit', [DivisiController::class, 'edit'])->name('divisi.edit');
    Route::put('/divisi/{divisi}', [DivisiController::class, 'update'])->name('divisi.update');
    Route::delete('/divisi/{divisi}', [DivisiController::class, 'destroy'])->name('divisi.destroy');

    // Route untuk jatah
    Route::resource('jatahs', JatahController::class)->except(['create', 'store', 'destroy']);
    Route::get('admin/jatahs/create', [JatahController::class, 'create'])->name('jatahs.create');
    Route::post('admin/jatahs', [JatahController::class, 'store'])->name('jatahs.store');
    Route::get('/jatahs/{jatah}/edit', [JatahController::class, 'edit'])->name('jatahs.edit');
    Route::put('/jatahs/{jatah}', [JatahController::class, 'update'])->name('jatahs.update');
    Route::delete('/jatahs/{jatah}', [JatahController::class, 'destroy'])->name('jatahs.destroy');

    // Route untuk pengajuan oleh admin
    Route::resource('pengajuans', PengajuanController::class)->except(['create', 'store', 'destroy']);
    // Route::post('admin/pengajuan', [PengajuanController::class, 'store'])->name('pengajuan.store');
    // Route::get('admin/pengajuan/create', [PengajuanController::class, 'create'])->name('pengajuan.create');
    // Route::put('/pengajuan/{pengajuan}', [PengajuanController::class, 'update'])->name('pengajuan.update');
    Route::delete('/pengajuan/{pengajuan}', [PengajuanController::class, 'destroy'])->name('pengajuan.destroy');
    Route::patch('/pengajuan/terima/{id}', [PengajuanController::class, 'terima'])->name('pengajuan.terima');
    Route::patch('/pengajuan/tolak/{id}', [PengajuanController::class, 'tolak'])->name('pengajuan.tolak');
});

// Menggunakan require untuk menyertakan file auth.php
require __DIR__.'/auth.php';
