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
Route::get('/shop/adults', function(){
    return view('shop.adults');
})->name('shop.adults');


// shop women
Route::get('/shop/children', function(){
    return view('shop.children');
})->name('shop.children');

// product detail
Route::get('/shop/adults/product/detail', function(){
    return view('shop.details');
})->name('shop.product.detail');

// cart
Route::get('/cart', function(){
    return view('cart');
})->name('cart');

// checkout
Route::get('/checkout', function(){
    return view('checkout');
})->name('checkout');

// contact
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

// Add products
Route::get('/products/add', function(){
    return view('admin.products.create');
})->name('admin.products.create');

// Edit porducts
Route::get('/products/edit', function(){
    return view('admin.products.edit');
})->name('admin.products.edit');


// Transaction
Route::get('/transactions', function(){
    return view('admin.transactions.index');
})->name('admin.transactions');

// Transaction details
Route::get('/transactions/details', function(){
    return view('admin.transactions.details');
})->name('admin.transactions.details');

// Activities
Route::get('/activities', function(){
    return view('admin.activities');
})->name('admin.activities');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
