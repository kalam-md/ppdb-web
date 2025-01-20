<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftaranSiswaController;
use App\Http\Controllers\PpdbController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/agenda', function () {
    return view('agenda.agenda');
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
Route::get('/ppdb', [PpdbController::class, 'index'])->name('ppdb.index')->middleware('auth');

Route::get('/blog', [BlogController::class, 'index'])->name('blog')->middleware('auth');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store')->middleware('auth');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit')->middleware('auth');
Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update')->middleware('auth');
Route::post('/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy')->middleware('auth');
