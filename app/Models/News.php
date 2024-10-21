<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'cate_id',
        'title',
        'date',
        'slug',
        'thumbnail_image',
        'user_id',
        'content',
        'click',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(category::class, 'cate_id');
    }
}
