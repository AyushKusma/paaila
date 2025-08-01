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

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : asset('images/default-blog.png');
    }

    public  static function getDummyData()
    {
        return [
            [
                'name' => 'Personal Growth',
                'image_url' => 'images/course-img-1.png',
                'slug' => '/services',
                'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ],
            [
                'name' => 'Skill-Based Training',
                'image_url' => 'images/course-img-2.png',
                'slug' => 'course-details.html',
                'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ],
            [
                'name' => 'Education Consultancy',
                'image_url' => 'images/course-img-2.png',
                'slug' => 'course-details.html',
                'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ],
        ];
    }
}
