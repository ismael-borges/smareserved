<?php

namespace App\Services;

use App\Models\SignaturesProducts;

class SignatureServices
{
    /**
     * Function responsible for checking if any product has been removed or added
     * @param $data
     * @param $productsSelected
     * @return array
     */
    public function checkProducts($data, $productsSelected)
    {
        $productsSave = [];
        foreach ($productsSelected as $productSelected) {
            $productsSave[] = $productSelected['product_id'];
        }
        return [
            "delected" => array_diff($productsSave, $data['products']),
            "added" => array_diff($data['products'], $productsSave)
        ];
    }
}
