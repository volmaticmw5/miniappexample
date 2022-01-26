<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Default (login)
Route::get('/', [PageController::class, 'Index'])->name('Login');

// Authentication
Route::post('/', [AuthController::class, 'Authenticate'])->name('Login');
Route::get('/logout', [AuthController::class, 'Logout'])->name('Logout')->middleware('access.control');

// Inner pages
Route::get('/dashboard', [PageController::class, 'DashboardPage'])->name('Dashboard')->middleware('access.control');
Route::get('/products', [PageController::class, 'ProductsPage'])->name('Products')->middleware('access.control');
Route::get('/settings', [PageController::class, 'SettingsPage'])->name('Settings')->middleware('access.control');
