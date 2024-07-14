<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;


Route::view('/', 'home')->name('home');
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductsController::class,'create'])->name('products.create');
Route::post('/products.store', [ProductsController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductsController::class,'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProductsController::class,'edit'])->name('products.edit');
Route::patch('/products/{product}', [ProductsController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductsController::class,'destroy'])->name('products.destroy');


