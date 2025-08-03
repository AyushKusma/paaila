@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Professional CSS Variables */
        :root {
            /* Neutral Professional Colors */
            --color-white: #ffffff;
            --color-black: #000000;
            --color-gray-50: #fafafa;
            --color-gray-100: #f5f5f5;
            --color-gray-200: #e5e5e5;
            --color-gray-300: #d4d4d4;
            --color-gray-400: #a3a3a3;
            --color-gray-500: #737373;
            --color-gray-600: #525252;
            --color-gray-700: #404040;
            --color-gray-800: #262626;
            --color-gray-900: #171717;

            /* Professional Accent */
            --color-primary: #1f2937;
            --color-primary-light: #374151;
            --color-success: #16a34a;
            --color-error: #dc2626;
            --color-warning: #ca8a04;

            /* Typography */
            --font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;

            /* Spacing */
            --space-1: 0.25rem;
            --space-2: 0.5rem;
            --space-3: 0.75rem;
            --space-4: 1rem;
            --space-5: 1.25rem;
            --space-6: 1.5rem;
            --space-8: 2rem;
            --space-10: 2.5rem;
            --space-12: 3rem;

            /* Border Radius */
            --radius-sm: 0.25rem;
            --radius: 0.375rem;
            --radius-md: 0.5rem;
            --radius-lg: 0.75rem;
            --radius-xl: 1rem;

            /* Shadows */
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        /* Reset and Base Styles */
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-family);
            line-height: 1.6;
            color: var(--color-gray-800);
            background-color: var(--color-gray-50);
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 var(--space-4);
        }

        /* Main Section */
        .consultancy-details {
            padding: var(--space-12) 0;
            min-height: 100vh;
        }

        /* Content Layout */
        .content-wrapper {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: var(--space-10);
            margin-top: var(--space-8);
            align-items: start;
        }

        @media (max-width: 1024px) {
            .content-wrapper {
                grid-template-columns: 1fr;
                gap: var(--space-8);
            }
        }

        /* Main Content Card */
        .consultancy-card {
            background: var(--color-white);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow);
            overflow: hidden;
            border: 1px solid var(--color-gray-200);
        }

        .consultancy-hero {
            height: 300px;
            overflow: hidden;
            background-color: var(--color-gray-100);
        }

        .consultancy-hero img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .consultancy-content {
            padding: var(--space-8);
        }

        .consultancy-title {
            font-size: 2.25rem;
            font-weight: 700;
            color: var(--color-gray-900);
            margin-bottom: var(--space-6);
            line-height: 1.2;
        }

        .consultancy-meta {
            display: flex;
            flex-wrap: wrap;
            gap: var(--space-6);
            margin-bottom: var(--space-8);
            padding-bottom: var(--space-6);
            border-bottom: 1px solid var(--color-gray-200);
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: var(--space-2);
            color: var(--color-gray-600);
            font-size: 0.875rem;
            font-weight: 500;
        }

        .meta-item i {
            color: var(--color-gray-700);
            width: 16px;
            text-align: center;
        }

        .description-section {
            margin-top: var(--space-8);
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--color-gray-900);
            margin-bottom: var(--space-6);
            padding-bottom: var(--space-3);
            border-bottom: 2px solid var(--color-gray-900);
            display: inline-block;
        }

        .description-content {
            color: var(--color-gray-700);
            font-size: 1rem;
            line-height: 1.7;
        }

        .description-content p {
            margin-bottom: var(--space-4);
        }

        /* Sidebar */
        .sidebar {
            display: flex;
            flex-direction: column;
            gap: var(--space-6);
            height: 100%;
        }

        /* Contact Form Card - Simplified and Professional */
        .contact-card {
            background: var(--color-white);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow);
            border: 1px solid var(--color-gray-200);
            position: sticky;
            top: 10rem;
        }

        .contact-header {
            padding: var(--space-6);
            border-bottom: 1px solid var(--color-gray-200);
            background: var(--color-gray-50);
        }

        .contact-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--color-gray-900);
            margin-bottom: var(--space-2);
        }

        .contact-subtitle {
            font-size: 0.875rem;
            color: var(--color-gray-600);
            line-height: 1.5;
        }

        .contact-form {
            padding: var(--space-6);
        }

        /* Simple Professional Form Styling */
        .form-group {
            margin-bottom: var(--space-5);
        }

        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--color-gray-700);
            margin-bottom: var(--space-2);
        }

        .form-input {
            width: 100%;
            padding: var(--space-3) var(--space-4);
            border: 1px solid var(--color-gray-300);
            border-radius: var(--radius);
            font-size: 0.875rem;
            color: var(--color-gray-900);
            background-color: var(--color-white);
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
            font-family: inherit;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--color-gray-900);
            box-shadow: 0 0 0 1px var(--color-gray-900);
        }

        .form-input::placeholder {
            color: var(--color-gray-400);
        }

        .form-textarea {
            resize: vertical;
            min-height: 100px;
            line-height: 1.5;
        }

        /* Error Styling */
        .form-input.error {
            border-color: var(--color-error);
        }

        .form-input.error:focus {
            border-color: var(--color-error);
            box-shadow: 0 0 0 1px var(--color-error);
        }

        .error-message {
            color: var(--color-error);
            font-size: 0.75rem;
            margin-top: var(--space-1);
            display: block;
        }

        /* Success Styling */
        .form-input.success {
            border-color: var(--color-success);
        }

        /* Simple Professional Button */
        .submit-button {
            width: 100%;
            padding: var(--space-3) var(--space-4);
            background: var(--color-gray-900);
            color: var(--color-white);
            font-size: 0.875rem;
            font-weight: 500;
            border: none;
            border-radius: var(--radius);
            cursor: pointer;
            transition: background-color 0.2s ease, transform 0.1s ease;
            font-family: inherit;
            letter-spacing: 0.025em;
        }

        .submit-button:hover {
            background: var(--color-gray-800);
        }

        .submit-button:active {
            transform: translateY(1px);
        }

        .submit-button:disabled {
            background: var(--color-gray-400);
            cursor: not-allowed;
            transform: none;
        }

        .submit-button:focus {
            outline: 2px solid var(--color-gray-900);
            outline-offset: 2px;
        }

        /* Service Info Card */
        .service-info-card {
            background: var(--color-white);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow);
            border: 1px solid var(--color-gray-200);
            padding: var(--space-6);
        }

        .service-info-title {
            font-size: 1rem;
            font-weight: 600;
            color: var(--color-gray-900);
            margin-bottom: var(--space-4);
            padding-bottom: var(--space-3);
            border-bottom: 1px solid var(--color-gray-200);
        }

        .service-info-list {
            list-style: none;
        }

        .service-info-item {
            display: flex;
            align-items: flex-start;
            gap: var(--space-3);
            padding: var(--space-2) 0;
            color: var(--color-gray-700);
            font-size: 0.875rem;
            line-height: 1.5;
        }

        .service-info-item i {
            color: var(--color-success);
            font-size: 0.75rem;
            margin-top: 0.125rem;
            width: 12px;
            text-align: center;
        }

        /* Share Section */
        .share-section {
            margin-top: var(--space-5);
            padding-top: var(--space-5);
            border-top: 1px solid var(--color-gray-200);
        }

        .share-button {
            width: 100%;
            padding: var(--space-2) var(--space-4);
            background: var(--color-gray-100);
            color: var(--color-gray-700);
            font-size: 0.75rem;
            font-weight: 500;
            border: 1px solid var(--color-gray-300);
            border-radius: var(--radius);
            cursor: pointer;
            transition: background-color 0.2s ease;
            font-family: inherit;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .share-button:hover {
            background: var(--color-gray-200);
        }

        .share-button:focus {
            outline: 2px solid var(--color-gray-900);
            outline-offset: 2px;
        }

        /* Required Field Indicator */
        .required::after {
            content: " *";
            color: var(--color-error);
        }

        /* Form Progress Indicator */
        .form-progress {
            height: 2px;
            background: var(--color-gray-200);
            border-radius: var(--radius-sm);
            margin-bottom: var(--space-6);
            overflow: hidden;
        }

        .form-progress-bar {
            height: 100%;
            background: var(--color-gray-900);
            width: 0%;
            transition: width 0.3s ease;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .consultancy-details {
                padding: var(--space-8) 0;
            }

            .consultancy-title {
                font-size: 1.875rem;
            }

            .consultancy-meta {
                flex-direction: column;
                gap: var(--space-3);
            }

            .contact-card {
                position: static;
            }

            .consultancy-content,
            .contact-form,
            .contact-header {
                padding: var(--space-5);
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 var(--space-3);
            }

            .consultancy-title {
                font-size: 1.5rem;
            }

            .consultancy-content,
            .contact-form,
            .contact-header {
                padding: var(--space-4);
            }
        }

        /* Loading State */
        .loading {
            position: relative;
            overflow: hidden;
        }

        .loading::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% {
                left: -100%;
            }

            100% {
                left: 100%;
            }
        }

        /* Print Styles */
        @media print {
            .sidebar {
                display: none;
            }

            .content-wrapper {
                grid-template-columns: 1fr;
            }

            .consultancy-card {
                box-shadow: none;
                border: 1px solid var(--color-gray-300);
            }
        }
    </style>
