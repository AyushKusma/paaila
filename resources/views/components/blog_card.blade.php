@props(['image', 'date', 'category', 'title', 'description', 'slug'])

<div class="col-xl-4 col-lg-4 col-md-6">
    <div class="post-card-2 wow fade-in-bottom" data-wow-delay="400ms">
        <div class="post-thumb">
            <img src="{{$image}}" alt="post" />
        </div>
        <div class="post-content-wrap">
            <div class="post-content">
                <ul class="post-meta">
                    <li>
                        <i class="fa-sharp fa-regular fa-clock"></i>{{$date}}
                    </li>
                    <li>
                        <i class="fa-sharp fa-regular fa-folder"></i>{!!$category!!}
                    </li>
                </ul>
                <div>
                    <h3 class="title blog-title">
                        <a href="{{url('blogs/' . $slug)}}">{!!$title!!}</a>
                    </h3>
                    <p>
                        {!!$description!!}
                    </p>
                    <a href="{{url('blogs/' . $slug)}}" class="ed-primary-btn">Read More <i
                            class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>