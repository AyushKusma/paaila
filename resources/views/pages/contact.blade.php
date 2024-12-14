@extends('layouts.app')

@section('content')

<x-banner title="Contact Us" subtitle="" />

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 mb-40">
            <div style="margin-bottom: 0;" class="section-heading">
                <x-section_chip title="Contact Us" />
            </div>
            <div class="row g-4">
                <!-- Contact Form -->
                <div class="col-lg-7">
                    <form action="" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" class="form-control form-control-lg rounded-4" id="firstName"
                                    name="firstName" placeholder="First name">
                            </div>
                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" class="form-control form-control-lg rounded-4" id="lastName"
                                    name="lastName" placeholder="Last name">
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control form-control-lg rounded-4" id="email"
                                    name="email" placeholder="you@gmail.com">
                            </div>
                            <div class="col-12">
                                <label for="phone" class="form-label">Phone number</label>
                                <input type="tel" class="form-control form-control-lg rounded-4" id="phone" name="phone"
                                    placeholder="+977 ">
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control form-control-lg rounded-4" id="message" name="message"
                                    rows="4" placeholder="Leave us a message..."></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-dark btn-lg w-100 rounded-4">Send
                                    message</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-5">
                    <div class="ps-lg-4">
                        <div class="mb-5">
                            <h2 class="h4 mb-3 text-black">Chat with us</h2>
                            <p class="text-muted mb-3">Speak to our friendly team via live chat.</p>
                            <div class="d-grid gap-2">
                                <div style="width: fit-content;">
                                    <a target="_blank" href="#" class="text-decoration-none d-flex align-items-center">
                                        <i class="fas fa-comments me-2"></i>
                                        Start a live chat
                                    </a>
                                </div>
                                <div style="width: fit-content;">
                                    <a target="_blank" href="mailto:hello@paaila.edu.np"
                                        class="text-decoration-none d-flex align-items-center">
                                        <i class="fas fa-envelope me-2"></i>
                                        Shoot us an email
                                    </a>
                                </div>
                                <div style="width: fit-content;">
                                    <a target="_blank" href="https://facebook.com/"
                                        class="text-decoration-none d-flex align-items-center">
                                        <i class="fab fa-facebook me-2"></i>
                                        Message us on facebook
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h2 class="h4 mb-3 text-black">Call us</h2>
                            <p class="text-muted mb-3">Call our team Mon-Fri from 8am to 5pm.</p>
                            <div style="width: fit-content;">
                                <a target="_blank" href="tel:+977-9851326399"
                                    class="text-decoration-none d-flex align-items-center">
                                    <i class="fas fa-phone me-2"></i>
                                    +977-9851326399
                                </a>
                            </div>
                        </div>

                        <div>
                            <h2 class="h4 mb-3 text-black">Visit us</h2>
                            <p class="text-muted mb-3">Chat to us in person at our Melbourne HQ.</p>
                            <div style="width: fit-content;">
                                <a target="_blank" href="https://maps.app.goo.gl/8acxLSxF8eKDGjR1A"
                                    class="text-decoration-none d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt me-2"></i>
                                    H8XF+CG Chapagaun, Lalitpur
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4161.973735460282!2d85.32123601163603!3d27.598610776146042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb17edff52b32b%3A0x8a2c4799fd960100!2sPaaila%20Institute%20%26%20Consultancy!5e1!3m2!1sen!2snp!4v1734159865172!5m2!1sen!2snp"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="mb-60"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

@endsection