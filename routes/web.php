<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminCategoriesProController;
use App\Http\Controllers\AdminGenenalController;
use App\Http\Controllers\HomeController;

// Trang chu 
Route::get('/', [HomeController::class, 'home'])->name('home');



Route::get('/index', [AdminGenenalController::class, 'index']);

// Products
Route::get('/product', [AdminProductController::class, 'index'])->name('product.index');

// categories
Route::get('/categories', [AdminCategoriesProController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [AdminCategoriesProController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [AdminCategoriesProController::class, 'store'])->name('categories.store');
Route::put('/categories/{id}/update-status', [AdminCategoriesProController::class, 'updateStatus'])->name('categories.update-status');
Route::get('/categories/{id}/destroy', [AdminCategoriesProController::class, 'destroy'])->name('categories.destroy');


Route::get('/genenal', [AdminGenenalController::class, 'index'])->name('genenal.index');
