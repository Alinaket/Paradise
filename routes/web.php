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


Route::get('/product/{slug}',[ProductController::class, 'product'], )->name('product');
Route::get('/product',[ProductController::class, 'all_product', 'app_product'])->name('all_product', 'app_product' );
//Route::get('/product', [ProductController::class, 'app_product'])->name( 'app_product');

