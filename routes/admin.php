<?php

use App\Http\Controllers\Admin\{
    BukuController,
    KategoriController,
    PeminjamanController,
    UserController
};
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index');
});

Route::resource('kategori', KategoriController::class)->except([
    'create', 'show'
]);

Route::resource('buku', BukuController::class)->except([
    'create', 'show'
]);

Route::group(['prefix' => 'peminjaman', 'as' => 'peminjaman.'], function () {
    Route::get('/', [PeminjamanController::class, 'index'])->name('index');
    Route::get('/scan/{code}', [PeminjamanController::class, 'show'])->name('show');
});

Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
});

// Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
//     Route::get('/', [SettingController::class, 'index'])->name('index');
// });
