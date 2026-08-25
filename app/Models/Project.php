<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'category_id', 'title', 'slug', 'description', 'title_ar', 'description_ar', 
        'image', 'client', 'url', 'is_featured'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
