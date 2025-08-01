<?php

namespace App\Models;

use App\Traits\GenerateSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use GenerateSlug;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'summary',
        'image',
        'category_id',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
    protected $with = ['category', 'images'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public static function getRecentBlogs($limit = 2)
    {
        return Blog::latest()->paginate($limit);
    }
}
