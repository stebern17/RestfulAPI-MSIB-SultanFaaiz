<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('index');
});



Route::get('/products', [ProductController::class, 'index'])->name('products.index');
