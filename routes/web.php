<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\KatPelatihanController;

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

//login
Route::middleware(['guest'])->group(function() {

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('post-login');
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/proses-register', [LoginController::class, 'prosesRegister'])->name('proses-register');
});

Route::middleware(['auth'])->group(function() {


    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::middleware(['superadmin'])->group(function() {


        Route::get('/user', [UserController::class, 'index'])->name('user');
        Route::get('/user-tambah', [UserController::class, 'tambah'])->name('user-tambah');
        Route::get('/user-edit/{id}', [UserController::class, 'edit'])->name('user-edit');
        Route::post('/user-insert', [UserController::class, 'insert'])->name('user-insert');
        Route::post('/user-update/{id}', [UserController::class, 'update'])->name('user-update');
        Route::get('/user-delete/{id}', [UserController::class, 'delete'])->name('user-delete');

        //kategori pelatihan
        Route::get('/kategori-pelatihan', [KatPelatihanController::class, 'index'])->name('kategori-pelatihan-home');
        Route::get('/kategori-pelatihan-tambah', [KatPelatihanController::class, 'tambah'])->name('kategori-pelatihan-tambah');
        Route::get('/kategori-pelatihan-edit/{id}', [KatPelatihanController::class, 'edit'])->name('kategori-pelatihan-edit');
        Route::post('/kategori-pelatihan-insert', [KatPelatihanController::class, 'insert'])->name('kategori-pelatihan-insert');
        Route::post('/kategori-pelatihan-update/{id}', [KatPelatihanController::class, 'update'])->name('kategori-pelatihan-update');
        Route::get('/kategori-pelatihan-delete/{id}', [KatPelatihanController::class, 'delete'])->name('kategori-pelatihan-delete');
    });

    Route::middleware(['admin'])->group(function() {
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
    });




    // Route::post('/login', [LoginController::class])
});
