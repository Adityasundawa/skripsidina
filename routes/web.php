<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SoalController;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/menu', [DashboardController::class, 'menu'])->name('menu');
Route::get('/petunjuk', [DashboardController::class, 'petunjuk'])->name('petunjuk');
Route::get('/cp', [DashboardController::class, 'cp'])->name('cp');
Route::get('/materi', [DashboardController::class, 'materi'])->name('materi');

Route::get('/alur', [DashboardController::class, 'alur'])->name('alur');

Route::get('/tokoh', [DashboardController::class, 'tokoh'])->name('tokoh');

Route::get('/bpupki', [DashboardController::class, 'bpupki'])->name('bpupki');

Route::get('/panitia', [DashboardController::class, 'panitia'])->name('panitia');

Route::get('/ppki', [DashboardController::class, 'ppki'])->name('ppki');

Route::get('/pengesahan', [DashboardController::class, 'pengesahan'])->name('pengesahan');

Route::get('/profil', [DashboardController::class, 'profil'])->name('profil');


Route::get('/soal', [DashboardController::class, 'soal'])->name('soal');
Route::get('/input/nama', [SoalController::class, 'nama'])->name('soal.nama');





