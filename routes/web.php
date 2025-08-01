<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RouteController::class, 'index'])->name('home');
Route::get('/about-us', function () {
    return view('pages.about');
});
Route::get('/courses', function () {
    return view('pages.courses');
});
Route::get('/courses/{slug}', function () {
    return view('pages.courses_detail');
});
Route::get('/services', [RouteController::class, 'services'])->name('services.index');

Route::get('/blogs', [RouteController::class, 'blogs'])->name('blogs.index');
Route::get('/blogs/{slug}', [RouteController::class, 'blogDetails'])->name('blogs.show');

Route::get('/contact', function () {
    return view('pages.contact');
});
