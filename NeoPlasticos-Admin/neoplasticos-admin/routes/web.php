<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('inicio');

Route::get('/login', [PageController::class, 'login'])->name('login');

Route::get('/panel', [PageController::class, 'panel'])->name('panel');
