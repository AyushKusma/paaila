<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing');
});
Route::get('/about-us', function () {
    return view('pages.about');
});
Route::get('/courses', function () {
    return view('pages.courses');
});
Route::get('/courses/{slug}', function () {
    return view('pages.courses_detail');
});
Route::get('/services', function () {
    return view('pages.services');
});
Route::get('/blogs', [RouteController::class, 'blogs'])->name('blogs.index');

Route::get('/blogs/{slug}', [RouteController::class, 'blogDetails'])->name('blogs.show');

Route::get('/contact', function () {
    return view('pages.contact');
});
