<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'slug', 'excerpt', 'content', 'title_ar', 'content_ar', 
        'image', 'is_published', 'published_at', 'category_id'
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'is_published' => 'boolean',
        ];
    }
    
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
