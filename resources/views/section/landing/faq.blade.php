@php
    if ($accordionData->isEmpty()) {
        $accordionData = [
            [
                'id' => 1,
                'title' => 'What types of courses does Paaila Institute offer?',
                'description' => 'Paaila Institute offers courses in computer training, coding classes, skill-based training, language proficiency, and personal growth programs tailored for students and professionals.',
            ],
            [
                'id' => 2,
                'title' => 'Does Paaila Institute provide career counseling?',
                'description' => 'Yes, we provide expert career counseling to help individuals navigate academic and career paths with confidence, including internship opportunities and strategic career advice.',
            ],
            [
                'id' => 3,
                'title' => 'How do I enroll in a course at Paaila Institute?',
                'description' => 'Enrollment can be done online via our website or in-person at our center. Visit us for details or explore the courses section on our website.',
            ],
        ];
    } else {
        $accordionData = $accordionData->toArray();
    }
@endphp

<section class="faq-section pt-120 pb-120 overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="faq-img-wrap-2 wow fade-in-left" data-wow-delay="400ms">
                    <div class="faq-img-1">
                        <img src="{{ asset('images/faq-img-2.png') }}" alt="faq" />
                    </div>
                    <div class="faq-img-2">
                        <img src="{{ asset('images/faq-img-3.png') }}" alt="faq" />
                    </div>
                    <div class="faq-img-3">
                        <img src="{{ asset('images/faq-img-4.png') }}" alt="faq" />
                    </div>
                    <div class="faq-text-box">
                        <h4 class="student">Instructor</h4>
                        <div class="faq-thumb-list-wrap">
                            <ul class="faq-thumb-list">
                                @forelse ($instructors as $instructor)
                                    <li class="rounded-full overflow-hidden"><img src="{{ asset($instructor->image_url) }}" alt="{{ $instructor->name }}" /></li>
                                @empty
                                <li><img src="{{ asset('images/faq-thumb-1.png') }}" alt="faq" /></li>
                                <li><img src="{{ asset('images/faq-thumb-2.png') }}" alt="faq" /></li>
                                <li><img src="{{ asset('images/faq-thumb-3.png') }}" alt="faq" /></li>
                                <li><img src="{{ asset('images/faq-thumb-4.png') }}" alt="faq" /></li>    
                                @endforelse
                                <li class="number">25+</li>
                            </ul>
                            <p><span>200+</span> <br />Instructor</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="faq-content">
                    <div class="section-heading mb-30">
                        <x-section_chip title="FAQ" />
                        <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">
                            Frequently Asked Questions
                        </h2>
                    </div>
                    <div class="faq-accordion">
                        <div class="accordion" id="accordionExample">
                            @foreach ($accordionData as $index => $item)
                                <div class="accordion-item wow fade-in-bottom" data-wow-delay="{{ ($index * 100 + 400) . 'ms' }}">
                                    <h2 class="accordion-header" id="heading{{ $item['id'] }}">
                                        <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $item['id'] }}"
                                            aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                            aria-controls="collapse{{ $item['id'] }}">
                                            <span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}.</span> {{ $item['title'] }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $item['id'] }}"
                                        class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                        aria-labelledby="heading{{ $item['id'] }}"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{ $item['description'] }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>