<?php

use App\Http\Controllers\ProfileController;
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
Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware('admin.auth:admin')->name('admin.dashboard');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('admin.auth:admin')->name('admin.dashboard');

Route::get('/home', function () {
    return view('public.welcome');
})->name('home');
Route::get('/', function () {
    return view('public.welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';




