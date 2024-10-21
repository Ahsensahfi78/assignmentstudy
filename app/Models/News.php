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
        'thumbnail_image',
        'content',
        'click',
    ];
}
