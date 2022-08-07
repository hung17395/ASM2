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

//Category
// Route::group(['prefix' =>'Category'],function () {
Route::get('/category', [App\Http\Controllers\CategoryController::class,'index'])->name('Categories/Category');
Route::get('/create', [App\Http\Controllers\CategoryController::class,'getCreate'])->name('Categories/createCategory');
Route::post('/create', [App\Http\Controllers\CategoryController::class,'postCreate']);
Route::get('/editCategory/{id}', [App\Http\Controllers\CategoryController::class,'getEditCate'])->name('Categories/editCategory');
Route::post('/editCategory/{id}', [App\Http\Controllers\CategoryController::class,'postEditCate'])->name('Categories/updateCategory');
Route::get('/category/delete/{id}',[App\Http\Controllers\CategoryController::class,'delete'])->name('Category/delete');;
// });
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

// User
Route::get('/userList', [App\Http\Controllers\UserController::class,'index'])->name('Admin/userList');
Route::get('/editUser/{id}', [App\Http\Controllers\UserController::class,'getEditUser'])->name('Admin/editUser');
Route::post('/editUser/{id}', [App\Http\Controllers\UserController::class,'postEditUser'])->name('Admin/updateUser');
Route::get('/user/delete/{id}',[App\Http\Controllers\UserController::class,'delete'])->name('Category/delete');;
