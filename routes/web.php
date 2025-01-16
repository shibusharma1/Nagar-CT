<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/admin', function () {
    return view('layout.admin.master');
});

// chatGPT

// Common routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// User routes
Route::middleware(['auth.custom', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [AuthController::class, 'userDashboard'])->name('user.dashboard');
});

// Admin routes
Route::middleware(['auth.custom', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AuthController::class, 'adminDashboard'])->name('admin.dashboard');
});

// Logout route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

