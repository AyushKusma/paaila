@extends('layouts.app')

@section('content')

@include('section.landing.landing_banner')
@include('section.landing.trending_courses')
@include('section.landing.course_categories')
@include('section.landing.landing_services')
<!-- @include('section.landing.cta') -->
@include('section.landing.faq')
@include('section.landing.landing_instructors')
@include('section.landing.landing_testimonial')
@include('section.landing.landing_blogs')

@endsection