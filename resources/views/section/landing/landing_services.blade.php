@php
    $data = [
        [
            "title" => "Personal Growth",
            "image" => "images/course-img-1.png",
            "slug" => "/services",
        ],
        [
            "title" => "Skill-Based Training",
            "image" => "images/course-img-2.png",
            "slug" => "course-details.html",
        ],
        [
            "title" => "Education Consultancy",
            "image" => "images/course-img-2.png",
            "slug" => "course-details.html",
        ],
        // Add more items here as needed
    ]
@endphp


<section class="feature-course bg-white pt-120 pb-120">
    <div class="container">
        <x-section_top chip_name="Our Servies" section_name="Explore Our Services" button_name="Explore All Services"
            path="/services" />

        <div class="row gy-xl-0 gy-4 justify-content-center">
            @foreach ($data as $item)
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="service-item wow fade-in-bottom" data-wow-delay="200ms">
                        <div class="service-thumb-wrap">
                            <div class="service-thumb">
                                <img src="{{ $item['image'] }}" alt="course" />
                            </div>
                        </div>
                        <div class="service-content">
                            <h3 class="title text-center">
                                <a href="">{{ $item['title'] }}</a>
                            </h3>
                            <!-- <div style="display: flex; justify-content: end;">
                                                        <a href="{{ $item['slug'] }}" class="service-btn">View Details</a>
                                                    </div> -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ./ course-section -->