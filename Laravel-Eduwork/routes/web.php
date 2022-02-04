<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


/*---------- Route-View ----------*/
Route::get('home-route-view', function() {
    return view('route-view.home');
});
Route::get('product-route-view', function() {
    return view('route-view.product');
});
Route::get('detail-product-route-view', function() {
    return view('route-view.detail-product');
});
Route::get('cart-route-view', function() {
    return view('route-view.cart');
});
Route::get('checkout-route-view', function() {
    return view('route-view.checkout');
});
Route::get('checkout-success-route-view', function() {
    return view('route-view.checkout-success');
});
/*---------- Route-View End ----------*/

/*---------- Blade Templating ----------*/
Route::get('home-blade-templating', function() {
    return view('blade-templating.home');
});
Route::get('product-blade-templating', function() {
    return view('blade-templating.product');
});
Route::get('detail-product-blade-templating', function() {
    return view('blade-templating.detail-product');
});
Route::get('cart-blade-templating', function() {
    return view('blade-templating.cart');
});
Route::get('checkout-blade-templating', function() {
    return view('blade-templating.checkout');
});
Route::get('checkout-success-blade-templating', function() {
    return view('blade-templating.checkout-success');
});
/*---------- Blade Templating End ----------*/

/*---------- Asset ----------*/
Route::get('home-asset', function() {
    return view('asset.home');
});
Route::get('about-asset', function() {
    return view('asset.about');
});
Route::get('product-asset', function() {
    return view('asset.product');
});
Route::get('gallery-asset', function() {
    return view('asset.gallery');
});
Route::get('contact-asset', function() {
    return view('asset.contact');
});
/*---------- Asset End ----------*/

/*---------- Controller ----------*/
Route::get('home-controller', [PageController::class, 'index']);
Route::get('product-controller', [PageController::class, 'product']);
Route::get('detail-product-controller', [PageController::class, 'detailProduct']);
Route::get('cart-controller', [PageController::class, 'cart']);
Route::get('checkout-controller', [PageController::class, 'checkout']);
Route::get('checkout-success-controller', [PageController::class, 'checkoutSuccess']);
/*---------- Controller End ----------*/

Route::get('index', function() {
    return view('index');
});

/*---------- Model and Pagination ----------*/
Route::get('model-pagination', [HomeController::class, 'model_pagination'])->name('model-pagination');
/*---------- Model and Pagination End ----------*/

/*---------- Category ----------*/
Route::get('one-to-many', [CategoryController::class, 'one_to_many'])->name('one-to-many');

Route::group(['prefix'=>'/category', 'as' => 'category.'], function() {
    Route::get('satu', [CategoryController::class, 'satu']) ->name('satu');
    Route::get('dua', [CategoryController::class, 'dua']) ->name('dua');
    Route::get('tiga', [CategoryController::class, 'tiga']) ->name('tiga');
    Route::get('empat', [CategoryController::class, 'empat']) ->name('empat');
    Route::get('lima', [CategoryController::class, 'lima']) ->name('lima');
    Route::get('enam', [CategoryController::class, 'enam']) ->name('enam');
});
/*---------- Category End ----------*/
