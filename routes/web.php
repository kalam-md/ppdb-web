<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PendaftaranSiswaController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\ProfilController;
use App\Models\Blog;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    $blogs = Blog::paginate(3);
    return view('welcome', [
        'blogs' => $blogs
    ]);
});

Route::get('/agenda', function () {
    $blogs = Blog::all();
    return view('agenda.agenda', [
        'blogs' => $blogs
    ]);
});

Route::get('/detail', function () {
    return view('agenda.detail');
});

Route::get('/foto', function () {
    return view('foto.foto');
});

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::get('/daftar', [AuthController::class, 'daftar'])->name('daftar')->middleware('guest');
Route::post('/daftar', [AuthController::class, 'store']);
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::resource('pendaftaran-siswa', PendaftaranSiswaController::class)->middleware('auth');
Route::post('/pendaftaran-siswa/{id}/status', [PendaftaranSiswaController::class, 'updateStatus'])->name('pendaftaran-siswa.update-status');
Route::get('/pendaftaran-siswa/{slug}/cetak', [PendaftaranSiswaController::class, 'cetak'])->name('pendaftaran-siswa.cetak');
Route::get('/ppdb', [PpdbController::class, 'index'])->name('ppdb.index')->middleware('auth');

Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index')->middleware('auth');
Route::post('/profil/update', [ProfilController::class, 'update'])->name('profil.update');

Route::resource('blog', BlogController::class)->middleware('auth');
Route::get('/agenda/{slug}/detail', [BlogController::class, 'detail'])->name('agenda.detail');

Route::get('/guru', [GuruController::class, 'index'])->name('guru.index')->middleware('auth');
