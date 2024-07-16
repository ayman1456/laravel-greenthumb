<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\OrderController;

//frontend
Route::get('/', [MainController::class, 'home'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [MainController::class, 'userProfile'])->name('profile');
});
Route::get('/contact-us', [MainController::class, 'contactus'])->name('contactus');
Route::get('/about-us', [MainController::class, 'aboutus'])->name('aboutus');

Route::get('/category/{id}', [MainController::class, 'categoryArcheive'])->name('category.archeive');
Route::get('/product/{id}', [MainController::class, 'productShow'])->name('product.show');
Route::get('/add-to-cart/{id}', [MainController::class, 'addToCart'])->name('cart.add')->middleware('auth');
Route::get('/cart-details', [MainController::class, 'cartDetails'])->name('cart.details')->middleware('auth');
Route::put('/cart-details-update', [MainController::class, 'cartDetailsUpdate'])->name('cart.details.update')->middleware('auth');
Route::get('/cart-details-delete/{id}', [MainController::class, 'cartDetailsDelete'])->name('cart.details.delete')->middleware('auth');
Route::get('/order-success', function () {
    return view('frontend.success');
})->name('order.success');
Route::post('/user-update/{id}', [UserController::class,'updateUser'])->name('user.profile.update');


//* MY ORDERS

Route::get('/my-orders', [OrderController::class, 'myOrders'])->name('myOrders');





Auth::routes();
