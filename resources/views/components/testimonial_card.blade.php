@props(['title', 'testimonial', 'image', 'name', 'designation'])

<div class="swiper-slide">
    <div class="testi-item">
        <div>
            <h3 class="title">{{$title}}</h3>
            <p style="flex-grow: 1">
                {!! $testimonial !!}
            </p>
        </div>
        <div class="testi-author">
            <div class="author-img">
                <img src={{$image}} alt="testi" />
            </div>
            <h4 class="name">{{$name}} <span>{{$designation}}</span></h4>
        </div>
    </div>
</div>