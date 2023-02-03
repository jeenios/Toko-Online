<?php

use App\Http\Livewire\Checkout;
use App\Http\Livewire\History;
use App\Http\Livewire\Home;
use App\Http\Livewire\Keranjang;
use App\Http\Livewire\ProductDetail;
use App\Http\Livewire\ProductIndex;
use App\Http\Livewire\ProductLiga;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::livewire('/', 'home')->name('home');

Route::get('/', Home::class)->name('home');
Route::get('/products', ProductIndex::class)->name('products');
Route::get('/products/liga/{ligaId}', ProductLiga::class)->name('products.liga');
Route::get('/products/{id}', ProductDetail::class)->name('products.detail');
Route::get('/keranjang', Keranjang::class)->name('keranjang');
Route::get('/checkout', Checkout::class)->name('checkout');
Route::get('/history', History::class)->name('history');
