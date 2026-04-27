<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

// Route halaman login (GET)
Route::get('/login', [PageController::class, 'showLogin'])->name('login');

// Route proses login (POST)
Route::post('/login', [PageController::class, 'processLogin']);

// Route logout
Route::post('/logout', [PageController::class, 'logout'])->name('logout');

// Route halaman setelah login (dilindungi middleware sederhana via cek session di controller)
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');

