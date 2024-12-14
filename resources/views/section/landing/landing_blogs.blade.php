@php
    $data = [
        [
            "date" => "December 10, 2024",
            "category" => "Technology & Education",
            "title" => "Empowering Students with Practical Skills for the Digital Era",
            "description" => "Paaila focuses on hands-on training in tech skills, bridging the gap between theoretical knowledge and industry expectations. The curriculum integrates real-world projects and internships.",
            "image" => "/images/post-4.png",
            "link" => "blog-details.html",
            "slug" => "empowering-students-with-practical-skills-for-the-digital-era"
        ],
        [
            "date" => "December 11, 2024",
            "category" => "Professional Development",
            "title" => "Transforming Careers through Specialized Technical Courses",
            "description" => "Showcasing success stories from Paaila alumni, highlighting how specialized courses like web development and digital marketing have advanced their careers.",
            "image" => "/images/post-5.png",
            "link" => "blog-details.html",
            "slug" => "transforming-careers-through-specialized-technical-courses"
        ],
        [
            "date" => "December 12, 2024",
            "category" => "Innovation in Learning",
            "title" => "The Role of AI in Modern Education: Paaila's Approach",
            "description" => "Exploring how Paaila integrates cutting-edge technologies like AI and machine learning into its teaching methods to provide the best learning experiences.",
            "image" => "/images/post-6.png",
            "link" => "blog-details.html",
            "slug" => "the-role-of-ai-in-modern-education-paailas-approach"
        ]
    ];
@endphp


<section class="blog-section pt-120 pb-120">
    <div class="container">
        <div class="section-heading text-center">
            <x-section_chip title="News & Blogs" />
            <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">
                Latest News Updates
            </h2>
        </div>
        <div class="row gy-lg-0 gy-4 justify-content-center post-card-2-wrap">
            @foreach ($data as $item)
                <x-blog_card date="{{$item['date']}}" image="{{$item['image']}}" category="{{$item['category']}}"
                    title="{{$item['title']}}" description="{{$item['description']}}" slug="{{$item['slug']}}" />
            @endforeach
        </div>
    </div>
</section>