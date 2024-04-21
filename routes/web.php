<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

//frontend
Route::get('/', function () {
    return view('welcome');
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


Auth::routes();
