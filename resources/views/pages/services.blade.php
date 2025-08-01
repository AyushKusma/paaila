@extends('layouts.app')

@section('content')

    <x-banner title="Our Services" subtitle="Explore All The Courses" />

    <div class="container py-5">
        <div class="section-heading text-center">
            <x-section_chip title="Our Services" />
            <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">
                Explore Our Services
            </h2>
        </div>

        <div class="row gy-xl-0 gy-4 justify-content-center">
            @foreach ($data as $item)
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="service-item wow fade-in-bottom" data-wow-delay="200ms">
                        <div class="service-thumb-wrap">
                            <div class="service-thumb">
                                <img src="{{ $item['image_url'] }}" alt="course" />
                            </div>
                        </div>
                        <div class="service-content">
                            <h3 class="title text-center">
                                {{-- <a href="">{{ $item['name'] }}</a> --}}
                                {{ $item['name'] }}
                            </h3>
                            <p>
                                {{$item['summary']}}
                            </p>
                            {{-- <div style="display: flex; justify-content: end;">
                                <a href="{{ $item['slug'] }}" class="service-btn">View Details</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        .service-card {
            border: 1px solid #efefef;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .icon-wrapper {
            width: 80px;
            height: 80px;
            border: 2px solid #e9ecef;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #495057;
        }

        .check-badge {
            position: absolute;
            bottom: 0;
            right: 0;
            background: #fd7e14;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.8rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .text-info {
            color: #17a2b8 !important;
        }
    </style>
@endsection
