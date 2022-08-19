<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $digit
 * @property string $mounth
 * @property string $yearcard
 * @property string $nameprinted
 * @property string $cvv
 * @property string $nickname
 * @property User $user
 */
class Payment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'payment';

    /**
     * @var array
     */
    protected $fillable = ['digit', 'mounth', 'yearcard', 'nameprinted', 'cvv', 'nickname', 'user_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
