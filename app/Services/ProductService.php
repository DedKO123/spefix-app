<?php

namespace App\Services;

use App\DTO\ProductDTO;
use App\Models\Product;
use App\ProductRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductService
{
    public function __construct(protected ProductRepositoryInterface $productRepository)
    {
    }

    public function all(): Collection
    {
        return $this->productRepository->all();
    }

    public function getWithPagination(int $perPage): LengthAwarePaginator
    {
        return $this->productRepository->getWithPagination($perPage);
    }

    public function create(ProductDTO $productDTO): Product
    {
        $product = $this->productRepository->create($productDTO);

        $product->addMedia($productDTO->image)->toMediaCollection(Product::MEDIA_COLLECTION);

        return $product;
    }

    public function delete(Product $product): bool
    {
        return $this->productRepository->delete($product);
    }
}
