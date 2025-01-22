<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('categories', [CategoryController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
Route::resource('products', ProductController::class);
