<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('checkout', [CheckoutController::class, 'create'])->name('checkout.create');
Route::post('paymentIntent', [CheckoutController::class, 'paymentIntent'])->name('checkout.paymentIntent');

Route::resource('products', ProductController::class);

Route::get('shoppingCart', [CartController::class, 'index'])->name('cart.index');

Route::resource('orders', OrderController::class);

Route::get('/clear', function () {
    \Cart::session(auth()->user()->id)->clear();
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $orders = auth()->user()->orders;
        return view('dashboard', compact('orders'));
    })->name('dashboard');
    
    Route::get('/thankyou', function () {
        return 'Merci de votre commande!';
    });
});

require __DIR__.'/auth.php';
