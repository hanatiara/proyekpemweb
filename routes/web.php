<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\CartController;

Route::get('details', [LandingController::class, 'details'])->name('landing.details');
Route::get('kategori', [LandingController::class, 'kategori'])->name('landing.kategori');
Route::get('our-teams', [LandingController::class, 'ourteams'])->name('landing.ourteams');

Route::resource('/', LandingController::class);

Route::get('/Home', function () {
    return view('landing.index');
})->middleware(['auth', 'verified'])->name('/');

Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'cart'])->name('landing.cart');
    Route::get('/cart/{itemID}',[CartController::class, 'addItems']);
    Route::get('/checkout',[CartController::class, 'checkout']);
    Route::get('/cart/add/{itemID}',[CartController::class, 'addQuantity']);
    Route::get('/cart/dec/{itemID}',[CartController::class, 'decQuantity']);
    Route::get('/kategori/{itemID}', [LandingController::class, 'viewDetails'])->name('category.details');
    Route::get('/cart/delete/{itemID}',[CartController::class, 'deleteItems']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/data', [ProfileController::class, 'data'])->name('profile.data');
    Route::get('/profile/orders', [ProfileController::class, 'orders'])->name('profile.orders');
    Route::post('/profile/data', [ProfileController::class, 'updateData'])->name('profile.data.update');
});

require __DIR__.'/auth.php';
