<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Users\Controllers\UserController;

Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('/login/form', [UserController::class, 'login'])->name('user.login');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
