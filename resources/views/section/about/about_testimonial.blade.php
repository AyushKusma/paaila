@php
    $data = [
        [
            "title" => "Transformative Training Programs",
            "testimonial" => "Paaila's training sessions are hands-on and practical. They transformed my understanding of computer skills, making me confident in applying them in real-world scenarios.",
            "image" => "images/testi-author-1.png",
            "name" => "Emily Carter",
            "designation" => "Graphic Designer"
        ],
        [
            "title" => "Supportive Learning Environment",
            "testimonial" => "The instructors at Paaila are incredibly supportive. Their guidance and encouragement helped me to excel in my career. The resources provided are top-notch.",
            "image" => "images/testi-author-2.png",
            "name" => "John Miller",
            "designation" => "Web Developer"
        ],
        [
            "title" => "Career-Changing Experience",
            "testimonial" => "Enrolling in Paaila's programs was a career-changing decision. The blend of technical skills and career counseling prepared me for the competitive job market.",
            "image" => "images/testi-author-3.png",
            "name" => "Sophia Brown",
            "designation" => "Data Analyst"
        ]
    ];
@endphp

<section style="margin-block: 5rem;" class="testimonial-section-3 pt-120 pb-120">
    <div class="shapes">
        <div class="shape shape-1"><img src="images/testi-shape-3.png" alt="shape"></div>
        <div class="shape shape-2"><img src="images/testi-shape-4.png" alt="shape"></div>
    </div>
    <div class="container">
        <div class="row gy-xl-0 gy-5 align-items-center">
            <div class="col-xl-5 col-lg-12">
                <div class="testi-left-content white-content">
                    <div class="section-heading mb-20 white-content">
                        <x-section_chip title="Our Testimonials" />
                        <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">What Students Think and
                            <br>Say About EdCare
                        </h2>
                    </div>
                    <p class="mb-0 wow fade-in-bottom" data-wow-delay="500ms">Empowering businesses with cutting-edge
                        technology, reliable support, <br> and seamless integration.</p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-12">
                <div class="testi-carousel-wrap-2">
                    <div class="testi-carousel-2 swiper">
                        <div class="swiper-wrapper">
                            @foreach ($data as $item)
                                <x-testimonial_card title="{{$item['title']}}" testimonial="{{$item['testimonial']}}"
                                    image="{{$item['image']}}" name="{{$item['name']}}"
                                    designation="{{$item['designation']}}" />
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-arrow">
                        <div class="swiper-nav swiper-next"><i class="fa-solid fa-chevron-left"></i></div>
                        <div class="swiper-nav swiper-prev"><i class="fa-solid fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>