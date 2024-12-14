<div class="col-xl-4 col-lg-6 col-md-6">
    <div class="course-item wow fade-in-bottom" data-wow-delay="{{$index * 200}}">
        <div class="course-thumb-wrap">
            <div class="course-thumb">
                <img src="{{ $course['image'] }}" alt="course" />
            </div>
        </div>
        <div class="course-content">
            <div>
                <span class=" tags">{{ $course['tags'] }}</span>
                <h3 class="title">
                    <a href="{{ url('/courses/' . $course['slug']) }}">{{ $course['title'] }}</a>
                </h3>
            </div>
            <div>
                <ul class="course-list">
                    <li><i class="fa-solid fa-file"></i>Lesson {{ $course['lesson'] }}</li>
                    <li><i class="fa-solid fa-user"></i>Students {{ $course['students'] }}</li>
                    <li><i class="fa-solid fa-eye"></i>View: {{ $course['views'] }}</li>
                </ul>
                <div class="course-author-box" style="border-bottom: 1px solid #e0e5eb;">
                    <ul class="course-review">
                        @for ($i = 0; $i < 5; $i++)
                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                        @endfor
                        <li class="point">({{ $course['rating'] }})</li>
                    </ul>
                    <div class="course-author">
                        <div class="author-img">
                            <img src="{{ $course['author_image'] }}" alt="course" />
                        </div>
                        <div class="author-info">
                            <h4 class="name">{{ $course['person_name'] }}</h4>
                            <span>{{ $course['person_post'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="bottom-content mt-20">
                    <span class="price">{{ $course['price'] }}</span>
                    <a href="{{ url('/courses/' . $course['slug']) }}" class="course-btn">View Details</a>
                </div>
            </div>
        </div>
    </div>
</div>