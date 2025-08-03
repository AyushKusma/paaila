@extends('layouts.app')

@section('content')

    <x-banner title="Our Courses" subtitle="Explore All The Courses" />

    <section class="feature-course bg-white pt-60 pb-120">
        <div class="container">
            <div style="margin-bottom: 0;" class="section-heading">
                <x-section_chip title="Our Courses" />
            </div>
            <div class="row gy-4 justify-content-center">
                @forelse ($courses as $index => $course)
                    <x-course_card :course="$course" :index="$index" />
                @empty
                    <div class="col-12 text-center">
                        <p>No courses found.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
