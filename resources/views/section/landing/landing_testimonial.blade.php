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

<section class="testimonial-section pt-60 pb-120">
    <div class="shapes">
        <div class="shape-1">
            <img src="images/testi-shape-1.png" alt="testi" />
        </div>
        <div class="shape-2">
            <img src="images/testi-shape-2.png" alt="testi" />
        </div>
    </div>
    <div class="container">
        <div class="section-heading text-center">
            <x-section_chip title="Our Testimonials" />
            <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">
                What Students Think and Say About EdCare
            </h2>
        </div>
        <div class="testi-carousel-3 swiper p-2">
            <div class="swiper-wrapper">
                @foreach ($testimonials as $item)
                    <x-testimonial_card title="{{ $item['name'] }}" testimonial="{{ $item['description'] }}"
                        image="{{ $item['image_url'] }}" name="{{ $item['name'] }}"
                        designation="{{ $item['position'] }}" />
                @endforeach
            </div>
        </div>
    </div>
</section>
