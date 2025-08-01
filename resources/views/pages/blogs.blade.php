@extends('layouts.app')

@section('content')
    <x-banner title="Our Blogs" subtitle="Our latest news and blogs" />

    <section class="blog-list-area pt-60 pb-120">
        <div class="container">
            <div style="margin-bottom: 0;" class="section-heading">
                <x-section_chip title="Blogs" />
            </div>
            <div class="row justify-content-center post-card-2-wrap">
                @foreach ($data as $item)
                    <x-blog_card date="{{ $item['date'] }}" image="{{ $item['image_url'] }}" category="{{ $item['category']['name'] }}"
                        title="{{ $item['name'] }}" description="{{ $item['summary'] }}" slug="{{ $item['slug'] }}" />
                @endforeach
            </div>
        </div>
    </section>
@endsection
