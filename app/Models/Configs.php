<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configs extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'email',
        'phone',
        'status',
        'address',
        'cskh',
        'facebook',
        'zalo',
    ];
}