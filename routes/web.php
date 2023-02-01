<?php

use App\Http\Controllers\BagianController;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
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
Route::controller(KategoriController::class)->prefix('kategori')->middleware('auth')->group(function (){
    Route::get('/', 'index')->name('kategori.index');
    Route::get('/tambah', 'create')->name('kategori.tambah');
    Route::post('/tambah', 'store')->name('kategori.store');

    // custom kategori route
    Route::get('/monitor', 'monitor')->name('kategori.monitor');
    Route::get('/notebook', 'notebook')->name('kategori.notebook');
    Route::get('/camera', 'camera')->name('kategori.camera');
    Route::get('/ups', 'ups')->name('kategori.ups');
    Route::get('/cpu', 'cpu')->name('kategori.cpu');
    Route::get('/printer', 'printer')->name('kategori.printer');
    Route::get('/dvr', 'dvr')->name('kategori.dvr'); 
});

// Master bagian route
Route::controller(BagianController::class)->prefix('bagian')->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('bagian.index');
    Route::get('/tambah', 'create')->name('bagian.tambah');
    Route::post('/tambah', 'store')->name('bagian.store');
    Route::delete('/delete', 'destroy')->name('bagian.delete');
    Route::put('/edit', 'update')->name('bagian.update');
    Route::get('/import', 'import')->name('bagian.import');
    Route::get('/export', 'export')->name('bagian.export');
});


require __DIR__.'/auth.php';
