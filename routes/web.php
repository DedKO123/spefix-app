<?php

use App\Livewire\CreateProduct;
use App\Livewire\Products;
use App\Livewire\ProductsTable;
use Illuminate\Support\Facades\Route;

Route::get('/', Products::class)->name('products');
Route::get('/dashboard', ProductsTable::class)->name('products.dashboard');
Route::get('/create', CreateProduct::class)->name('products.create');
