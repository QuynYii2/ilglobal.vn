<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_vi',
        'title_en',
        'user_id',
        'content_vi',
        'content_en',
        'short_content_vi',
        'short_content_en',
        'status',
        'views'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
