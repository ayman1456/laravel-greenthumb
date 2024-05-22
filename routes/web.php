<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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





//cart routes
// Route::prefix('/cart')->name('cart.')->controller(CartController::class)->group(function () {
//     Route::get('/add/{id}', 'addToCart')->name('add');
//     Route::get('/view', 'viewCart')->name('view');
//     Route::POST('/update', 'updateCart')->name('update');
//     Route::GET('/delete/{id}', 'deleteCart')->name('delete');
// });
// Route::prefix('/checkout')->name('checkout.')->controller(CheckoutController::class)->group(function () {
//     Route::get('/', 'checkout')->name('view');
// });




//orders route
Route::get('/orders', [OrderController::class, 'orders'])->name('orders.show');



Auth::routes();
