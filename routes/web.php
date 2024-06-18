<?php

use App\Livewire\CreateProduct;
use App\Livewire\Products;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', Products::class)->name('products');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/create', CreateProduct::class)->name('products.create');