@endsection

@section('content')
    <x-banner title="{{ $consultancy->name }}" subtitle="{{ $consultancy->summary }}" />

    <section class="consultancy-details">
        <div class="container">
            <div class="content-wrapper">
                <!-- Main Content -->
                <div class="main-content">
                    <div class="consultancy-card">
                        <div class="consultancy-hero">
                            <img src="{{ $consultancy->image_url }}" alt="{{ $consultancy->name }}" loading="lazy">
                        </div>

                        <div class="consultancy-content">
                            <h1 class="consultancy-title">{{ $consultancy->name }}</h1>

                            <div class="consultancy-meta">
                                <div class="meta-item">
                                    <i class="fas fa-calendar-check"></i>
                                    <span>Available Now</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-clock"></i>
                                    <span>Flexible Schedule</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-shield-check"></i>
                                    <span>Verified Expert</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-headset"></i>
                                    <span>Full Support</span>
                                </div>
                            </div>

                            <div class="description-section">
                                <h2 class="section-title">Service Overview</h2>
                                <div class="description-content">
                                    {!! str()->sanitizeHtml($consultancy->description) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Contact Form -->
                    <div class="contact-card">
                        <div class="contact-header">
                            <h3 class="contact-title">Request Consultation</h3>
                            <p class="contact-subtitle">Fill out the form below and we'll get back to you within 24 hours.
                            </p>
                        </div>

                        <form class="contact-form" action="{{ route('contact.send') }}" method="POST">
                            @csrf

                            <input type="hidden" name="consultancy_id" value="{{ $consultancy->id }}">

                            <div class="form-group">
                                <label for="name" class="form-label required">Full Name</label>
                                <input type="text" id="name" name="name" class="form-input" required
                                    placeholder="John Doe" value="{{ old('name') }}" autocomplete="name">
                                @error('name')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" class="form-label required">Email Address</label>
                                <input type="email" id="email" name="email" class="form-input" required
                                    placeholder="john@company.com" value="{{ old('email') }}" autocomplete="email">
                                @error('email')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="form-input"
                                    placeholder="+1 (555) 123-4567" value="{{ old('phone') }}" autocomplete="tel">
                                @error('phone')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="submit-button" id="submitBtn">
                                Send Request
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
