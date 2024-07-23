<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/', function () {
    return view('store.index');
})->middleware(['auth', 'verified'])->name('store');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('addresses', AddressController::class);
    Route::resource('payments', PaymentController::class);
    Route::resource('deliveries', DeliveryController::class);
    Route::resource('reviews', ReviewController::class);
    Route::resource('discount', DiscountController::class);
    Route::resource('notifications', NotificationController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
});

require __DIR__.'/auth.php';
