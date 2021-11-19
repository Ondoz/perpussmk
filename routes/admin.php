<?php

use App\Http\Controllers\Admin\{
    BukuController,
    KategoriController,
    PeminjamanController,
    UserController
};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index');
});

Route::group(['prefix' => 'kategori', 'as' => 'kategori.'], function () {
    Route::get('/', [KategoriController::class, 'index'])->name('index');
    Route::post('/', [KategoriController::class, 'store'])->name('store');
});

Route::group(['prefix' => 'buku', 'as' => 'buku.'], function () {
    Route::get('/', [BukuController::class, 'index'])->name('index');
    Route::post('/', [BukuController::class, 'store'])->name('store');
});

Route::group(['prefix' => 'peminjaman', 'as' => 'peminjaman.'], function () {
    Route::get('/', [PeminjamanController::class, 'index'])->name('index');
});

Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
});

Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
    Route::get('/', [SettingController::class, 'index'])->name('index');
});
