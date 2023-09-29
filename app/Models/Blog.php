<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author_name',
        'summary',
        'description',
        'slug',
        'image',
        'thumbnail',
        'meta_tag_title',
        'meta_tag_keywords',
        'meta_tag_description',
        'thumbnail_alt',
        'image_alt',
        'is_active',
        'blog_category_id',
        'user_id'
    ];

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    // public function category()
    // {
    //     return $this->belongsTo(BlogCategory::class, 'blog_category_id', 'id');
    // }
}
