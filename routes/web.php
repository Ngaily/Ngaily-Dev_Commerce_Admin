<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [AdminProductController::class, 'index'])->name('index');
