<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HistroyPeminjaman;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test', [TestController::class, 'index']);

Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [HomeController::class, 'profile'])->name('home.profile');
    Route::post('/profile/update', [HomeController::class, 'profileSetting'])->name('home.profile.update');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::get('/cart/{uuid}', [CartController::class, 'store'])->name('cart.add');
    Route::post('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    Route::get('/checkout-finish/{uuid}', [CartController::class, 'checkoutfinish'])->name('cart.finish');
    Route::get('/history', [HistroyPeminjaman::class, 'index'])->name('history.index');
    Route::post('/update/status/{uuid}', [HistroyPeminjaman::class, 'updatestatus'])->name('status.update');
});
