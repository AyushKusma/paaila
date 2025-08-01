<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RouteController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        $instructors = Team::all();
        $testimonials = Testimonial::all();
        $blogs = Blog::getRecentBlogs(limit: 3);
        if ($blogs->isEmpty()) {
            $blogs = Blog::getDummyData();
        }
        return view('pages.landing', ['accordionData' => $faqs, 'instructors' => $instructors, 'testimonials' => $testimonials, 'blogs' => $blogs]);
    }
    public function about()
    {
        $testimonials = Testimonial::all();
        return view('pages.about', compact('testimonials'));
    }
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

    public function services()
    {
        $services = Service::all();

        if ($services->isEmpty()) {
            $services = Service::getDummyData();
        }
        return view('pages.services', ['data' => $services]);
    }

    public function sendContact(Request $request)
    {
        try {

            $validated = $request->validate([
                'firstName' => 'required|string|max:255',
                'lastName' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'message' => 'required|string',
                'phone' => 'sometimes|string|max:20',
                'subject' => 'sometimes|string|max:255',
            ]);
            // Create a new contact entry
            $contact = Contact::create($validated + ['name' => $validated['firstName'] . ' ' . $validated['lastName']]);

            Mail::to($contact->email)->queue(new ContactMail($contact, admin: 0));
            Mail::to(config('mail.admin'))->queue(new ContactMail($contact, admin: 1));

            return back()->with([
                'type' => 'success',
                'message' => 'Thank you for your message. We will get back to you soon.',
            ]);
        } catch (\Exception $e) {
            return back()->with([
                'type' => 'error',
                'message' => 'Something went wrong. Please try again later.',
            ]);
        }
    }
}
