<?php

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
Route::get('/blogs', function () {
    return view('pages.blogs');
});
Route::get('/blogs/{slug}', function () {
    return view('pages.blogs_detail');
});
Route::get('/contact', function () {
    return view('pages.contact');
});