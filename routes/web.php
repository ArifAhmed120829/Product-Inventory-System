<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\PI;

Route::get('categories', [CategoryController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('product_inventory/form', function () {
    return view('product_inventory');
});
Route::resource('products', ProductController::class);
Route::post('product_inventory/store', function (Request $request){
    PI::create($request->all());
    return "Data Saved!";
})->name('product_inventory.store');
