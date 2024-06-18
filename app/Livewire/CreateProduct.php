<?php

namespace App\Livewire;

use App\DTO\ProductDTO;
use App\Services\ProductService;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProduct extends Component
{
    use WithFileUploads;

    public string $name = '';
    public string $description = '';
    public float $price = 0.0;
    public $image;

    public function rules()
    {
        return [
            'name' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function save()
    {
        $this->validate();

        $productService = app(ProductService::class);
        $productDto = new ProductDTO($this->name, $this->description, $this->price, $this->image);

        $productService->create($productDto);

        return $this->redirectRoute('products');
    }

    public function render()
    {
        return view('livewire.create-product');
    }
}
