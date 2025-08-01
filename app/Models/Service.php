<?php

namespace App\Models;

use App\Traits\GenerateSlug;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use GenerateSlug;
    protected $fillable = [
        'name',
        'image',
        'description',
        'summary',
        'category_id',
        'slug',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
    protected $hidden = ['created_at', 'updated_at'];

    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function contact()
    {
        return $this->hasMany(Contact::class);
    }
}
