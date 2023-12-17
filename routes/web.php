<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/paradise', function () {
    return view('paradise');
})->name('paradise');
Route::get('/all_product', function () {
    return view('all_product');
})->name("all_product");
Route::get('/product', function () {
    return view('all_product');
})->name("all_product");
Route::get('/product/{slug}',[ProductController::class, 'product'])->name('product');

