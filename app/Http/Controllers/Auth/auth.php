<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'create'])->name('login.create');
Route::resource('/register', 'RegisterController');