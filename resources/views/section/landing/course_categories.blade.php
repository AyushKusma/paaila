@php
    $data = [
        [
            "image" => "images/feature-1.png",
            "title" => "UI/UX Design Service",
            "slug" => "course-details.html",
        ],
        [
            "image" => "images/feature-2.png",
            "title" => "Software Development",
            "slug" => "course-details.html",
        ],
        [
            "image" => "images/feature-3.png",
            "title" => "Digital Marketing",
            "slug" => "course-details.html",
        ],
        [
            "image" => "images/feature-4.png",
            "title" => "Self Management",
            "slug" => "course-details.html",
        ],
        [
            "image" => "images/feature-5.png",
            "title" => "Application Development",
            "slug" => "course-details.html",
        ],
        [
            "image" => "images/feature-6.png",
            "title" => "UI/UX Graphic Design",
            "slug" => "course-details.html",
        ]
    ];
@endphp


<section style=" padding-inline: 40px;" class="feature-section pt-120">
    <div class="feature-wrap pt-120 pb-120">
        <div class="container">
            <x-section_top chip_name="Our Course Categories" section_name="Explore Our Course Categories"
                button_name="Browse All Courses" white_content="true" path="/courses" />
            <div class="row gy-xl-0 gy-4 justify-content-center">
                @foreach ($data as $index => $item)
                    <div class="col-xl-2 col-lg-3 col-md-4">
                        <div class="feature-item text-center wow fade-in-bottom"
                            data-wow-delay="{{ (200 * ($index + 1)) }}ms">
                            <div class="icon">
                                <img src="{{ $item['image'] }}" alt="feature" />
                            </div>
                            <h3 class="title">{{ $item['title'] }}</h3>
                            <a href="{{ $item['slug'] }}" class="feature-btn">
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>