<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])->name('register.index')->middleware('guest');

Route::get('/login', [SessionsController::class, 'create'])->name('login.index')->middleware('guest');

Route::get('/logout', [SessionsController::class, 'destroy'])->name('login.destroy')->middleware('auth');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::post('/login', [SessionsController::class, 'store'])->name('login.store');
