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
        'description',
        'image',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    protected $with = ['category', 'instructors'];

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : asset('images/default-blog.png');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function instructors(): BelongsToMany
    {
        return $this->belongsToMany(Team::class, 'instructor_courses');
    }

    public static function getRecentCourses($limit = 3, $except = null)
    {
        $courses = Course::query();
        if ($except) {
            $courses->where('id', '!=', $except);
        }
        return $courses->latest()->paginate($limit);
    }
}
