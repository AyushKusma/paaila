@extends('layouts.app')

@section('content')

<x-banner title="About Us" subtitle="Who We Are and What We Stand For" />

@include('section.about.about_us')
@include('section.about.about_feature')
@include('section.about.about_counter')
@include('section.about.about_testimonial')

@endsection