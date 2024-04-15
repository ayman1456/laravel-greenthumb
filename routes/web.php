<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BackendController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contactus',[MainController::class,'contactus'])->name('contactus');
Route::get('/aboutus',[MainController::class,'aboutus'])->name('aboutus');



//backend
Route::get('/dashboard',[BackendController::class,'dashboard'])->name('dashboard');
