<?php

use App\Http\Controllers\BagianController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TeamController;
use App\Models\Inventaris;
use Illuminate\Support\Facades\Route;
use Spatie\Health\Http\Controllers\HealthCheckResultsController;

// The health path
Route::get('health', HealthCheckResultsController::class, '__invoke')->name(
    'health'
);

// Auth path
Route::view('/', 'auth.login');
Route::view('/dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Inventaris path
Route::controller(InventarisController::class)
    ->prefix('inventaris')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', 'index')->name('inventaris.index');
        Route::get('/create', 'create')->name('inventaris.create');
        Route::post('/create', 'store')->name('inventaris.store');
        Route::get('/detail/{id}', 'show')->name('inventaris.show');
        Route::delete('/destroy/{id}', 'destroy')->name('inventaris.destroy');
        Route::get('/edit/{id}', 'edit')->name('inventaris.edit');
        Route::put('/edit/{id}', 'update')->name('inventaris.update');
        Route::post('/import', 'import')->name('inventaris.import');
        Route::get('/export', 'export')->name('inventaris.export');
        Route::get('/cari', 'cari')->name('inventaris.cari');
        Route::get('/search', 'search')->name('inventaris.search');
    });

// Bagian route
Route::controller(BagianController::class)
    ->prefix('bagian')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', 'index')->name('bagian.index');
        Route::get('/create', 'create')->name('bagian.create');
        Route::post('/create', 'store')->name('bagian.store');
        Route::get('/{bagian:slug}', 'show_bagian')->name('bagian.slug');
        Route::delete('/delete', 'destroy')->name('bagian.delete');
        Route::put('/edit', 'update')->name('bagian.update');
        Route::post('/import', 'import')->name('bagian.import');
        Route::get('/export', 'export')->name('bagian.export');
    });

// Kategori route
Route::controller(KategoriController::class)
    ->prefix('kategori')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', 'index')->name('kategori.index');
        Route::get('/create', 'create')->name('kategori.create');
        Route::post('/create', 'store')->name('kategori.store');
        Route::get('/{kategori:slug}', 'show_kategori')->name('kategori.slug');
        Route::get(
            '/{kategori:slug}/{status:slug}',
            'show_kategori_status'
        )->name('kategori.status.slug');
    });

// Status route
Route::controller(StatusController::class)
    ->prefix('status')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', 'index')->name('status.index');
        Route::get('/create', 'create')->name('status.create');
        Route::get('/create', 'store')->name('status.store');
        Route::get('/{status:slug}', 'show_status')->name('status.slug');
    });

// Team page controller
Route::controller(TeamController::class)
    ->prefix('team')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', 'index')->name('team.index');
        Route::get('/tambah', 'create')->name('team.tambah');
    });

// Profile path
Route::controller(ProfileController::class)
    ->prefix('profile')
    ->middleware('auth')
    ->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });

// Route testing for generate barcode
Route::get('/inventaris/cetak-barcode/{id}', [InventarisController::class, 'cetakBarcode'])->name('cetak.barcode');

require __DIR__.'/auth.php';
