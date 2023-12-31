<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MailsController;

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

Route::get('/', [ProductController::class, 'paradise'], )->name('paradise');
Route::get('/product',[ProductController::class, 'all_product'])->name('all_product');
Route::get('/product/{type}',[ProductController::class, 'all_product'])->name('all_product_type');
Route::get('/product/lot/{slug}',[ProductController::class, 'product'], )->name('product');
Route::post('/send-mail',[MailsController::class, 'send_mail'])->name('send_mail');
Route::post('/send-order',[MailsController::class, 'send_order'])->name('send_order');
