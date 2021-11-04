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
Route::get('admin/activities', function(){
    return view('admin.activities');
})->name('admin.activities');

// profile
Route::get('admin/profile', function(){
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

// // user dashboard
// Route::get('/user/index', function(){
//     return view('user-dashboard.index');
// })->name('user-dashboard.index');

// // orders
// Route::get('/user/orders', function(){
//     return view('user-dashboard.orders');
// })->name('user-dashboard.orders');

// // Transactions
// Route::get('/user/transactions', function(){
//     return view('user-dashboard.transactions');
// })->name('user-dashboard.transactions');



// checkout
Route::get('/checkout', function(){
    return view('checkout');
})->name('checkout')->middleware('auth');
Route::post('checkout', [App\Http\Controllers\TransactionController::class, 'store'])->name('user.checkout');



// CUSTOMER DASHBOARD START

// index
// Route::get('/user/dashboard', function(){
//     return view('customer-dashboard.index');
// })->name('customer-dashboard.index');

// // profile
// Route::get('/user/profile', function(){
//     return view('customer-dashboard.profile');
// })->name('customer-dashboard.profile');

// // user order details
// Route::get('/user/order-detail', function(){
//     return view('customer-dashboard.orders-details');
// })->name('customer-dashboard.orders-details');



Route::get('/user/dashboard', [App\Http\Controllers\GuestController::class, 'dashboard'])->middleware('auth')->name('customer-dashboard.index');
Route::get('/user/profile', [App\Http\Controllers\GuestController::class, 'profile'])->name('customer-dashboard.profile');
Route::post('/user/profile/{user}/update', [App\Http\Controllers\GuestController::class, 'update'])->name('update-user-profile');
Route::get('/user/order-detail', [App\Http\Controllers\GuestController::class, 'orderDetails'])->name('customer-dashboard.orders-details');














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
    
    Route::post('more-product-image', [App\Http\Controllers\ProductController::class, 'uploadMoreProductImage'])->name('admin-addmore-product-image');
    // Route::get('add-products/cars', [App\Http\Controllers\ProductController::class, 'cars'])->name('admin.add-cars');
    // Route::get('add-products/parts', [App\Http\Controllers\ProductController::class, 'parts'])->name('admin.add-parts');
    
    Route::get('transactions', [App\Http\Controllers\TransactionController::class, 'index'])->name('admin.transactions');
    Route::get('transaction/{transaction:uuid}', [App\Http\Controllers\TransactionController::class, 'show'])->name('admin.transaction-details');
    
    // Route::get('activity', [App\Http\Controllers\AdminController::class, 'activity'])->name('admin.activity');
    // Route::get('profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('admin.profile');
      
});