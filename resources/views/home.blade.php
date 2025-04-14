@extends('layouts.app')

@section('title', 'E-Portal - Digital Marketing Solutions')

@section('content')
<!-- Hero Section -->
<div class="hero-section position-relative overflow-hidden">
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="col-lg-6">
                <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInUp">Transform Your Digital Presence</h1>
                <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">We help businesses grow through innovative digital marketing solutions and cutting-edge technology.</p>
                <div class="d-flex gap-3 animate__animated animate__fadeInUp animate__delay-2s">
                    <a href="#services" class="btn btn-primary btn-lg px-4">Our Services</a>
                    <a href="#contact" class="btn btn-outline-primary btn-lg px-4">Get Started</a>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <div class="hero-image animate__animated animate__fadeIn animate__delay-1s">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&h=600&q=80" 
                         alt="Digital Marketing" 
                         class="img-fluid rounded-4 shadow-lg">
                </div>
            </div>
        </div>
    </div>
    <div class="hero-shape"></div>
</div>

<!-- Services Section -->
<section id="services" class="py-5">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-4">Our Services</h2>
                <p class="lead text-muted">Comprehensive digital solutions for your business growth</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4">
                        <div class="icon-box mb-4">
                            <i class="fas fa-search fa-2x text-primary"></i>
                        </div>
                        <h3 class="h4 mb-3">SEO Optimization</h3>
                        <p class="text-muted">Improve your search engine rankings and drive organic traffic to your website.</p>
                        <a href="#" class="btn btn-link text-primary p-0">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4">
                        <div class="icon-box mb-4">
                            <i class="fas fa-bullhorn fa-2x text-primary"></i>
                        </div>
                        <h3 class="h4 mb-3">Social Media Marketing</h3>
                        <p class="text-muted">Engage with your audience and build brand awareness across social platforms.</p>
                        <a href="#" class="btn btn-link text-primary p-0">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4">
                        <div class="icon-box mb-4">
                            <i class="fas fa-paint-brush fa-2x text-primary"></i>
                        </div>
                        <h3 class="h4 mb-3">Content Creation</h3>
                        <p class="text-muted">Create compelling content that resonates with your target audience.</p>
                        <a href="#" class="btn btn-link text-primary p-0">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&h=600&q=80" 
                     alt="Features" 
                     class="img-fluid rounded-4 shadow-lg">
            </div>
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold mb-4">Why Choose Us?</h2>
                <div class="d-flex align-items-start mb-4">
                    <div class="icon-box me-3">
                        <i class="fas fa-check fa-2x text-primary"></i>
                    </div>
                    <div>
                        <h3 class="h5 mb-1">Expert Team</h3>
                        <p class="text-muted mb-0">Our team consists of industry experts with years of experience.</p>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-4">
                    <div class="icon-box me-3">
                        <i class="fas fa-check fa-2x text-primary"></i>
                    </div>
                    <div>
                        <h3 class="h5 mb-1">Custom Solutions</h3>
                        <p class="text-muted mb-0">Tailored strategies to meet your specific business needs.</p>
                    </div>
                </div>
                <div class="d-flex align-items-start">
                    <div class="icon-box me-3">
                        <i class="fas fa-check fa-2x text-primary"></i>
                    </div>
                    <div>
                        <h3 class="h5 mb-1">Proven Results</h3>
                        <p class="text-muted mb-0">Track record of delivering measurable results for our clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-4">What Our Clients Say</h2>
                <p class="lead text-muted">Success stories from businesses we've helped grow</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80" 
                                 alt="Client" 
                                 class="rounded-circle me-3" 
                                 width="60">
                            <div>
                                <h4 class="h6 mb-1">John Smith</h4>
                                <p class="text-muted mb-0">CEO, TechStart</p>
                            </div>
                        </div>
                        <p class="card-text">"E-Portal transformed our online presence. Their expertise in digital marketing helped us achieve remarkable growth."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80" 
                                 alt="Client" 
                                 class="rounded-circle me-3" 
                                 width="60">
                            <div>
                                <h4 class="h6 mb-1">Sarah Johnson</h4>
                                <p class="text-muted mb-0">Marketing Director, GrowthCo</p>
                            </div>
                        </div>
                        <p class="card-text">"The team at E-Portal delivered exceptional results. Their strategic approach and attention to detail made all the difference."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80" 
                                 alt="Client" 
                                 class="rounded-circle me-3" 
                                 width="60">
                            <div>
                                <h4 class="h6 mb-1">Michael Brown</h4>
                                <p class="text-muted mb-0">Founder, InnovateX</p>
                            </div>
                        </div>
                        <p class="card-text">"Working with E-Portal has been a game-changer for our business. Their expertise and dedication are unmatched."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section id="contact" class="py-5" style="background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-4" style="color: #1a365d;">Ready to Grow Your Business?</h2>
                <p class="lead mb-5" style="color: #2c5282;">Let's discuss how we can help you achieve your digital marketing goals.</p>
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg px-4">Get in Touch</a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<style>
    .hero-section {
        background: linear-gradient(135deg, #1a365d 0%, #2c5282 100%);
        min-height: 100vh;
        padding-top: 80px;
        color: #f8f9fa;
    }

    .hero-section h1 {
        color: #f0f4f8;
    }

    .hero-section .lead {
        color: #e9ecef;
    }

    .hero-shape {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 200px;
        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23f0f4f8' fill-opacity='1' d='M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
        background-size: cover;
        background-position: center;
    }

    .icon-box {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(79, 70, 229, 0.1);
        border-radius: 15px;
        transition: all 0.3s ease;
    }

    .hover-card {
        transition: all 0.3s ease;
    }

    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }

    .hover-card:hover .icon-box {
        transform: translateY(-5px);
        background: rgba(79, 70, 229, 0.2);
    }

    .hero-image {
        position: relative;
    }

    .hero-image::before {
        content: '';
        position: absolute;
        top: -20px;
        right: -20px;
        width: 100%;
        height: 100%;
        border: 2px solid rgba(79, 70, 229, 0.2);
        border-radius: 1rem;
        z-index: -1;
    }

    .card .text-muted {
        color: #6c757d !important;
    }

    .card h3 {
        color: #343a40;
    }

    .bg-light .text-muted {
        color: #6c757d !important;
    }

    .bg-light h2 {
        color: #343a40;
    }
</style>
@endpush 