@php
if($instructors->isEmpty()){
$instructors = [
        [
            'image_url' => 'images/team-5.png',
            'name' => 'William Samuel',
            'position' => 'Instructor',
        ],
        [
            'image_url' => 'images/team-6.png',
            'name' => 'Olivia Sophia',
            'position' => 'Instructor',
        ],
        [
            'image_url' => 'images/team-7.png',
            'name' => 'Jacob Mason',
            'position' => 'Instructor',
        ],
        [
            'image_url' => 'images/team-8.png',
            'name' => 'Isabella Grace',
            'position' => 'Instructor',
        ],
    ];
}
@endphp

<section class="team-section pb-120">
    <div class="container">
        <x-section_top section_name="Meet Our Expert Instructors" chip_name="Our Instructors" button_name="Contact Us"
            path="/contact" />
    </div>
    <div style="display: flex; align-items:center; justify-content: center;" class="team-container">
        <div class="row gy-xl-0 gy-4 justify-content-center container">
            @foreach ($instructors as $item)
                <x-instructor_card image="{{$item['image_url']}}" name="{{$item['name']}}"
                    designation="{{$item['position']}}" fb_link="{{$item['facebook'] ?? null}}"
                    insta_link="{{$item['instagram'] ?? null}}" x_link="{{$item['twitter'] ?? null}}"
                    whatsapp_link="{{$item['whatsapp'] ?? null}}" />
            @endforeach
        </div>
    </div>
</section>