<div class="col-xl-4 col-lg-6 col-md-6">
    <div class="course-item wow fade-in-bottom" data-wow-delay="{{ $index * 200 }}">
        <div class="course-thumb-wrap">
            <div class="course-thumb">
                <img src="{{ $course['image_url'] }}" alt="{{ $course['name'] }}" />
            </div>
        </div>
        <div class="course-content">
            <div>
                <h3 class="title">
                    <a href="{{ route('courses.show', $course['slug']) }}">{{ $course['name'] }}</a>
                </h3>
            </div>
            <div>
                <div class="course-author-box" style="border-bottom: 1px solid #e0e5eb;">
                    @if ($course['instructors']->isNotEmpty())
                        <div class="course-author">
                            <div class="author-img rounded-full overflow-hidden">
                                <img src="{{ $course['instructors'][0]['image_url'] }}" alt="course" />
                            </div>
                            <div class="author-info">
                                <h4 class="name">{{ $course['instructors'][0]['name'] }}</h4>
                                <span>{{ $course['instructors'][0]['position'] }}</span>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="bottom-content mt-20">
                    <span class="price">{{ $course['duration'] }}</span>
                    <a href="{{ route('courses.show', $course['slug']) }}" class="course-btn">View Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
