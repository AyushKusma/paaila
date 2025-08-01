<?php

namespace App\Models;

use App\Traits\GenerateSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Portfolio extends Model
{
    use GenerateSlug;
    protected $fillable = [
        'name',
        'slug',
        'image',
        'description',
        'category_id',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    protected $with = ['category'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
