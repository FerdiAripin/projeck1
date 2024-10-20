<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//User Route
Route::middleware(['auth', 'verified', 'rolemanager:user'])->prefix('user')->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('/jadwal', [UserController::class, 'jadwal'])->name('jadwal');
});

//Admin Route
Route::middleware(['auth', 'verified', 'rolemanager:admin'])->prefix('admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';