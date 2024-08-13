<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PotensiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AdminController;

Route::view('/', 'home');
Route::view('/profil', 'profil');
Route::get('/potensi/{id}', [PotensiController::class, 'show'])->name('potensi.show');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('produk.show');
Route::get('/potensi', [PotensiController::class, 'indexViewer'])->name('potensi.indexViewer');
Route::get('/berita', [BeritaController::class, 'indexViewer'])->name('berita.indexViewer');
Route::get('/produk', [ProdukController::class, 'indexViewer'])->name('produk.indexViewer');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('role:admin')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::resource('potensi', PotensiController::class);
        Route::resource('berita', BeritaController::class);
        Route::resource('produk', ProdukController::class);
    });
