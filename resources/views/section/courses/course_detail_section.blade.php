<section class="course-details pt-60 pb-120 bg-white">
    <div class="container">
        <div style="margin-bottom: 0;" class="section-heading">
            <x-section_chip title="Blogs Detail" />
        </div>
        <div class="row">
            <div class="col-xl-9 col-lg-12">
                <div class="course-details-content">
                    <div class="course-details-img">
                        <img src="{{ $course->image_url }}" alt="{{ $course->name }}">
                    </div>
                    <div class="details-inner">
                        <h2 class="title">{{ $course->name }}</h2>
                        <ul class="course-details-list">
                            @if ($course->instructors->count() > 0)    
                            <li><img src="{{ $course->instructors[0]->image_url }}" alt="{{ $course->name }}"><span>Instructor:</span>
                                {{$course->instructors[0]->name }}</li>
                            @endif
                            <li><i class="fa-solid fa-tags"></i>{{ $course->category->name }}</li>
                        </ul>
                    </div>
                    <div class="course-details-tab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true"><i class="fa-sharp fa-solid fa-bookmark"></i>Overview</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                    type="button" role="tab" aria-controls="contact" aria-selected="false"><i
                                        class="fa-solid fa-user"></i>Instructor</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="tab-overview">
                                    <h3 class="title">Description</h3>
                                    <p>{!! str()->sanitizeHtml($course->description) !!}</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                @foreach ($course['instructors'] as $instructor)
                                    <div class="row team-wrap-2 gy-lg-0 gy-4 justify-content-center ">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="team-item-3 team-item-5 overflow-hidden">
                                                <div class="team-thumb">
                                                    <div class="shape"><img src="/images/team-shape-3.png"
                                                            alt="shape"></div>
                                                    <div class="team-men">
                                                        <img src="{{ $instructor->image_url }}"
                                                            alt="{{ $instructor->name }}">
                                                    </div>
                                                </div>
                                                <div class="team-content">
                                                    <h3 class="title">{{ $instructor->name }}</h3>
                                                    <span>{{ $instructor->position }}</span>
                                                    <ul class="social-list">
                                                        <li><a href="{{ $instructor->facebook }}"><i
                                                                    class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="{{ $instructor->instagram }}"><i
                                                                    class="fab fa-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-12">
                <div class="course-sidebar sticky-widget">
                    <h4 class="sidebar-title">Course Information</h4>
                    <ul class="course-sidebar-list">
                        @if ($course->instructors->count() > 0)
                            <li><i class="fa-solid fa-house-chimney"></i>Instructor:
                                <span>{{ $course->instructors[0]->name }}</span>
                            </li>
                        @endif
                        <li><i class="fa-solid fa-clock"></i>Duration: <span>{{ $course->duration }}</span></li>
                        <li><i class="fa-solid fa-tag"></i>Course level: <span>{{ $course->level }}</span></li>
                    </ul>
                    <div class="share-btn">
                        <button class="ed-primary-btn"><i class="fa-solid fa-share-nodes"></i>Share This
                            Course</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
