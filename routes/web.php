<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;

//frontend
Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [MainController::class, 'userProfile'])->name('profile');
});
Route::get('/contact-us', [MainController::class, 'contactus'])->name('contactus');
Route::get('/about-us', [MainController::class, 'aboutus'])->name('aboutus');




//* backend
Route::get('/dashboard', [BackendController::class, 'dashboard'])->name('dashboard');

//products routes
Route::get('/products', [ProductController::class, 'products'])->name('products.show');
Route::get('/products/edit/{id}', [ProductController::class, 'editProducts'])->name('products.edit');
Route::post('/products/{id?}', [ProductController::class, 'saveProducts'])->name('products.save');
Route::get('/products-delete/{id}', [ProductController::class, 'deleteProducts'])->name('products.delete');


//categories route
Route::get('/category', [CategoryController::class, 'showCategory'])->name('category.show');
Route::get('/category/edit/{id}', [CategoryController::class, 'editCategory'])->name('category.edit');
Route::post('/category/{id?}', [CategoryController::class, 'saveCategory'])->name('category.save');
Route::get('/category-delete/{id}', [CategoryController::class, 'deleteCategory'])->name('category.delete');



//cart routes
Route::prefix('/cart')->name('cart.')->controller(CartController::class)->group(function () {
    Route::get('/add/{id}', 'addToCart')->name('add');
    Route::get('/view', 'viewCart')->name('view');
    Route::POST('/update', 'updateCart')->name('update');
    Route::GET('/delete/{id}', 'deleteCart')->name('delete');
});
Route::prefix('/checkout')->name('checkout.')->controller(CheckoutController::class)->group(function () {
    Route::get('/', 'checkout')->name('view');
});




//orders route
Route::get('/orders', [OrderController::class, 'orders'])->name('orders.show');



Auth::routes();
