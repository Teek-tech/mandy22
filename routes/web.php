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


// home
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// about
Route::get('/about', function(){
    return view('about');
})->name('about');


// shop men
Route::get('/shop/men', function(){
    return view('shop.men');
})->name('shop.men');


// shop women
Route::get('/shop/women', function(){
    return view('shop.women');
})->name('shop.women');

// cart
Route::get('/cart', function(){
    return view('cart');
})->name('cart');


Route::get('/contact', function (){
    return view('contact');
})->name('contact');



// admin index
Route::get('/admin', function (){
    return view('admin.index');
})->name('admin.home');

// Products
Route::get('/products', function(){
    return view('admin.products.index');
})->name('admin.products');


// Transaction
Route::get('/transactions', function(){
    return view('admin.transactions.index');
})->name('admin.transactions');

// Activities
Route::get('/activities', function(){
    return view('admin.activities');
})->name('admin.activities');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
