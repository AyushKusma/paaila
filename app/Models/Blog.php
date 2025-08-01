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
    public static function getRecentBlogs($limit = 2, $except = null)
    {
        $blogs = Blog::query();
        if ($except) {
            $blogs->where('id', '!=', $except);
        }
        return $blogs->latest()->paginate($limit);
    }
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : asset('images/default-blog.png');
    }
    public function getDateAttribute()
    {
        return $this->created_at->format('F j, Y');
    }
    public static function getDummyData()
    {
        return [
            [
                "date" => "December 10, 2024",
                "category" => ["name" => "Technology & Education"],
                "name" => "Empowering Students with Practical Skills for the Digital Era",
                "summary" => "Paaila focuses on hands-on training in tech skills, bridging the gap between theoretical knowledge and industry expectations. The curriculum integrates real-world projects and internships.",
                "image_url" => "/images/post-4.png",
                "slug" => "empowering-students-with-practical-skills-for-the-digital-era"
            ],
            [
                "date" => "December 11, 2024",
                "category" => ["name" => "Professional Development"],
                "name" => "Transforming Careers through Specialized Technical Courses",
                "summary" => "Showcasing success stories from Paaila alumni, highlighting how specialized courses like web development and digital marketing have advanced their careers.",
                "image_url" => "/images/post-5.png",
                "slug" => "transforming-careers-through-specialized-technical-courses"
            ],
            [
                "date" => "December 12, 2024",
                "category" => ["name" => "Innovation in Learning"],
                "name" => "The Role of AI in Modern Education: Paaila's Approach",
                "summary" => "Exploring how Paaila integrates cutting-edge technologies like AI and machine learning into its teaching methods to provide the best learning experiences.",
                "image_url" => "/images/post-6.png",
                "slug" => "the-role-of-ai-in-modern-education-paailas-approach"
            ]
        ];
    }
}
