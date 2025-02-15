<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

// ===========================
// Home Route
// ===========================
Route::get('/', function () {
    $products = Product::take(8)->get(); // Fetch the first 8 products
    return view('pages.home', compact('products'));
})->name('home');

// ===========================
// Product Routes
// ===========================
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products');
    Route::get('/all', [ProductController::class, 'allProducts'])->name('all-products');
    Route::get('/{id}', [ProductController::class, 'show'])->name('product-overview');
});

// ===========================
// Static Pages Routes
// ===========================
Route::view('/about-us', 'pages.about-us')->name('about-us');
Route::view('/all/products', 'pages.products')->name('products');
Route::get('/wishlist', [UserController::class, 'userWishlist'])->name('user.wishlist');
Route::get('/cart', [UserController::class, 'userCart'])->name('user.cart');

// ===========================
// Contact Routes
// ===========================
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');
Route::post('/contact-us', [ContactController::class, 'submit'])->name('contact.submit');
// ===========================
// Account Routes
// ===========================
Route::get('/account', [AccountController::class, 'index'])->name('user.account')->middleware('auth');

// ===========================
// Checkout Routes
// ===========================
Route::prefix('checkout')->group(function () {
    Route::view('/address', 'partials.checkout-address')->name('checkout');
    Route::view('/delivery', 'partials.checkout-delivery')->name('checkout.delivery');
    Route::view('/payment', 'partials.checkout-payment')->name('checkout.payment');
});

// ===========================
// Dashboard & Authenticated User Routes
// ===========================
Route::get('/register', [UserController::class, 'index'])->name('register');
Route::post('/register', [UserController::class, 'store'])->name('register.submit');
// Logout route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
// Login route
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
// ===========================
// Authentication Routes
// ===========================

// ===========================
// Dummy Routes
// ===========================
