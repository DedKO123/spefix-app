<?php

namespace App\Livewire;

use App\Models\Product;
use App\Services\ProductService;
use Livewire\Component;

class ProductsTable extends Component
{

    public function delete(Product $product)
    {
        $productService = app(ProductService::class);
        $productService->delete($product);
    }

    public function render()
    {
        $productService = app(ProductService::class);
        return view('livewire.products-table', [
            'products' => $productService->getWithPagination(5),
        ]);
    }
}
