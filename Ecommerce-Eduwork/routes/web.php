<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\User\FrontendController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CheckoutController;
use App\Models\Card;

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

/*---------- Admin Route ----------*/
Route::middleware(['auth', 'admin'])->group(function() {
    Route::group(['prefix'=>'admin'], function() {
        Route::get('/dashboard', [CategoryController::class, 'dashboard'])->name('dashboard');
        Route::get('/category', [CategoryController::class, 'category'])->name('category');
        Route::get('/add-category', [CategoryController::class, 'add'])->name('add.category');
        Route::post('/insert-category', [CategoryController::class, 'insert'])->name('insert.cateogry');
        Route::get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('edit.category');
        Route::put('/update-category/{id}', [CategoryController::class, 'update'])->name('update.category');
        Route::get('/delete-category/{id}', [CategoryController::class, 'delete'])->name('delete.category');
        Route::get('/product', [ProductController::class, 'product'])->name('product');
        Route::get('/add-product', [ProductController::class, 'add'])->name('add.product');
        Route::post('/insert-product', [ProductController::class, 'insert'])->name('insert.product');
        Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('edit.product');
        Route::put('/update-product/{id}', [ProductController::class, 'update'])->name('update.product');
        Route::get('/delete-product/{id}', [ProductController::class, 'delete'])->name('delete.product');
    });
});
/*---------- Admin Route End ----------*/

/*---------- User Route ----------*/
Route::get('/', [FrontendController::class, 'index'])->name('user.home');
Route::get('/category', [FrontendController::class, 'category'])->name('category');
Route::get('/view-category/{slug}', [FrontendController::class, 'viewCategory'])->name('view.category');
Route::get('/category/{categorySlug}/{productSlug}', [FrontendController::class, 'viewProduct'])->name('view.product');

Auth::routes();
Route::post('/addToCart', [CartController::class, 'addToCart']);
Route::post('/updateCart', [CartController::class, 'updateCart']);
Route::post('/deleteCartItem', [CartController::class, 'deleteProduct']);

Route::middleware(['auth'])->group(function()
{
    Route::get('/cart', [CartController::class, 'index']);
    Route::get('/checkout', [CheckoutController::class, 'index']);
});
/*---------- User Route End ----------*/
