<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::livewire('/', 'home')->name('home');

Route::get('/', App\Http\Livewire\Home::class)->name('home');
Route::get('/products', App\Http\Livewire\ProductIndex::class)->name('products');
