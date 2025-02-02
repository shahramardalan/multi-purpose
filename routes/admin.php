<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/login', [AdminAuthController::class, 'login'])->name('login');
Route::get('/forgot-password', [AdminAuthController::class, 'passwordRequest'])->name('password.request');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')
    ->middleware('user.type:admin');
