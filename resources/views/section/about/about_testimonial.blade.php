@php
    if ($testimonials->isEmpty()) {
        $testimonials = [
            [
                'name' => 'Transformative Training Programs',
                'description' =>
                    "Paaila's training sessions are hands-on and practical. They transformed my understanding of computer skills, making me confident in applying them in real-world scenarios.",
                'image_url' => 'images/testi-author-1.png',
                'name' => 'Emily Carter',
                'position' => 'Graphic Designer',
            ],
            [
                'name' => 'Supportive Learning Environment',
                'description' =>
                    'The instructors at Paaila are incredibly supportive. Their guidance and encouragement helped me to excel in my career. The resources provided are top-notch.',
                'image_url' => 'images/testi-author-2.png',
                'name' => 'John Miller',
                'position' => 'Web Developer',
            ],
            [
                'name' => 'Career-Changing Experience',
                'description' =>
                    "Enrolling in Paaila's programs was a career-changing decision. The blend of technical skills and career counseling prepared me for the competitive job market.",
                'image_url' => 'images/testi-author-3.png',
                'name' => 'Sophia Brown',
                'position' => 'Data Analyst',
            ],
        ];
    }
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
                            @foreach ($testimonials as $item)
                                <x-testimonial_card title="{{ $item['name'] }}" testimonial="{{ $item['description'] }}"
                                    image="{{ $item['image_url'] }}" name="{{ $item['name'] }}"
                                    designation="{{ $item['position'] }}" />
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
