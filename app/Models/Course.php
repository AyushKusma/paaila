<?php

namespace App\Models;

use App\Traits\GenerateSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    use GenerateSlug;

    protected $fillable = [
        'name',
        'duration',
        'slug',
        'level',
        'category_id',
        'description'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function instructors(): BelongsToMany
    {
        return $this->belongsToMany(Team::class, 'instructor_courses');
    }
}
