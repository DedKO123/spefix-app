<?php

namespace App\Livewire;

use App\Services\ProductService;
use Livewire\Component;

class Products extends Component
{
    public function render()
    {
        $productService = app(ProductService::class);
        return view('livewire.products', [
            'products' => $productService->getWithPagination(3),
        ]);
    }
}
