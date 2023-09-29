<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'location',
        'duration',
        'facilities',
        'features',
        'price',
        'group_limit',
        'title',
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
        'tour_category_id',
        'destination_id',
        'gallery',
    ];
}
