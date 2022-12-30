<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\PasswordController as AdminPasswordController;
use App\Http\Controllers\Admin\Auth\NewPasswordController as AdminNewPasswordController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController as AdminVerifyEmailController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController as AdminRegisteredUserController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController as AdminPasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController as AdminConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController as AdminAuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController as AdminEmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController as AdminEmailVerificationNotificationController;

Route::prefix('/admin')->name('admin.')->middleware('admin.guest:admin')->group(function () {
    Route::get('register', [AdminRegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [AdminRegisteredUserController::class, 'store']);

    Route::get('login', [AdminAuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AdminAuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [AdminPasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [AdminPasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [AdminNewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [AdminNewPasswordController::class, 'store'])
                ->name('password.store');

    

});

Route::prefix('/admin')->name('admin.')->middleware('admin.auth:admin')->group(function(){
    Route::get('verify-email', [AdminEmailVerificationPromptController::class, '__invoke'])
    ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [AdminVerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [AdminEmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [AdminConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [AdminConfirmablePasswordController::class, 'store']);

    Route::put('password', [AdminPasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AdminAuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

//admin item route
Route::prefix('/admin')->name('admin.')->middleware('admin.auth:admin')->group(function(){
        // Route::get('/name', function () { return view('admin.jack'); });
    Route::get('/', App\Http\Livewire\Admin\Dashboard::class)->name('dashboard');
    Route::get('profile', App\Http\Livewire\Admin\Profile::class)->name('profile');
});
Route::prefix('/admin')->name('category.')->middleware('admin.auth:admin')->group(function(){
    Route::get('category', App\Http\Livewire\Admin\Category::class)->name('view');
});
Route::prefix('/admin')->name('products.')->middleware('admin.auth:admin')->group(function(){
    Route::get('products', App\Http\Livewire\Admin\Products::class)->name('view');
});
Route::prefix('/admin')->name('order.')->middleware('admin.auth:admin')->group(function(){
    Route::get('order', App\Http\Livewire\Admin\Order::class)->name('view');
});
Route::prefix('/admin')->name('wishlist.')->middleware('admin.auth:admin')->group(function(){
    Route::get('wishlist', App\Http\Livewire\Admin\Wishlist::class)->name('view');
});
Route::prefix('/admin')->name('cart.')->middleware('admin.auth:admin')->group(function(){
    Route::get('cartegory', App\Http\Livewire\Admin\Cart::class)->name('view');
});
Route::prefix('/admin')->name('blog.')->middleware('admin.auth:admin')->group(function(){
    Route::get('blog', App\Http\Livewire\Admin\Blog::class)->name('view');
});
Route::prefix('/admin')->name('setting.')->middleware('admin.auth:admin')->group(function(){
    Route::get('setting', App\Http\Livewire\Admin\Setting::class)->name('view');
});




