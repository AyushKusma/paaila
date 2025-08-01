<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function blogs()
    {
        $blogs = Blog::all();

        if ($blogs->isEmpty()) {
            $blogs = Blog::getDummyData();
        }
        return view('pages.blogs', ['data' => $blogs]);
    }
    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        // if no blog found, return dummy data
        if (!$blog) {
            $blog = Blog::getDummyData()[0];
        }
        // if blog found, get categories and recent blogs
        $categories = Category::blogCategories()->get();
        $recentBlogs = Blog::getRecentBlogs(limit: 3, except: $blog['id'] ?? null);
        return view('pages.blogs_detail', ['blog' => $blog, 'categories' => $categories, 'recentBlogs' => $recentBlogs]);
    }
}
