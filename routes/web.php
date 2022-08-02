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
/*lienhe*/
=======
<<<<<<< HEAD
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('Products/Product');
=======
>>>>>>> 8a84ab69f9d25b9cd9ade468a535827bfd2a1833
Route::get('/lienhe', [App\Http\Controllers\FEController::class, 'index'])->name('lienhe');

/*cart */
Route::get('/cart', [App\Http\Controllers\FEController::class, 'cart'])->name('cart');





?>
>>>>>>> 68e1fa2dba33afaa8d1c1e721081d59c4e90eab5
