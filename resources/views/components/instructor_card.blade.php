@props(['image', 'name', 'designation', 'fb_link', 'insta_link', 'x_link', 'whatsapp_link'])

<div class="col-xl-3 col-lg-4 col-md-6">
    <div class="team-item-3 team-item-5">
        <div class="team-thumb">
            <div class="team-men">
                <img src="{{$image}}" alt="team">
            </div>
        </div>
        <div class="team-content">
            <h3 class="title"><a href="team-details.html">{{$name}}</a></h3>
            <span>{{$designation}}</span>
            <ul class="social-list">
                <li><a href="{{$fb_link}}"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="{{$insta_link}}"><i class="fab fa-instagram"></i></a></li>
                <li><a href="{{$whatsapp_link}}"><i class="fab fa-whatsapp"></i></a></li>
                <li><a href="{{$x_link}}"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>
</div>