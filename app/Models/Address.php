<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $nickname
 * @property string $cep
 * @property string $digit
 * @property string $complement
 * @property string $superscription
 * @property string $district
 * @property string $city
 * @property string $state
 * @property string $reference
 * @property User $user
 */
class Address extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'address';

    /**
     * @var array
     */
    protected $fillable = ['nickname', 'cep', 'digit', 'complement', 'superscription', 'district', 'city', 'state', 'reference', 'user_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
