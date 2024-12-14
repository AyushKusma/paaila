@php
    $courses = [
        [
            'image' => 'images/course-img-1.png',
            'tags' => 'Free',
            'title' => 'Beginner’s Guide to Basic Computer Skills',
            'slug' => 'Beginners-Guide-to-Basic-Computer-Skills',
            'lesson' => '8',
            'students' => '80',
            'views' => '10K',
            'person_name' => 'Bikram P. Acharya',
            'person_post' => 'Instructor',
            'rating' => '4.5',
            'price' => 'Free',
            'author_image' => 'images/course-author-1.png',
        ],
        [
            'image' => 'images/course-img-2.png',
            'tags' => 'Free',
            'title' => 'Advanced Microsoft Office Mastery',
            'slug' => 'Advanced-Microsoft-Office-Mastery',
            'lesson' => '10',
            'students' => '120',
            'views' => '18K',
            'person_name' => 'Oliver Smith',
            'person_post' => 'Senior Instructor',
            'rating' => '4.8',
            'price' => '$49.00',
            'author_image' => 'images/course-author-2.png',
        ],
        [
            'image' => 'images/course-img-3.png',
            'tags' => 'Free',
            'title' => 'Web Development with React and JavaScript',
            'slug' => 'Web-Development-with-React-and-JavaScript',
            'lesson' => '15',
            'students' => '150',
            'views' => '25K',
            'person_name' => 'Sophia Johnson',
            'person_post' => 'Instructor',
            'rating' => '4.9',
            'price' => '$99.00',
            'author_image' => 'images/course-author-3.png',
        ],
        [
            'image' => 'images/course-img-4.png',
            'tags' => 'Free',
            'title' => 'Data Analysis with Excel: From Beginner to Pro',
            'slug' => 'Data-Analysis-with-Excel-From-Beginner-to-Pro',
            'lesson' => '12',
            'students' => '100',
            'views' => '15K',
            'person_name' => 'Liam Brown',
            'person_post' => 'Instructor',
            'rating' => '4.7',
            'price' => '$59.00',
            'author_image' => 'images/course-author-4.png',
        ],
        [
            'image' => 'images/course-img-5.png',
            'tags' => 'Free',
            'title' => 'Introduction to Digital Marketing',
            'slug' => 'Introduction-to-Digital-Marketing',
            'lesson' => '8',
            'students' => '70',
            'views' => '12K',
            'person_name' => 'Mia Davis',
            'person_post' => 'Marketing Expert',
            'rating' => '4.6',
            'price' => '$39.00',
            'author_image' => 'images/course-author-5.png',
        ],
        [
            'image' => 'images/course-img-6.png',
            'tags' => 'Free',
            'title' => 'Entrepreneurship and Business Strategy',
            'slug' => 'Entrepreneurship-and-Business-Strategy',
            'lesson' => '10',
            'students' => '90',
            'views' => '13K',
            'person_name' => 'Ethan Wilson',
            'person_post' => 'Business Coach',
            'rating' => '4.8',
            'price' => '$79.00',
            'author_image' => 'images/course-author-6.png',
        ],
    ];
@endphp


<section class="course-section bg-grey pt-120 pb-120">
    <div class="shapes">
        <div class="shape shape-1">
            <img src="images/feature-shape-3.png" alt="shape" />
        </div>
        <div class="shape shape-2">
            <img src="images/feature-shape-4.png" alt="shape" />
        </div>
    </div>
    <div class="container">
        <x-section_top chip_name="Trending Courses" section_name="Trending Courses" button_name="Browse All Courses"
            path="/courses" />
        <div class="row gy-4">
            @foreach (array_slice($courses, 0, 3) as $index => $course)
                <x-course_card :course="$course" :index="$index" />
            @endforeach

        </div>
    </div>
</section>
<!-- ./ course-section -->