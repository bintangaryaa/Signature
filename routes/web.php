<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MigrationsignatureController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignatureController;
use App\Http\Controllers\ListFileSignatureController;
use App\Http\Controllers\TabelController;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/migrationsignature', function () {
    return view('migrationsignature');
});

Route::get('/report', function () {
    return view('report');
});

// Rute untuk Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute untuk MigrationsignatureController
Route::get('/migrationsignature', [MigrationsignatureController::class, 'index'])->name('migrationsignature');

// Rute untuk ReportController
Route::get('/report', [ReportController::class, 'index'])->name('report');

// Rute untuk tabel
Route::get('tabel', function(){
    return view('tabel');
});

Route::get('/signatures', [SignatureController::class, 'index'])->name('signatures.index');
Route::get('/signatures/{id}', [SignatureController::class, 'show'])->name('signatures.show');
Route::post('/signatures', [SignatureController::class, 'store'])->name('signatures.store');
Route::post('/search', [SignatureController::class, 'search'])->name('search');
Route::get('/migrationsignature', [MigrationsignatureController::class, 'index'])->name('migrationsignature');
Route::get('/migrationsignature/tabel', [TabelController::class, 'index']);
Route::get('/migrationsignature', [MigrationsignatureController::class, 'index'])->name('migrationsignature');
Route::get('/tabel', [TabelController::class, 'index'])->name('tabel');

