<?php

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
    return view('/index');
});
//User
Auth::routes();
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Auth::routes();
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'home'])->name('index');

//Product
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('Products/Product');
Route::get('/create-product', [App\Http\Controllers\ProductController::class, 'create'])->name('Products/Create');
Route::get('/add-product', [App\Http\Controllers\ProductController::class, 'store']);

//FE
Route::get('/lienhe', [App\Http\Controllers\FEController::class, 'index'])->name('lienhe');

//About
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('About/About');

/*cart */
Route::get('/cart', [App\Http\Controllers\FEController::class, 'cart'])->name('cart');

//Admin
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('Admin/adminMain');
