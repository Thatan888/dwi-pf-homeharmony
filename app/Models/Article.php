<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_image',
        'title',
        'description',
        'price',
        'category_id',
        'registered_at',
        'status',
    ];

    protected $casts = [
        'registered_at' => 'datetime',
    ];
    

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
