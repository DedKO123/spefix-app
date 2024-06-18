<?php

namespace App\Repositories;

use App\DTO\ProductDTO;
use App\Models\Product;
use App\ProductRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductRepository implements ProductRepositoryInterface
{
    public function all(): Collection
    {
        return Product::query()->latest()->all();
    }

    public function getWithPagination(int $perPage): LengthAwarePaginator
    {
        return Product::query()->latest()->paginate($perPage);
    }

    public function create(ProductDTO $productDTO): Product
    {
        $product = new Product();
        $product->name = $productDTO->name;
        $product->description = $productDTO->description;
        $product->price = $productDTO->price;
        $product->save();

        return $product;
    }

    public function delete(Product $product): bool
    {
        return $product->delete();
    }
}
