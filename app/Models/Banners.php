<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 */
class Banners extends Model
{
    use HasFactory;

    /**
     * @var mixed|string
     */
    protected $fillable=[
        'id',
        'bannerImage'
    ];
}
