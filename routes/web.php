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

// gallery
Route::get('/gallery', function(){
    return view('gallery');
})->name('gallery');

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

// profile
Route::get('/profile', function(){
    return view('admin.profile');
})->name('admin.profile');

// login
Route::get('/admin/login', function(){
    return view('admin.login');
})->name('admin.login');

// Register
Route::get('/admin/register', function(){
    return view('admin.register');
})->name('admin.register');




// user dashboard
Route::get('/user/index', function(){
    return view('user-dashboard.index');
})->name('user-dashboard.index');

// orders
Route::get('/user/orders', function(){
    return view('user-dashboard.orders');
})->name('user-dashboard.orders');

// Transactions
Route::get('/user/transactions', function(){
    return view('user-dashboard.transactions');
})->name('user-dashboard.transactions');


// new admin routes
Route::get('/new-admin/index', function(){
    return view('new-admin.index');
})->name('new-admin.index');

// products
Route::get('/new-admin/products', function(){
    return view('new-admin.products.index');
})->name('new-admin.products.index');

// add products
Route::get('/new-admin/add-products', function(){
    return view('new-admin.products.create');
})->name('new-admin.products.add-product');

// edit products
Route::get('/new-admin/edit-products', function(){
    return view('new-admin.products.edit');
})->name('new-admin.products.edit');

// transactions
Route::get('/new-admin/transaction', function(){
    return view('new-admin.transactions.index');
})->name('new-admin.transactions.index');

// transaction details
Route::get('/new-admin/transactions/details', function(){
    return view('new-admin.transactions.details');
})->name('new-admin.transactions.details');

// activities
Route::get('/new-admin/activities', function(){
    return view('new-admin.activities');
})->name('new-admin.activities');

// profile
Route::get('/new-admin/profile', function(){
    return view('new-admin.profile');
})->name('new-admin.profile');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
