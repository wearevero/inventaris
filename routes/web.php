<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Chirp Route
Route::resource('chirps', ChirpController::class)
->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

// Authentication Route
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Inventaris Route
Route::controller(InventarisController::class)->prefix('inventaris')->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('inventaris.index');
    Route::get('/tambah', 'create')->name('inventaris.tambah');
    Route::post('/tambah', 'store')->name('inventaris.store');
    Route::get('/detail/{id}', 'show')->name('inventaris.show');
    Route::delete('/destroy/{id}', 'destroy')->name('inventaris.destroy');
    Route::get('/edit/{id}', 'edit')->name('inventaris.edit');
    Route::put('/edit/{id}', 'update')->name('inventaris.update');
    Route::get('/import', 'importData')->name('inventaris.importData');
    Route::post('/import', 'import')->name('inventaris.import');
    Route::get('/export', 'export')->name('inventaris.export');
});


require __DIR__.'/auth.php';
