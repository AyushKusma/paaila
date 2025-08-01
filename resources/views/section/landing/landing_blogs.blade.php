<section class="blog-section pt-120 pb-120">
    <div class="container">
        <div class="section-heading text-center">
            <x-section_chip title="News & Blogs" />
            <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">
                Latest News Updates
            </h2>
        </div>
        <div class="row gy-lg-0 gy-4 justify-content-center post-card-2-wrap">
            @foreach ($blogs as $item)
                <x-blog_card date="{{ $item['date'] }}" image="{{ $item['image_url'] }}" category="{{ $item['category']['name'] }}"
                        title="{{ $item['name'] }}" description="{{ $item['summary'] }}" slug="{{ $item['slug'] }}" />
            @endforeach
        </div>
    </div>
</section>