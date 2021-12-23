<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::get('/products',[ProductController::class,'listProducts'])->name('products.index');

Route::get('/products/create', [ProductController::class,'create'])->name('products.create');

Route::post('/products', [ProductController::class,'store'])->name('products.store');

Route::get('/products/{products}', [ProductController::class,'show'])->name('products.show');

Route::get('/products/{products}/edit', [ProductController::class,'edit'])->name('products.edit');

Route::match(['put','patch'],'/products/{products}', [ProductController::class,'update'])->name('products.update');

Route::delete('/products/{products}', [ProductController::class,'destroy'])->name('products.destroy');
