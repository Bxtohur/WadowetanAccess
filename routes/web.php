<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PotensiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProdukController;

Route::view('/', 'home');
Route::view('/profil', 'profil');
Route::get('/potensi', [PotensiController::class, 'indexViewer'])->name('potensi.indexViewer');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/admin', 'admin');
    Route::resource('potensi', PotensiController::class);
    Route::resource('berita', BeritaController::class);
    Route::resource('produk', ProdukController::class);
});
