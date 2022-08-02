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
    return view('index');
});

Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/test', [App\Http\Controllers\testcontroller::class, 'index'])->name('testlayout');

<<<<<<< HEAD
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('Products/Product');
Route::get('/lienhe', [App\Http\Controllers\FEController::class, 'index'])->name('lienhe');

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('About/About');
=======
<<<<<<< HEAD
/*lienhe*/
=======
<<<<<<< HEAD
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('Products/Product');
=======
>>>>>>> 8a84ab69f9d25b9cd9ade468a535827bfd2a1833
Route::get('/lienhe', [App\Http\Controllers\FEController::class, 'index'])->name('lienhe');

/*cart */
Route::get('/cart', [App\Http\Controllers\FEController::class, 'cart'])->name('cart');


>>>>>>> 975ecf060875704639ea9fda4a985d2c5b788fd8



?>
