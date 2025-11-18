<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeCardController;
use App\Http\Controllers\Admin\BeritaController as AdminBeritaController;
use App\Http\Controllers\Admin\KontakController as AdminKontakController;
use App\Http\Controllers\BeritaController; // <- controller publik
use App\Http\Controllers\KontakController;

// ==== ADMIN AREA ====
Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Home Card CRUD
    Route::resource('home-cards', HomeCardController::class);

    // Berita CRUD (Admin)
    Route::resource('berita', AdminBeritaController::class);

    // Kontak Edit (Admin)
    Route::get('kontak', [AdminKontakController::class, 'edit'])->name('admin.kontak.edit');
    Route::put('kontak', [AdminKontakController::class, 'update'])->name('admin.kontak.update');
});


// ==== HALAMAN UTAMA (Publik) ====
Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/tentang', 'tentang')->name('tentang');
Route::view('/galeri', 'galeri')->name('galeri');

// ✅ Halaman berita publik (menampilkan semua berita & detail berita)
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{berita}', [BeritaController::class, 'show'])->name('berita.show');

// ✅ Halaman kontak publik (dinamis)
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
