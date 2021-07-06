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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'middleware' => ['isMaster', 'auth', 'verified']], function () {
    // Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashbaord');
    // Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    // Route::get('products', [App\Http\Controllers\ProductController::class, 'index'])->name('admin.product.index');
    
    // Route::post('add-products', [App\Http\Controllers\ProductController::class, 'store'])->name('admin.add-product');
    // Route::get('edit-product/{product:uuid}', [App\Http\Controllers\ProductController::class, 'edit'])->name('admin.edit-product');
    // Route::post('update-product/{product:uuid}', [App\Http\Controllers\ProductController::class, 'update'])->name('admin.update-product');
    
    // Route::post('update-product-image', [App\Http\Controllers\ProductController::class, 'updateImage'])->name('admin-update-product-image');
    
    // Route::get('add-products/cars', [App\Http\Controllers\ProductController::class, 'cars'])->name('admin.add-cars');
    // Route::get('add-products/parts', [App\Http\Controllers\ProductController::class, 'parts'])->name('admin.add-parts');
    // Route::get('transactions', [App\Http\Controllers\TransactionController::class, 'index'])->name('admin.transactions');
    // Route::get('transaction/{id}', [App\Http\Controllers\TransactionController::class, 'info'])->name('admin.transaction-details');
    
    // Route::get('activity', [App\Http\Controllers\AdminController::class, 'activity'])->name('admin.activity');
    // Route::get('profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('admin.profile');
      
});