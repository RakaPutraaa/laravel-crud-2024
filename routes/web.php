<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelatihanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

//kategori
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/kategori-tambah', [KategoriController::class, 'tambah'])->name('kategori-tambah');
Route::get('/kategori-edit/{id}', [KategoriController::class, 'edit'])->name('kategori-edit');
Route::post('/kategori-insert', [KategoriController::class, 'insert'])->name('kategori-insert');
Route::post('/kategori-update/{id}', [KategoriController::class, 'update'])->name('kategori-update');
Route::get('/kategori-delete/{id}', [KategoriController::class, 'delete'])->name('kategori-delete');

//berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita-detail/{id}', [BeritaController::class, 'detail'])->name('berita-detail');
Route::get('/berita-tambah', [BeritaController::class, 'tambah'])->name('berita-tambah');
Route::get('/berita-edit/{id}', [BeritaController::class, 'edit'])->name('berita-edit');
Route::post('/berita-insert', [BeritaController::class, 'insert'])->name('berita-insert');
Route::post('/berita-update/{id}', [BeritaController::class, 'update'])->name('berita-update');
Route::get('/berita-delete/{id}', [BeritaController::class, 'delete'])->name('berita-delete');

//pelatihan
Route::get('/pelatihan', [PelatihanController::class, 'index'])->name('pelatihan');
Route::get('/pelatihan-tambah', [PelatihanController::class, 'tambah'])->name('pelatihan-tambah');
Route::get('/pelatihan-edit/{id}', [PelatihanController::class, 'edit'])->name('pelatihan-edit');
Route::post('/pelatihan-insert', [PelatihanController::class, 'insert'])->name('pelatihan-insert');
Route::post('/pelatihan-update/{id}', [PelatihanController::class, 'update'])->name('pelatihan-update');
Route::get('/pelatihan-delete/{id}', [PelatihanController::class, 'delete'])->name('pelatihan-delete');
