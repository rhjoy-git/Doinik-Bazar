<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('app');
// });
use App\Models\Product;

Route::get('/', function () {
    $products = Product::take(8)->get(); // Fetch the first 6 products
    return view('pages.home', compact('products'));
})->name('home');

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/AllProducts', [ProductController::class, 'allProducts'])->name('all-products');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('product-overview');
// Route::get('/product/{id}', [ProductController::class, 'overview'])->name('product-overview');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');
Route::post('/contact-us', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/about-us', function () {
    return view('pages.about-us');
})->name('about-us');

Route::get('/wishlist', function () {
    return view('pages.wishlist');
})->name('wishlist');

Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');
Route::get('/account', function () {
    return view('pages.account');
})->name('user');

Route::get('/login', function(){
    return view('pages.login');
})->name('login');

Route::get('/checkout/address', function(){
    return view('partials.checkout-address');
})->name('checkout');
Route::get('/checkout/delivery', function(){
    return view('partials.checkout-delivery');
})->name('checkout.delivery');
Route::get('/checkout/payment', function(){
    return view('partials.checkout-payment');
})->name('checkout.payment');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
