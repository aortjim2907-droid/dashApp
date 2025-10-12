<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard');