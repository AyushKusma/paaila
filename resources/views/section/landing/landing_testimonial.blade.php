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
                @foreach ($data as $item)
                    <x-testimonial_card title="{{$item['title']}}" testimonial="{{$item['testimonial']}}"
                        image="{{$item['image']}}" name="{{$item['name']}}" designation="{{$item['designation']}}" />
                @endforeach
            </div>
        </div>
    </div>
</section>