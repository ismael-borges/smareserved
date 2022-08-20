<?php

namespace App\Repository;

use App\Models\SignaturesProducts;
use Illuminate\Support\Facades\DB;

class SignatureProductRepository
{
    public function create(int $signatureId, int $productId, int $quantity)
    {
       $signatureProduct = new SignaturesProducts;
       $signatureProduct->signature_id = $signatureId;
       $signatureProduct->product_id = $productId;
       $signatureProduct->quantity = $quantity;
       $signatureProduct->save();
    }

    public function update(int $signatureId, int $productId, int $quantity)
    {
        return DB::table('signatures_products')
            ->where('signature_id', $signatureId)
            ->where('product_id', $productId)
            ->update(['quantity' => $quantity]);
    }

    public function delete(int $signatureId, int $productId)
    {
        return SignaturesProducts::where('signature_id', $signatureId)
            ->where('product_id', '=', $productId)
            ->delete();
    }

    public function find(int $signatureId)
    {
        return SignaturesProducts::where('signature_id', $signatureId)
            ->with('products')
            ->get();
    }

    public function save($products, $quantity, $signatureId, $nameFunction)
    {
        if (!empty($products)) {
            foreach ($products as $productId) {
                $this->$nameFunction(
                    $signatureId,
                    $productId,
                    $quantity[$productId]
                );
            }
        }
    }
}
