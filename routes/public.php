<?php

use App\Http\Livewire\Public\AboutUs;
use App\Http\Livewire\Public\Blog;
use App\Http\Livewire\Public\Cart;
use App\Http\Livewire\Public\Checkout;
use App\Http\Livewire\Public\ContactUs;
use App\Http\Livewire\Public\ProductDetails;
use App\Http\Livewire\Public\Shop;
use App\Http\Livewire\Public\Wishlist;
use Illuminate\Support\Facades\Route;


//__livewire components base route

//__home route
Route::prefix('home')->group(function(){
    Route::get('shop', Shop::class)->name('home.shop');  
    Route::get('blog', Blog::class)->name('home.blog');
    Route::get('contact-us', ContactUs::class)->name('home.contact-us');
    Route::get('about-us', AboutUs::class)->name('home.about-us');
    Route::get('cart', Cart::class)->name('home.cart');
    Route::get('wishlist', Wishlist::class)->name('home.wishlist');
    Route::get('checkout', Checkout::class)->name('home.checkout');

});

//__product route
Route::prefix('product')->group(function(){
    Route::get('details', ProductDetails::class)->name('product.details');
});
Route::prefix('profile')->middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', function(){ return view('dashboard');})->name('dashboard');
});
