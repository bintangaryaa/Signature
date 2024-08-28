<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MigrationsignatureController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignatureController;


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

// Rute untuk halaman Subitem 1
Route::get('/report/subitem1', function () {
    return view('report.subitem1'); // Pastikan ada file report/subitem1.blade.php
})->name('report.subitem1');

// Rute untuk halaman Subitem 2
Route::get('/report/subitem2', function () {
    return view('report.subitem2'); // Pastikan ada file report/subitem2.blade.php
})->name('report.subitem2');

Route::get('/signatures', [SignatureController::class, 'index'])->name('signatures.index');
Route::get('/signatures/{id}', [SignatureController::class, 'show'])->name('signatures.show');
Route::post('/signatures', [SignatureController::class, 'store'])->name('signatures.store');
Route::post('/search', [SignatureController::class, 'search'])->name('search');
Route::get('/migrationsignature', [MigrationsignatureController::class, 'index'])->name('migrationsignature');

