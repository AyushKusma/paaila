<?php

namespace App\Models;

use App\Traits\GenerateSlug;
use Illuminate\Database\Eloquent\Model;

class Consultancy extends Model
{
    use GenerateSlug;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'summary',
        'description',
    ];
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : asset('images/default-blog.png');
    }
}
