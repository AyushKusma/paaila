<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Team extends Model
{
    protected $fillable = [
        'name',
        'image',
        'position',
        'facebook',
        'twitter',
        'instagram',
        'whatsapp'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : asset('images/default-blog.png');
    }

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'instructor_courses');
    }
}
