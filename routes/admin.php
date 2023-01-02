<?php

use App\Http\Controllers\Admin\{
    BukuController,
    DashbordController,
    InformationController,
    KategoriController,
    PeminjamanController,
    PengembalianController,
    UserController,
    SettingController
};
use Illuminate\Support\Facades\Route;

Route::get('/', [DashbordController::class, 'index'])->name('index');

Route::resource('kategori', KategoriController::class)->except([
    'create', 'show'
]);
Route::get('kategori/search', [KategoriController::class, 'search'])->name('kategori.search');

Route::resource('buku', BukuController::class)->except([
    'create', 'show'
]);
Route::get('buku/search', [BukuController::class, 'search'])->name('buku.search');


Route::group(['prefix' => 'peminjaman', 'as' => 'peminjaman.'], function () {
    Route::get('/', [PeminjamanController::class, 'index'])->name('index');
    Route::post('/', [PeminjamanController::class, 'get_code_manual'])->name('input_manual');
    Route::get('/show/{id}', [PeminjamanController::class, 'show'])->name('show');
    Route::get('/search', [PeminjamanController::class, 'search'])->name('search');
});


Route::group(['prefix' => 'pengembalian', 'as' => 'pengembalian.'], function () {
    Route::get('/', [PengembalianController::class, 'index'])->name('index');
    Route::get('/{id}/edit', [PengembalianController::class, 'edit'])->name('edit');
    Route::get('/item/{id}',  [PengembalianController::class, 'editItem'])->name('editItem');
    Route::post('/status-item', [PengembalianController::class, 'statusItemUpdate'])->name('update_status_item');
    Route::post('/pengembalian-item-store', [PengembalianController::class, 'storePengembalian'])->name('pengebalian-item-store');
});

Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/search', [UserController::class, 'search'])->name('search');
    Route::get('show/{id}', [UserController::class, 'show'])->name('show');
    Route::post('/', [UserController::class, 'store'])->name('store');
    Route::get('delete/{id}', [UserController::class, 'destroy'])->name('delete');
});

Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
    Route::get('/', [SettingController::class, 'index'])->name('index');
    Route::post('/', [SettingController::class, 'update'])->name('update');
});

Route::group(['prefix' => 'information', 'as' => 'information.'], function () {
    Route::get('/', [InformationController::class, 'index'])->name('index');
    Route::get('/search', [InformationController::class, 'search'])->name('search');

    Route::get('/create', [InformationController::class, 'create'])->name('create');

    Route::post('/store', [InformationController::class, 'store'])->name('store');
    Route::post('/update', [InformationController::class, 'update'])->name('update');
    Route::post('/update-status', [InformationController::class, 'updateStatus'])->name('updateStatus');
    Route::get('/edit/{uuid}', [InformationController::class, 'edit'])->name('edit');
    Route::get('/destroy/{uuid}', [InformationController::class, 'destroy'])->name('destroy');
});

Route::post('images', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('images.store');
