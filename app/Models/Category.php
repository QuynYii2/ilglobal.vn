<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_vi',
        'name_en',
        'parent_id',
        'user_id',
        'status',
        'thumbnail',
        'check',
        'stt',
    ];

    public function cate()
    {
        return $this->hasMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(Category::class);
    }
}
