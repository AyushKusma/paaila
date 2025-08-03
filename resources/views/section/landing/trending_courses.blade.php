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
            @forelse ($courses as $index => $course)
            <x-course_card :course="$course" :index="$index" />
            @empty
                <p>No courses found.</p>
            @endforelse
        </div>
    </div>
</section>