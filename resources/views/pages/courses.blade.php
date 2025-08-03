@extends('layouts.app')

@section('content')
    @php
        if ($courses->isEmpty()) {
            $courses =collect( [
                [
                    'image_url' => 'images/course-img-1.png',
                    'tags' => 'Free',
                    'name' => 'Beginner’s Guide to Basic Computer Skills',
                    'slug' => 'Beginners-Guide-to-Basic-Computer-Skills',
                    'duration' => '8',
                    'students' => '80',
                    'views' => '10K',
                    'instructors' => collect([
                        [
                            'name' => 'Bikram P. Acharya',
                            'position' => 'Instructor',
                            'image_url' => 'images/course-author-1.png',
                        ],
                    ]),
                    'rating' => '4.5',
                    'price' => 'Free',
                    'author_image' => 'images/course-author-1.png',
                ],
                [
                    'image_url' => 'images/course-img-2.png',
                    'tags' => 'Free',
                    'name' => 'Advanced Microsoft Office Mastery',
                    'slug' => 'Advanced-Microsoft-Office-Mastery',
                    'duration' => '10',
                    'students' => '120',
                    'views' => '18K',
                    'instructors' => collect( [
                        [
                            'name' => 'Oliver Smith',
                            'position' => 'Senior Instructor',
                            'image_url' => 'images/course-author-2.png',
                        ],
                    ]),
                    'rating' => '4.8',
                    'price' => '$49.00',
                    'author_image' => 'images/course-author-2.png',
                ],
                [
                    'image_url' => 'images/course-img-3.png',
                    'tags' => 'Free',
                    'name' => 'Web Development with React and JavaScript',
                    'slug' => 'Web-Development-with-React-and-JavaScript',
                    'duration' => '15',
                    'students' => '150',
                    'views' => '25K',
                    'instructors' => collect( [
                        [
                            'name' => 'Sophia Johnson',
                            'position' => 'Instructor',
                            'image_url' => 'images/course-author-3.png',
                        ],
                    ]),
                    'rating' => '4.9',
                    'price' => '$99.00',
                    'author_image' => 'images/course-author-3.png',
                ],
                [
                    'image_url' => 'images/course-img-4.png',
                    'tags' => 'Free',
                    'name' => 'Data Analysis with Excel: From Beginner to Pro',
                    'slug' => 'Data-Analysis-with-Excel-From-Beginner-to-Pro',
                    'duration' => '12',
                    'students' => '100',
                    'views' => '15K',
                    'instructors' => collect( [
                        [
                            'name' => 'Liam Brown',
                            'position' => 'Instructor',
                            'image_url' => 'images/course-author-4.png',
                        ],
                    ]),
                    'rating' => '4.7',
                    'price' => '$59.00',
                    'author_image' => 'images/course-author-4.png',
                ],
                [
                    'image_url' => 'images/course-img-5.png',
                    'tags' => 'Free',
                    'name' => 'Introduction to Digital Marketing',
                    'slug' => 'Introduction-to-Digital-Marketing',
                    'duration' => '8',
                    'students' => '70',
                    'views' => '12K',
                    'instructors' => collect( [
                        [
                            'name' => 'Mia Davis',
                            'position' => 'Marketing Expert',
                            'image_url' => 'images/course-author-5.png',
                        ],
                    ]),
                    'rating' => '4.6',
                    'price' => '$39.00',
                    'author_image' => 'images/course-author-5.png',
                ],
                [
                    'image_url' => 'images/course-img-6.png',
                    'tags' => 'Free',
                    'name' => 'Entrepreneurship and Business Strategy',
                    'slug' => 'Entrepreneurship-and-Business-Strategy',
                    'duration' => '10',
                    'students' => '90',
                    'views' => '13K',
                    'instructors' => collect( [
                        [
                            'name' => 'Ethan Wilson',
                            'position' => 'Business Coach',
                            'image_url' => 'images/course-author-6.png',
                        ],
                    ]),
                    'rating' => '4.8',
                    'price' => '$79.00',
                    'author_image' => 'images/course-author-6.png',
                ],
            ]);
        }

    @endphp

    <x-banner title="Our Courses" subtitle="Explore All The Courses" />

    <section class="feature-course bg-white pt-60 pb-120">
        <div class="container">
            <div style="margin-bottom: 0;" class="section-heading">
                <x-section_chip title="Our Courses" />
            </div>
            <div class="row gy-4 justify-content-center">
                @foreach ($courses as $index => $course)
                    <x-course_card :course="$course" :index="$index" />
                @endforeach
            </div>
        </div>
    </section>
@endsection
