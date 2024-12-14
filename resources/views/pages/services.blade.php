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

    <div class="row g-4">
        <!-- Academic Tutions -->
        <div class="col-md-6 col-lg-4">
            <div class="service-card text-center p-4">
                <div class="icon-wrapper position-relative mb-4 mx-auto">
                    <i class="fas fa-book-reader"></i>
                    <span class="check-badge">
                        <i class="fas fa-check"></i>
                    </span>
                </div>
                <h3 class="h4 mb-3">Academic Tutions</h3>
                <p class="text-muted mb-0">Excel in your studies with expert guidance</p>
            </div>
        </div>

        <!-- Personal Growth -->
        <div class="col-md-6 col-lg-4">
            <div class="service-card text-center p-4">
                <div class="icon-wrapper position-relative mb-4 mx-auto">
                    <i class="fas fa-chart-line"></i>
                    <span class="check-badge">
                        <i class="fas fa-check"></i>
                    </span>
                </div>
                <h3 class="h4 mb-3">Personal Growth</h3>
                <p class="text-muted mb-0">Unlock your true potential and confidence</p>
            </div>
        </div>

        <!-- Coding Classes -->
        <div class="col-md-6 col-lg-4">
            <div class="service-card text-center p-4">
                <div class="icon-wrapper position-relative mb-4 mx-auto">
                    <i class="fas fa-code"></i>
                    <span class="check-badge">
                        <i class="fas fa-check"></i>
                    </span>
                </div>
                <h3 class="h4 mb-3">Coding Classes</h3>
                <p class="text-muted mb-0">Learn coding skills that shape the future</p>
            </div>
        </div>

        <!-- Edu. Consultancy -->
        <div class="col-md-6 col-lg-4">
            <div class="service-card text-center p-4">
                <div class="icon-wrapper position-relative mb-4 mx-auto">
                    <i class="fas fa-globe"></i>
                    <span class="check-badge">
                        <i class="fas fa-check"></i>
                    </span>
                </div>
                <h3 class="h4 mb-3">Edu. Consultancy</h3>
                <p class="text-muted mb-0">Realize your dream of international education</p>
            </div>
        </div>

        <!-- Skill-based Training -->
        <div class="col-md-6 col-lg-4">
            <div class="service-card text-center p-4">
                <div class="icon-wrapper position-relative mb-4 mx-auto">
                    <i class="fas fa-lightbulb"></i>
                    <span class="check-badge">
                        <i class="fas fa-check"></i>
                    </span>
                </div>
                <h3 class="h4 mb-3">Skill-based Training</h3>
                <p class="text-muted mb-0">Gain practical expertise for today's job market</p>
            </div>
        </div>

        <!-- Language Training -->
        <div class="col-md-6 col-lg-4">
            <div class="service-card text-center p-4">
                <div class="icon-wrapper position-relative mb-4 mx-auto">
                    <i class="fas fa-language"></i>
                    <span class="check-badge">
                        <i class="fas fa-check"></i>
                    </span>
                </div>
                <h3 class="h4 mb-3">Language Training</h3>
                <p class="text-muted mb-0">Master global languages to expand your opportunities</p>
            </div>
        </div>
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