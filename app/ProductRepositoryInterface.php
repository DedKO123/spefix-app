<?php

namespace App;

use App\DTO\ProductDTO;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface ProductRepositoryInterface
{
    public function all(): Collection;

    public function getWithPagination(int $perPage): LengthAwarePaginator;

    public function create(ProductDTO $productDTO): Product;

    public function delete(Product $product): bool;
}
