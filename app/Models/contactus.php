<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    protected $fillable = [
        'order',
        'status',
        'title',
        'slug',
        'short_description',
        'description',
        'image',
        'image_1',
        "image_2",
        'seo_title',
        'seo_schema',
        'meta_keywords',
        'meta_description',
    ];
}
