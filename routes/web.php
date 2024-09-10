<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user-dashboard', [UserController::class, 'showUser'])->name('user.user-dashboard');

// Route::get('/admin-dashboard', [AdminController::class, 'showAdmin'])->name('admin.admin-dashboard');

// Route::get('/vendor-dashboard', [VendorController::class, 'showVendor'])->name('vendor.vendor-dashboard');

Route::middleware('auth','role:user')->group(function () {
    Route::get('/user-dashboard', [UserController::class, 'showUser'])->name('user.user-dashboard');
});

Route::middleware('auth','role:admin')->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'showAdmin'])->name('admin.admin-dashboard');
});

Route::middleware('auth','role:vendor')->group(function () {
    Route::get('/vendor-dashboard', [VendorController::class, 'showVendor'])->name('vendor.vendor-dashboard');
});

// Route::get('/404-error', [UserController::class, 'show404error'])->name('user.404');

Route::get('/errors', function () {
    return view('user404-error');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
