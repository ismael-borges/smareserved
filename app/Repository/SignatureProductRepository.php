<?php

namespace App\Repository;

use App\Models\SignaturesProducts;

class SignatureProductRepository
{
    public function create(
        int $signatureId,
        int $productId,
        int $quantity
    ) {
       $signatureProduct = new SignaturesProducts;
       $signatureProduct->signature_id = $signatureId;
       $signatureProduct->product_id = $productId;
       $signatureProduct->quantity = $quantity;
       $signatureProduct->save();
    }

    public function find($signatureId)
    {
        return SignaturesProducts::where('signature_id', $signatureId)
            ->with('products')
            ->get();
    }
}
