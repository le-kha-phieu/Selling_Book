<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'viewHome'])->name('view.home');
Route::get('/view-store', [HomeController::class, 'viewStore'])->name('view.store');
Route::get('/view/best-seller', [HomeController::class, 'viewBestSeller'])->name('view.best.seller');

Route::get('/view-login', [AuthController::class, 'viewLogin'])->name('view.login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('post.login');
Route::get('view-register', [AuthController::class, 'viewRegister'])->name('view.register');
Route::post('post-register', [AuthController::class, 'postRegister'])->name('post.register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/{product}/details-product',[ProductController::class, 'detailProduct'])->name('detail.product');
Route::get('/search', [ProductController::class, 'searchProduct'])->name('search.product');

Route::get('/view-admin',[MainController::class, 'viewHomeAdmin'])->name('view.admin');
Route::get('/view-category-admin',[CategoryController::class, 'viewCategory'])->name('view.category');
Route::post('/create-category-admin',[CategoryController::class, 'createCategory'])->name('create.category');
Route::get('/view-create-product-admin',[ProductController::class, 'viewCreateProduct'])->name('view.create.product');
Route::post('/create-product-admin',[ProductController::class, 'createProduct'])->name('create.product');
Route::delete('/delete-category/{category}', [CategoryController::class, 'deleteCategory'])->name('delete.category');
Route::delete('/delete-product/{product}',[ProductController::class, 'deleteProduct'])->name('delete.product');
Route::get('/view-update-category-admin/{category}',[CategoryController::class, 'viewUpdateCategory'])->name('view.update.category');
Route::put('/update-category-admin/{id}',[CategoryController::class, 'updateCategory'])->name('update.category');
Route::get('/view-update-product-admin/{product}',[ProductController::class, 'viewUpdateProduct'])->name('view.update.product');
Route::put('/update-product-admin/{product}',[ProductController::class, 'updateProduct'])->name('update.product');
