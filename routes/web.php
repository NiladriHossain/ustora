<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    route::get('/product/add', [ProductController::class, 'product'])->name('product.add');
    route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    route::get('/product/manage', [ProductController::class, 'index'])->name('product.manage');
    route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    route::get('/product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    
    route::get('/category/add', [CategoryController::class, 'add'])->name('category.add');
    route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    route::get('/category/manage', [CategoryController::class, 'index'])->name('category.manage');
});


// 


// // backend Route
