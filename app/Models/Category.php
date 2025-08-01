<?php

namespace App\Models;

use App\Traits\GenerateSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use GenerateSlug;
    protected $fillable = ['name', 'slug', 'category_id'];
    protected $hidden = ['created_at', 'updated_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
    // where parent category is blog
    public function scopeBlogCategories($query)
    {
        return $query->where('category_id', 1);
    }
    
}
