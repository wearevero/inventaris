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
Route::controller(InventarisController::class)->group(function () {
    Route::get('/inventaris', 'index')->name('inventaris.index');
    Route::get('/inventaris/tambah', 'create')->name('inventaris.tambah');
    Route::post('/inventaris/tambah', 'store')->name('inventaris.store');
    Route::get('/inventaris/detail/{id}', 'show')->name('inventaris.show');
    Route::delete('/inventaris/destroy/{id}', 'destroy')->name('inventaris.destroy');
    Route::get('/inventaris/edit/{id}', 'edit')->name('inventaris.edit');
    Route::put('/inventaris/edit/{id}', 'update')->name('inventaris.update');
    Route::get('/inventaris/import', 'importData')->name('inventaris.importData');
    Route::post('/inventaris/import', 'import')->name('inventaris.import');
    Route::get('inventaris/export', 'export')->name('inventaris.export');
});

// Import and Export to Excel Route
Route::controller(UserController::class)->group(function(){
    Route::get('users', 'index');
    Route::get('users-export', 'export')->name('users.export');
    Route::post('users-import', 'import')->name('users.import');
});

require __DIR__.'/auth.php';
