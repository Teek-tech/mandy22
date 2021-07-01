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

Route::get('/', function () {
    return view('welcome');
})->name('home');


// shop men
Route::get('/shop/men', function(){
    return view('shop.men');
})->name('shop.men');


// shop women
Route::get('/shop/women', function(){
    return view('shop.women');
})->name('shop.women');



Route::get('/contact', function (){
    return view('contact');
})->name('contact');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
