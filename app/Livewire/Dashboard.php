<?php

namespace App\Livewire;

use App\Models\Product;
use App\Services\ProductService;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;

    public function delete(Product $product)
    {
        $productService = app(ProductService::class);
        $productService->delete($product);
    }

    public function render()
    {
        $productService = app(ProductService::class);
        return view('livewire.dashboard', [
            'products' => $productService->getWithPagination(5),
        ]);
    }
}
