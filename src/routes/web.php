<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'showIndex']);
Route::middleware('guest')->get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin']);
Route::middleware('auth')->get('/dashboard', [AuthController::class, 'showDashboard']);
Route::get('/logout', [AuthController::class, 'getLogout']);

