<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $payment_id
 * @property integer $address_id
 * @property integer $recurrence_type
 * @property integer $user_id
 * @property integer $fgstatus
 * @property string $dtnextexecution
 * @property string $created_at
 * @property string $updated_at
 * @property Products[] $products
 * @property Address $address
 * @property Payment $payment
 * @property User $user
 */
class Signatures extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['payment_id', 'address_id', 'recurrence_id', 'user_id', 'fgstatus', 'recurrence_type', 'dtnextexecution', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany('App\Models\Products', 'signatures_products');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function address()
    {
        return $this->belongsTo('App\Models\Address');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payment()
    {
        return $this->belongsTo('App\Models\Payment');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
