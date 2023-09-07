<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, 'login'])->name('user.login');
Route::post('/login/post', [UserController::class, 'post_login'])->name('user.post');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');

Route::prefix('register')->group(function () {
    Route::get('/', [UserController::class, 'register'])->name('user.register');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
});

    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    });

    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('products.index');
        Route::get('/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('/store', [ProductController::class, 'store'])->name('products.store');
        Route::get('/show/{id}', [ProductController::class, 'show'])->name('products.show');
        Route::post('/update/{id}', [ProductController::class, 'update'])->name('products.update');
        Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('products.delete');
    });

    Route::prefix('order')->group(function () {
        Route::get('/create', [OrderController::class, 'create'])->name('order.create');
        Route::post('/store', [OrderController::class, 'store'])->name('order.store');
        Route::get('/export', [OrderController::class, 'export'])->name('order.export');
    });

    Route::get('/customer', function () {
        return view('pages.admin.customer.customer');
    });