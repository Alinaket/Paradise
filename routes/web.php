<?php

use Illuminate\Support\Facades\Route;

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
});
Route::get('/add_header', function () {
    return view('layouts/app_header');
});
Route::get('/all_product', function () {
    return view('all_product');
});
Route::get('/product', function () {
    return view('product');
});

