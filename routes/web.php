<?php

use App\Http\Controllers\CartController;
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

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/cart/{uuid}', [CartController::class, 'store'])->name('cart.add');
