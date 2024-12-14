@props(['chip_name', 'section_name', 'button_name', 'path', 'white_content' => false])

<div id="course-top" class="course-top heading-space align-items-end" data-white-content="{{$white_content}}">
    <div class="section-heading mb-0">
        <x-section_chip title="{{$chip_name}}" />
        <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">
            {{$section_name}}
        </h2>
    </div>
    <div class="course-top-right wow fade-in-bottom" data-wow-delay="300ms">
        <a href="{{$path}}" class="ed-primary-btn">{{$button_name}} <i class="fa-solid fa-arrow-right"></i></a>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var courseTops = document.querySelectorAll('#course-top');
        courseTops.forEach(function (courseTop) {
            // Check if the element has data-white-content="true"
            if (courseTop.getAttribute('data-white-content') === 'true') {
                courseTop.classList.add('white-content');
            }
        });
    });
</script>