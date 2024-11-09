<?php

use App\Http\Controllers\AdminCategoriesBlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminCategoriesProController;
use App\Http\Controllers\AdminGenenalController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\HomeController;

// Trang chu 
Route::get('/', [HomeController::class, 'home'])->name('home');



Route::get('/index', [AdminGenenalController::class, 'index']);

// Products
Route::get('/product', [AdminProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [AdminProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [AdminProductController::class, 'store'])->name('product.store');
Route::put('/product/{id}/update-status', [AdminProductController::class, 'updateStatus'])->name('product.update-status');
Route::get('/product/{id}/destroy', [AdminProductController::class, 'destroy'])->name('product.destroy');
// categories
Route::get('/categories', [AdminCategoriesProController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [AdminCategoriesProController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [AdminCategoriesProController::class, 'store'])->name('categories.store');
Route::put('/categories/{id}/update-status', [AdminCategoriesProController::class, 'updateStatus'])->name('categories.update-status');
Route::get('/categories/{id}/destroy', [AdminCategoriesProController::class, 'destroy'])->name('categories.destroy');

// categories_blog
Route::get('/categories_blog', [AdminCategoriesBlogController::class, 'index'])->name('categories_blog.index');
Route::get('/categories_blog/create', [AdminCategoriesBlogController::class, 'create'])->name('categories_blog.create');
Route::post('/categories_blog/store', [AdminCategoriesBlogController::class, 'store'])->name('categories_blog.store');
Route::get('/categories_blog/{id}/edit', [AdminCategoriesBlogController::class, 'edit'])->name('categories_blog.edit');
Route::put('/categories_blog/{id}/update', [AdminCategoriesBlogController::class, 'update'])->name('categories_blog.update');
Route::get('/categories_blog/{id}/destroy', [AdminCategoriesBlogController::class, 'destroy'])->name('categories_blog.destroy');

// post
Route::get('/posts', [AdminPostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [AdminPostController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [AdminPostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}/edit', [AdminPostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}/update', [AdminPostController::class, 'update'])->name('posts.update');
Route::get('/posts/{id}/destroy', [AdminPostController::class, 'destroy'])->name('posts.destroy');


Route::get('/genenal', [AdminGenenalController::class, 'index'])->name('genenal.index');
