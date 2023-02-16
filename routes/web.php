<?php

use App\Http\Controllers\BagianController;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use Spatie\Health\Http\Controllers\HealthCheckResultsController;

// The health path
Route::get("health?fresh", HealthCheckResultsController::class, "__invoke");

Route::view("/", 'auth.login');
Route::view("/dashboard", 'dashboard')
    ->middleware(["auth", "verified"])
    ->name("dashboard");

// Chirp Route
Route::resource("chirps", ChirpController::class)
    ->only(["index", "store", "edit", "update", "destroy"])
    ->middleware(["auth", "verified"]);

// Profile path
Route::middleware("auth")->group(function () {
    Route::get("/profile", [ProfileController::class, "edit"])->name(
        "profile.edit"
    );
    Route::patch("/profile", [ProfileController::class, "update"])->name(
        "profile.update"
    );
    Route::delete("/profile", [ProfileController::class, "destroy"])->name(
        "profile.destroy"
    );
});

// Inventaris path
Route::controller(InventarisController::class)
    ->prefix("inventaris")
    ->middleware("auth")
    ->group(function () {
        Route::get("/", "index")->name("inventaris.index");
        Route::get("/create", "create")->name("inventaris.create");
        Route::post("/create", "store")->name("inventaris.store");
        Route::get("/detail/{id}", "show")->name("inventaris.show");
        Route::delete("/destroy/{id}", "destroy")->name("inventaris.destroy");
        Route::get("/edit/{id}", "edit")->name("inventaris.edit");
        Route::put("/edit/{id}", "update")->name("inventaris.update");
        Route::post("/import", "import")->name("inventaris.import");
        Route::get("/export", "export")->name("inventaris.export");
        Route::get("/cari", "cari")->name("inventaris.cari");
        Route::get("/search", "search")->name("inventaris.search");
    });

// Bagian route
Route::controller(BagianController::class)->prefix('bagian')->middleware('auth')->group( function() {
    Route::get('/', 'index')->name('bagian.index');
    Route::get('/create', 'create')->name('bagian.create');
    Route::post('/create', 'store')->name('bagian.store');
    Route::get('/bagian/{bagian:slug}', 'show_bagian')->name('bagian.slug');
});

// Kategori route
Route::controller(KategoriController::class)->prefix('kategori')->middleware('auth')->group( function() {
    Route::get('/', 'index')->name('kategori.index');
    Route::get('/create', 'create')->name('kategori.crate');
    Route::post('/create', 'store')->name('kategori.store');
    Route::get("/kategori/{kategori:slug}", [
        KategoriController::class,
        "show_kategori",
    ])->name('kategori.slug');
});

// Status route
Route::controller(StatusController::class)->prefix('status')->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('status.index');
    Route::get('/create', 'create')->name('status.create');
    Route::get('/create', 'store')->name('status.store');
    Route::get('/{status:slug}', 'show_status')->name('status.slug');
});

// Master bagian route
Route::controller(BagianController::class)
    ->prefix("bagian")
    ->middleware("auth")
    ->group(function () {
        Route::get("/", "index")->name("bagian.index");
        Route::get("/tambah", "create")->name("bagian.tambah");
        Route::post("/tambah", "store")->name("bagian.store");
        Route::delete("/delete", "destroy")->name("bagian.delete");
        Route::put("/edit", "update")->name("bagian.update");
        Route::post("/import", "import")->name("bagian.import");
        Route::get("/export", "export")->name("bagian.export");
    });

// Team page controller
Route::controller(TeamController::class)
    ->prefix("team")
    ->middleware("auth")
    ->group(function () {
        Route::get("/", "index")->name("team.index");
        Route::get("/tambah", "create")->name("team.tambah");
    });

require __DIR__ . "/auth.php";
