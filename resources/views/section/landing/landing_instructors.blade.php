@php
    $data = [
        [
            'image' => 'images/team-5.png',
            'name' => 'William Samuel',
            'designation' => 'Instructor',
            'fb_link' => '#',
            'insta_link' => '#',
            'x_link' => '#',
            'whatsapp_link' => '#',
        ],
        [
            'image' => 'images/team-6.png',
            'name' => 'Olivia Sophia',
            'designation' => 'Instructor',
            'fb_link' => '#',
            'insta_link' => '#',
            'x_link' => '#',
            'whatsapp_link' => '#',
        ],
        [
            'image' => 'images/team-7.png',
            'name' => 'Jacob Mason',
            'designation' => 'Instructor',
            'fb_link' => '#',
            'insta_link' => '#',
            'x_link' => '#',
            'whatsapp_link' => '#',
        ],
        [
            'image' => 'images/team-8.png',
            'name' => 'Isabella Grace',
            'designation' => 'Instructor',
            'fb_link' => '#',
            'insta_link' => '#',
            'x_link' => '#',
            'whatsapp_link' => '#',
        ],
    ];
@endphp

<section class="team-section pb-120">
    <div class="container">
        <x-section_top section_name="Meet Our Expert Instructors" chip_name="Our Instructors" button_name="Contact Us"
            path="/contact" />
    </div>
    <div style="display: flex; align-items:center; justify-content: center;" class="team-container">
        <div class="row gy-xl-0 gy-4 justify-content-center container">
            @foreach ($data as $item)
                <x-instructor_card image="{{$item['image']}}" name="{{$item['name']}}"
                    designation="{{$item['designation']}}" fb_link="{{$item['fb_link']}}"
                    insta_link="{{$item['insta_link']}}" x_link="{{$item['x_link']}}"
                    whatsapp_link="{{$item['whatsapp_link']}}" />
            @endforeach
        </div>
    </div>
</section>