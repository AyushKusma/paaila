<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'image',
        'poster_id',
        'blog_id',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
