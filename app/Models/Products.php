<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 */
class Products extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = ['name', 'created_at', 'updated_at'];
}
