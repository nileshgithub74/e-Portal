@extends('layouts.app')

@section('title', 'Our Services - E-Portal Marketing Solutions')

@section('content')
<!-- Hero Section -->
<div class="services-hero position-relative overflow-hidden">
    <div class="container">
        <div class="row min-vh-50 align-items-center">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold mb-4 animate__animated animate__fadeInUp">Our Services</h1>
                <p class="lead text-muted animate__animated animate__fadeInUp animate__delay-1s">Comprehensive digital marketing solutions tailored to your business needs</p>
            </div>
        </div>
    </div>
    <div class="hero-shape"></div>
</div>

<!-- Main Services Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <!-- SEO Service -->
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="service-icon d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-search fa-3x text-primary"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="h4 mb-3">SEO Optimization</h3>
                                <p class="text-muted mb-4">Improve your search engine rankings and drive organic traffic to your website through comprehensive SEO strategies.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Keyword Research</li>
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>On-Page Optimization</li>
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Technical SEO</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Content Strategy</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social Media Service -->
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="service-icon d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-share-alt fa-3x text-primary"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="h4 mb-3">Social Media Marketing</h3>
                                <p class="text-muted mb-4">Build and maintain a strong social media presence across platforms to engage with your audience.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Content Creation</li>
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Community Management</li>
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Paid Advertising</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Analytics & Reporting</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Marketing Service -->
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="service-icon d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-pen-fancy fa-3x text-primary"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="h4 mb-3">Content Marketing</h3>
                                <p class="text-muted mb-4">Create compelling content that resonates with your target audience and drives engagement.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Blog Writing</li>
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Video Production</li>
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Infographics</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Email Marketing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Web Development Service -->
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="service-icon d-flex align-items-center justify-content-center h-100">
                                <i class="fas fa-code fa-3x text-primary"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="h4 mb-3">Web Development</h3>
                                <p class="text-muted mb-4">Create stunning, responsive websites that provide an exceptional user experience.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Custom Development</li>
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>E-commerce Solutions</li>
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Mobile Responsiveness</li>
                                    <li><i class="fas fa-check text-primary me-2"></i>Performance Optimization</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-4">Our Process</h2>
                <p class="lead text-muted">How we work to deliver exceptional results</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="process-step text-center">
                    <div class="step-number">1</div>
                    <h3 class="h5 mb-3">Discovery</h3>
                    <p class="text-muted">We analyze your business goals and target audience to create a tailored strategy.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="process-step text-center">
                    <div class="step-number">2</div>
                    <h3 class="h5 mb-3">Planning</h3>
                    <p class="text-muted">We develop a detailed plan with clear objectives and measurable outcomes.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="process-step text-center">
                    <div class="step-number">3</div>
                    <h3 class="h5 mb-3">Execution</h3>
                    <p class="text-muted">We implement the strategy with precision and attention to detail.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="process-step text-center">
                    <div class="step-number">4</div>
                    <h3 class="h5 mb-3">Optimization</h3>
                    <p class="text-muted">We continuously monitor and optimize for better results.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5" style="background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-4" style="color: #1a365d;">Ready to Get Started?</h2>
                <p class="lead mb-5" style="color: #2c5282;">Let's discuss how we can help you achieve your digital marketing goals.</p>
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg px-4">Contact Us</a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<style>
    .services-hero {
        background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
        min-height: 50vh;
        padding-top: 80px;
        color: #f8f9fa;
    }

    .services-hero h1 {
        color: #ffffff;
    }

    .services-hero .lead {
        color: #e9ecef;
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

    .service-icon {
        background: rgba(79, 70, 229, 0.1);
        transition: all 0.3s ease;
    }

    .hover-card {
        transition: all 0.3s ease;
    }

    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }

    .hover-card:hover .service-icon {
        background: rgba(79, 70, 229, 0.2);
        transform: scale(1.1);
    }

    .step-number {
        width: 50px;
        height: 50px;
        background: var(--primary-color);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        font-size: 1.5rem;
        font-weight: bold;
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

    .bg-primary .text-white {
        color: #ffffff !important;
    }
</style>
@endpush 