<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $signature_id
 * @property integer $product_id
 * @property integer $quantity
 * @property string $created_at
 * @property string $updated_at
 * @property Products $products
 * @property Signatures $signatures
 */
class SignaturesProducts extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['quantity', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function products()
    {
        return $this->belongsTo('App\Models\Products', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function signatures()
    {
        return $this->belongsTo('App\Models\Signatures', 'signature_id');
    }
}
