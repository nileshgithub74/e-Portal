@extends('layouts.app')

@section('title', 'Contact Us - OptiMarket')

@section('content')
<!-- Hero Section -->
<div class="contact-hero position-relative overflow-hidden" id="contact-us">
    <div class="container">
        <div class="row min-vh-50 align-items-center">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold mb-4 animate__animated animate__fadeInUp">Contact Us</h1>
                <p class="lead text-white mb-0 animate__animated animate__fadeInUp animate__delay-1s">We'd Love to Hear From You!</p>
                <p class="lead-sub text-white-50 mb-0 animate__animated animate__fadeInUp animate__delay-2s">Have a question, need support, or just want to learn more about how OptiMarket can help your business grow? We're here to help! Whether you're exploring our platform or already part of the OptiMarket community, our team is ready to connect with you.</p>
            </div>
        </div>
    </div>
    <div class="hero-shape"></div>
</div>

<!-- Extended Description -->
<div class="description-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center">
                    <p class="lead mb-4">From setting up your first campaign to troubleshooting technical issues, our dedicated support team is here to assist you every step of the way. We also love hearing your feedback, suggestions, or even just a quick hello—your input helps us grow and serve you better.</p>
                    <p class="lead mb-4">Need something specific? We offer tailored consultations to help you find the best solutions within our platform to meet your business goals. Whether it's strategy advice, feature walkthroughs, or partnership inquiries—don't hesitate to reach out.</p>
                    <p class="lead fw-bold">Let's start a conversation. Because at OptiMarket, your success is our story.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row g-4">
        <!-- Contact Information Cards -->
        <div class="col-lg-4">
            <!-- Get in Touch Card -->
            <div class="card contact-card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="contact-icon mb-4">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3 class="h4 mb-4">Get in Touch</h3>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3">
                            <strong>Email:</strong><br>
                            <a href="mailto:support@optimarket.com" class="text-decoration-none">support@optimarket.com</a>
                        </li>
                        <li class="mb-3">
                            <strong>Phone:</strong><br>
                            <a href="tel:+91XXXXXXXXXX" class="text-decoration-none">+91-94632744</a>
                        </li>
                        <li>
                            <strong>Business Hours:</strong><br>
                            Monday - Saturday<br>
                            10:00 AM - 6:00 PM
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Visit Us Card -->
        <div class="col-lg-4">
            <div class="card contact-card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="contact-icon mb-4">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="h4 mb-4"> Visit Us</h3>
                    <address class="mb-0">
                        <strong>OptiMarket HQ</strong><br>
                        123 Innovation Avenue,<br>
                        Tech Park, Mumbai,<br>
                        Maharashtra - 400001<br>
                        India
                    </address>
                </div>
            </div>
        </div>

        <!-- Let's Collaborate Card -->
        <div class="col-lg-4">
            <div class="card contact-card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="contact-icon mb-4">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="h4 mb-4"> Let's Collaborate</h3>
                    <p>Looking for partnership opportunities or custom solutions for your business?</p>
                    <p>Reach out to us directly at:<br>
                    <a href="mailto:partnerships@optimarket.com" class="text-decoration-none">partnerships@optimarket.com</a></p>
                    <p class="mb-0">We're always open to new ideas and meaningful collaborations.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form Section -->
    <div class="row justify-content-center mt-5">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="h4 mb-4 text-center">💬 Drop Us a Message</h3>
                    <p class="text-center mb-4">Fill out the form below and we'll get back to you as soon as possible. We aim to respond within 24 hours.</p>
                    
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" name="message" placeholder="Your Message" style="height: 150px" required></textarea>
                                    <label for="message">Your Message</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Closing Message -->
    <div class="row justify-content-center mt-5">
        <div class="col-lg-8 text-center">
            <p class="lead mb-0">Your growth is our priority. Let's create something amazing together.</p>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<style>
    .contact-hero {
        background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
        min-height: 50vh;
        padding-top: 80px;
        color: #f8f9fa;
        position: relative;
    }

    .hero-shape {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 200px;
        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23ffffff' fill-opacity='1' d='M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
        background-size: cover;
        background-position: center;
    }

    .contact-hero h1 {
        color: #ffffff;
    }

    .contact-hero .lead {
        color: #e9ecef;
    }

    .lead-sub {
        font-size: 1.1rem;
        opacity: 0.9;
        max-width: 800px;
        margin: 1.5rem auto 0;
    }

    .min-vh-50 {
        min-height: 50vh;
    }

    .contact-card {
        transition: all 0.3s ease;
        border-radius: 15px;
    }

    .contact-card:hover {
        transform: translateY(-5px);
    }

    .contact-icon {
        width: 60px;
        height: 60px;
        background: rgba(79, 70, 229, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: #4f46e5;
        margin-bottom: 1.5rem;
    }

    .form-floating > .form-control {
        border-radius: 10px;
        border: 1px solid #e5e7eb;
    }

    .form-floating > .form-control:focus {
        border-color: #4f46e5;
        box-shadow: 0 0 0 0.25rem rgba(79, 70, 229, 0.25);
    }

    .btn-primary {
        background: linear-gradient(135deg,rgb(58, 74, 200) 0%,rgb(15, 111, 180) 100%);
        border: none;
        border-radius: 10px;
        padding: 12px 30px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(79, 70, 229, 0.3);
    }

    a {
        color: #4f46e5;
    }

    a:hover {
        color: #7c3aed;
    }
</style>
@endpush 