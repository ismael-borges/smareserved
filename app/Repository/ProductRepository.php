<?php

namespace App\Repository;

use App\Models\Products;

class ProductRepository
{
    public function __construct(
        private Products $products
    ){}

    public function getAll()
    {
        return $this->products->all();
    }
}
