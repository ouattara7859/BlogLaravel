<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'title',
        'category_count_blog',
        'tags',
        'blog_img',
        'description',
        'slug',
        ];
}
