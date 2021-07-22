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




// about
Route::get('/about', function(){
    return view('about');
})->name('about');





// shop women
Route::get('/shop/children', function(){
    return view('shop.children');
})->name('shop.children');

// product detail
// Route::get('/shop/adults/product/detail', function(){
//     return view('shop.details');
// })->name('shop.product.detail');

// gallery
Route::get('/gallery', function(){
    return view('gallery');
})->name('gallery');

// cart
Route::get('/cart', function(){
    return view('cart');
})->name('cart');



// contact
Route::get('/contact', function (){
    return view('contact');
})->name('contact');



// admin index
Route::get('404', function (){
    return view('404');
})->name('404');



// Edit porducts
// Route::get('/products/edit', function(){
//     return view('admin.products.edit');
// })->name('admin.products.edit');


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


Auth::routes(['verify' => true]);

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
Route::get('/new-admin', function(){
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

// checkout
Route::get('/checkout', function(){
    return view('checkout');
})->name('checkout')->middleware('auth');
Route::post('checkout', [App\Http\Controllers\TransactionController::class, 'store'])->name('user.checkout');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\GuestController::class, 'index'])->name('welcome');

Route::post('contact-admin', [App\Http\Controllers\GuestController::class, 'notifyUser'])->name('contact-admin');

Route::get('/shop/adults', [App\Http\Controllers\GuestController::class, 'adults'])->name('shop.adults');


Route::get('/shop/product/{product:uuid}', [App\Http\Controllers\GuestController::class, 'productDetails'])->name('shop.product.detail');

Route::group(['prefix' => 'admin', 'middleware' => ['isMaster', 'auth', 'verified']], function () {
// Route::group(['prefix' => 'admin'], function () {
    // Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashbaord');
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
   
    Route::get('products', [App\Http\Controllers\ProductController::class, 'index'])->name('admin.products');
    Route::get('product-create', [App\Http\Controllers\ProductController::class, 'create'])->name('admin.products.create');
    
    Route::post('add-products', [App\Http\Controllers\ProductController::class, 'store'])->name('admin.add-product');
    Route::get('edit-product/{product:uuid}', [App\Http\Controllers\ProductController::class, 'edit'])->name('admin.product.edit');
    Route::post('update-product/{product:uuid}', [App\Http\Controllers\ProductController::class, 'update'])->name('admin.update-product');
    
    Route::post('update-product-image', [App\Http\Controllers\ProductController::class, 'updateImage'])->name('admin-update-product-image');
    
    // Route::get('add-products/cars', [App\Http\Controllers\ProductController::class, 'cars'])->name('admin.add-cars');
    // Route::get('add-products/parts', [App\Http\Controllers\ProductController::class, 'parts'])->name('admin.add-parts');
    
    Route::get('transactions', [App\Http\Controllers\TransactionController::class, 'index'])->name('admin.transactions');
    Route::get('transaction/{transaction:uuid}', [App\Http\Controllers\TransactionController::class, 'show'])->name('admin.transaction-details');
    
    // Route::get('activity', [App\Http\Controllers\AdminController::class, 'activity'])->name('admin.activity');
    // Route::get('profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('admin.profile');
      
});