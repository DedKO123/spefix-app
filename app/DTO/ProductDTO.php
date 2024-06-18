<?php

namespace App\DTO;

use Illuminate\Http\UploadedFile;

final class ProductDTO
{
    public string $name;
    public string $description;
    public float $price;
    public UploadedFile $image;

    public function __construct(string $name, string $description, float $price, UploadedFile $image)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
    }
}
