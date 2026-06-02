<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\Category;
use App\Livewire\User\Notes;

Route::get('/', function () {
    return view('welcome');
});

// REGISTER
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

// LOGIN
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);    

// LOGOUT
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dasbor');
    });

    Route::get('/favorites', function () {
        return view('favorit');
    });

    Route::get('/notes', function () {
        return view('catatan');
    });

    Route::get('/category', function () {
        return view('kategori');
    });

    Route::get('/archived', function () {
        return view('arsip');
    });

    Route::get('/trash', function () {
        return view('sampah');
    });

    Route::get('/edit-profile', function () {
        return view('edit');
    });
});