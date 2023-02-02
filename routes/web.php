<?php

use App\Http\Livewire\Home;
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
