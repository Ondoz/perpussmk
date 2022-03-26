<?php

use App\Http\Controllers\Admin\{
    BukuController,
    KategoriController,
    PeminjamanController,
    PengembalianController,
    UserController,
    SettingController
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
    Route::post('/', [PeminjamanController::class, 'get_code_manual'])->name('input_manual');
    Route::get('/{id}', [PeminjamanController::class, 'show'])->name('show');
});

Route::group(['prefix' => 'pengembalian', 'as' => 'pengembalian.'], function () {
    Route::get('/', [PengembalianController::class, 'index'])->name('index');
    Route::get('/{id}/edit', [PengembalianController::class, 'edit'])->name('edit');
    Route::post('/status-item', [PengembalianController::class, 'statusItemUpdate'])->name('update_status_item');
});

Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
});

Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
    Route::get('/', [SettingController::class, 'index'])->name('index');
    Route::post('/', [SettingController::class, 'update'])->name('update');
});
