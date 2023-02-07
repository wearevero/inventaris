<?php

use App\Http\Controllers\BagianController;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TeamController;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

// Master kategori route
Route::get('/kategori', [KategoriController::class])->name('kategori.index');

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

// Bagian Route
Route::controller(BagianController::class)->prefix('bagian')->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('bagian.index');
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
    Route::get('/cari', 'cari')->name('inventaris.cari');
    Route::get('/search', 'search')->name('inventaris.search');
});

// Master kategori route
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/{kategori:slug}', [KategoriController::class, 'show_kategori']);


// Master kategori route
Route::get('/bagian/{bagian:slug}', [BagianController::class, 'show_bagian']);


// Master bagian route
Route::controller(BagianController::class)->prefix('bagian')->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('bagian.index');
    Route::get('/tambah', 'create')->name('bagian.tambah');
    Route::post('/tambah', 'store')->name('bagian.store');
    Route::delete('/delete', 'destroy')->name('bagian.delete');
    Route::put('/edit', 'update')->name('bagian.update');
    Route::post('/import', 'import')->name('bagian.import');
    Route::get('/export', 'export')->name('bagian.export');
});

// Team page controller
Route::controller(TeamController::class)->prefix('team')->middleware('auth')->group(function() {
    Route::get('/', 'index')->name('team.index');
    Route::get('/tambah', 'create')->name('team.tambah');
});


require __DIR__.'/auth.php';
