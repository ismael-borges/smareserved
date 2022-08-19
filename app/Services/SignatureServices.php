<?php

namespace App\Services;

use App\Models\SignaturesProducts;

class SignatureServices
{
    /**
     * Function responsible for checking if any product has been removed
     * @param array $data
     * @param array $productsSelected
     * @return array
     */
    public function checkProducts(array $data, SignaturesProducts $productsSelected)
    {
        $productsSave = [];
        foreach ($productsSelected as $productSelected) {
            $productsSave[] = $productSelected['product_id'];
        }

        return array_diff($productsSave, $data['products']);
    }
}
