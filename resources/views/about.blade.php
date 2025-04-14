@extends('layouts.app')

@section('title', 'About Us - E-Portal Marketing Solutions')

@section('content')
<!-- Hero Section -->
<div class="about-hero position-relative overflow-hidden">
    <div class="container">
        <div class="row min-vh-50 align-items-center">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold mb-4 animate__animated animate__fadeInUp">About E-Portal</h1>
                <p class="lead text-muted animate__animated animate__fadeInUp animate__delay-1s">Transforming businesses through innovative digital solutions</p>
            </div>
        </div>
    </div>
    <div class="hero-shape"></div>
</div>

<!-- Mission Section -->
<div class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&h=600&q=80" 
                     alt="Our Mission" 
                     class="img-fluid rounded-4 shadow-lg">
            </div>
            <div class="col-md-6">
                <h2 class="display-5 fw-bold mb-4">Our Mission</h2>
                <p class="lead text-muted mb-4">To empower businesses with cutting-edge digital marketing solutions that drive growth and success.</p>
                <div class="d-flex align-items-center mb-4">
                    <div class="icon-box me-3">
                        <i class="fas fa-bullseye fa-2x text-primary"></i>
                    </div>
                    <div>
                        <h3 class="h5 mb-1">Strategic Approach</h3>
                        <p class="text-muted mb-0">Data-driven strategies for measurable results</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="icon-box me-3">
                        <i class="fas fa-lightbulb fa-2x text-primary"></i>
                    </div>
                    <div>
                        <h3 class="h5 mb-1">Innovation</h3>
                        <p class="text-muted mb-0">Staying ahead with the latest digital trends</p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="icon-box me-3">
                        <i class="fas fa-handshake fa-2x text-primary"></i>
                    </div>
                    <div>
                        <h3 class="h5 mb-1">Partnership</h3>
                        <p class="text-muted mb-0">Building long-term relationships with clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Values Section -->
<div class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-4">Our Core Values</h2>
                <p class="lead text-muted">The principles that guide everything we do</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0">
                    <div class="card-body p-4 text-center">
                        <div class="icon-box mb-4">
                            <i class="fas fa-star fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title h4">Excellence</h3>
                        <p class="card-text text-muted">We strive for excellence in every project, delivering the highest quality results.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0">
                    <div class="card-body p-4 text-center">
                        <div class="icon-box mb-4">
                            <i class="fas fa-users fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title h4">Collaboration</h3>
                        <p class="card-text text-muted">We believe in the power of teamwork and open communication.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0">
                    <div class="card-body p-4 text-center">
                        <div class="icon-box mb-4">
                            <i class="fas fa-chart-line fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title h4">Growth</h3>
                        <p class="card-text text-muted">We're committed to continuous learning and improvement.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-4">Meet Our Team</h2>
                <p class="lead text-muted">The talented individuals behind our success</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&h=400&q=80" 
                             class="card-img-top" 
                             alt="Team Member">
                        <div class="social-links position-absolute bottom-0 start-0 w-100 p-3 bg-gradient-to-top">
                            <a href="#" class="text-white me-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="card-title h5 mb-1">John Doe</h3>
                        <p class="text-muted mb-3">CEO & Founder</p>
                        <p class="card-text text-muted">Visionary leader with 15+ years of experience in digital marketing.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&h=400&q=80" 
                             class="card-img-top" 
                             alt="Team Member">
                        <div class="social-links position-absolute bottom-0 start-0 w-100 p-3 bg-gradient-to-top">
                            <a href="#" class="text-white me-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="card-title h5 mb-1">Jane Smith</h3>
                        <p class="text-muted mb-3">Marketing Director</p>
                        <p class="card-text text-muted">Expert in digital strategy and campaign management.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&h=400&q=80" 
                             class="card-img-top" 
                             alt="Team Member">
                        <div class="social-links position-absolute bottom-0 start-0 w-100 p-3 bg-gradient-to-top">
                            <a href="#" class="text-white me-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="card-title h5 mb-1">Mike Johnson</h3>
                        <p class="text-muted mb-3">Creative Director</p>
                        <p class="card-text text-muted">Passionate about creating engaging digital experiences.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Stats Section -->
<div class="py-5" style="background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 mb-4 mb-md-0">
                <div class="display-4 fw-bold mb-2" style="color: #1a365d;">500+</div>
                <p class="mb-0" style="color: #2c5282;">Happy Clients</p>
            </div>
            <div class="col-md-3 mb-4 mb-md-0">
                <div class="display-4 fw-bold mb-2" style="color: #1a365d;">1000+</div>
                <p class="mb-0" style="color: #2c5282;">Projects Completed</p>
            </div>
            <div class="col-md-3 mb-4 mb-md-0">
                <div class="display-4 fw-bold mb-2" style="color: #1a365d;">50+</div>
                <p class="mb-0" style="color: #2c5282;">Team Members</p>
            </div>
            <div class="col-md-3">
                <div class="display-4 fw-bold mb-2" style="color: #1a365d;">10+</div>
                <p class="mb-0" style="color: #2c5282;">Years Experience</p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<style>
    .about-hero {
        background: linear-gradient(135deg, #2d3748 0%, #4a5568 100%);
        min-height: 50vh;
        padding-top: 80px;
        color: #f8f9fa;
    }

    .about-hero h1 {
        color: #f0f4f8;
    }

    .about-hero .lead {
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

    .card:hover .icon-box {
        transform: translateY(-5px);
        background: rgba(79, 70, 229, 0.2);
    }

    .bg-gradient-to-top {
        background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
    }

    .social-links a {
        opacity: 0.8;
        transition: all 0.3s ease;
    }

    .social-links a:hover {
        opacity: 1;
        transform: translateY(-2px);
    }

    .card-img-top {
        height: 300px;
        object-fit: cover;
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
        color: #f0f4f8 !important;
    }
</style>
@endpush 