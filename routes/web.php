<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Home Route
|--------------------------------------------------------------------------
| The main landing page of the application.
*/

Route::get('/', function () {
    $products = Product::take(8)->get(); // Fetch the first 8 products
    return view('pages.home', compact('products'));
})->name('home');


Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});
/*
|--------------------------------------------------------------------------
| Product Routes (Grouped)
|--------------------------------------------------------------------------
*/
Route::prefix('products')->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/', 'index')->name('products'); // List of products
        Route::get('/all', 'allProducts')->name('all-products'); // All products
        Route::get('/{id}', 'show')->name('product-overview'); // Single product details
    });
});

/*
|--------------------------------------------------------------------------
| Static Page Routes
|--------------------------------------------------------------------------
*/
Route::controller(ViewController::class)->group(function () {
    Route::get('/about-us', 'aboutusview')->name('about-us'); // About Us page
    Route::get('/all/products', 'dummyproductview')->name('products'); // Dummy product view
});

/*
|--------------------------------------------------------------------------
| Contact Us Routes (Grouped)
|--------------------------------------------------------------------------
*/
Route::prefix('contact-us')->controller(ContactController::class)->group(function () {
    Route::get('/', 'index')->name('contact-us'); // Contact Us page
    Route::post('/', 'submit')->name('contact.submit'); // Contact form submission
});

/*
|--------------------------------------------------------------------------
| Account Routes (Grouped)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->prefix('user')->controller(AccountController::class)->group(function () {
    Route::get('/account', 'index')->name('user.account'); // User account page
    Route::get('/update-password', 'indexUpdatePassword')->name('user.changePassword')->middleware('auth');
    Route::get('/personal-information', 'personalInformation')->name('user.personalInformation')->middleware('auth');
    Route::get('/manage-address', 'manageAddress')->name('user.manageAddress')->middleware('auth');
});

/*
|--------------------------------------------------------------------------
| Checkout Routes (Grouped)
|--------------------------------------------------------------------------
*/
Route::prefix('checkout')->controller(UserController::class)->group(function () {
    Route::get('/address', 'userAddress')->name('checkout'); // Checkout address
    Route::get('/payment', 'userPayment')->name('checkout.payment'); // Checkout payment
    Route::get('/delivery', 'userDelivery')->name('checkout.delivery'); // Checkout delivery
});

/*
|--------------------------------------------------------------------------
| User Registration and Management Routes (Grouped)
|--------------------------------------------------------------------------
*/
Route::controller(UserController::class)->group(function () {
    Route::get('/register', 'index')->name('register'); // Registration page
    Route::post('/register', 'store')->name('register.submit'); // Registration form submission
    Route::get('/wishlist', 'userWishlist')->name('user.wishlist')->middleware('auth'); // User wishlist
    Route::get('/cart', 'userCart')->name('user.cart')->middleware('auth'); // User cart
    Route::post('/user/update/{id}', 'update')->name('user.update')->middleware('auth'); // Update user information
    Route::post('/update-password', 'updatePassword')->name('update.password')->middleware('auth');
});

/*
|--------------------------------------------------------------------------
| Authentication Routes (Grouped)
|--------------------------------------------------------------------------
*/
Route::controller(AuthController::class)->group(function () {
    Route::post('/logout', 'logout')->name('logout')->middleware('auth'); // Logout
    Route::post('/login', 'login')->name('login.submit'); // Login form submission
    Route::get('/login', 'showLoginForm')->name('login')->middleware('guest'); // Login page
});
