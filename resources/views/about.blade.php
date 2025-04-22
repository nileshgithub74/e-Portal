@extends('layouts.app')

@section('title', 'About Us - OptiMarket')

@section('content')
<!-- Hero Section -->
<div class="about-hero position-relative overflow-hidden" id="about-us">
    <div class="container">
        <div class="row min-vh-50 align-items-center">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold mb-4 animate__animated animate__fadeInUp">About Us</h1>
                <p class="lead text-muted animate__animated animate__fadeInUp animate__delay-1s">At OptiMarket, we understand that in today's dynamic digital landscape, businesses need more than just online presence—they need purposeful, data-driven marketing that delivers real results.</p>
            </div>
        </div>
    </div>
    <div class="hero-shape"></div>
</div>

<!-- Introduction Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <p class="lead mb-4">At OptiMarket, we understand that in today's dynamic digital landscape, businesses need more than just online presence—they need purposeful, data-driven marketing that delivers real results. We're here to bridge that gap. Our platform offers a strategic, scalable approach to marketing, combining creativity with cutting-edge technology to help brands not only reach their audience but truly connect with them.
<br><br>
OptiMarket is more than just a tool—it's a complete marketing ecosystem designed to simplify your workflow and amplify your impact. From campaign planning and content management to performance analytics and personalized support, we bring everything together in one intuitive portal. Whether you're just starting your journey or ready to scale to new heights, OptiMarket is your trusted partner every step of the way.</p>
            </div>
        </div>
    </div>
</section>

<!-- Who We Are Section -->
<section class="py-5" style="background-color: #ffffff;" id="who-we-are">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="position-relative">
                    <img src="{{ asset('images/seo-illustration.png') }}"
                         alt="SEO and Digital Marketing Illustration" 
                         class="img-fluid rounded-4 shadow-sm"
                         loading="lazy"
                         style="width: 100%; height: 600px; object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold mb-4">🌟 Who We Are</h2>
                <p class="lead mb-4">OptiMarket was founded with a simple yet powerful vision: to make intelligent, results-driven marketing accessible to everyone.
                Our platform brings together the best of digital strategy, automation, analytics, and creative tools—curated to simplify how businesses market themselves online.<br>
              <br>  We are a passionate team of marketers, developers, designers, and data enthusiasts who saw the challenges many businesses face in the ever-evolving digital landscape. Fragmented tools, complicated strategies, and inconsistent results? We've experienced it—and we've solved it.</p>
            </div>
        </div>
    </div>
</section>

<!-- What We Do Section -->
<section class="py-5" id="what-we-do">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-4">💼 What We Do</h2>
                <p class="lead">OptiMarket is a comprehensive marketing e-portal offering an integrated suite of tools and services. We are here to eliminate guesswork, reduce complexity, and deliver performance.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4">
                        <div class="service-icon mb-4">
                            <i class="fas fa-search-location fa-2x text-primary"></i>
                        </div>
                        <h3 class="h5 mb-3">Plan & Strategize</h3>
                        <p class="text-muted">Define goals, build campaigns, and set marketing roadmaps with expert assistance.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4">
                        <div class="service-icon mb-4">
                            <i class="fas fa-bullhorn fa-2x text-primary"></i>
                        </div>
                        <h3 class="h5 mb-3">Promote & Advertise</h3>
                        <p class="text-muted">Run targeted ad campaigns across platforms like Google, Facebook, Instagram, and more.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4">
                        <div class="service-icon mb-4">
                            <i class="fas fa-pen-fancy fa-2x text-primary"></i>
                        </div>
                        <h3 class="h5 mb-3">Create & Manage Content</h3>
                        <p class="text-muted">Design engaging visuals, write compelling copy, and schedule posts from one dashboard.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4">
                        <div class="service-icon mb-4">
                            <i class="fas fa-chart-line fa-2x text-primary"></i>
                        </div>
                        <h3 class="h5 mb-3">Analyze & Optimize</h3>
                        <p class="text-muted">Get detailed insights, track performance metrics, and adjust strategies for maximum ROI.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4">
                        <div class="service-icon mb-4">
                            <i class="fas fa-users fa-2x text-primary"></i>
                        </div>
                        <h3 class="h5 mb-3">Collaborate & Grow</h3>
                        <p class="text-muted">Work seamlessly with teams or clients and scale your efforts efficiently.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="py-5 bg-primary text-white" id="our-mission">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-4">🎯 Our Mission</h2>
                <p class="lead mb-4">To democratize digital marketing by offering intelligent, user-friendly, and results-oriented solutions that help businesses of every size reach their full potential.</p>
                <p class="mb-0">We are here to eliminate guesswork, reduce complexity, and deliver performance—all while keeping your brand's vision at the core of everything we do.</p>
            </div>
        </div>
    </div>
</section><br>

<!-- Why Choose Us Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-4"> Why Choose OptiMarket?</h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4">
                        <div class="service-icon mb-4">
                            <i class="fas fa-cube fa-2x text-primary"></i>
                        </div>
                        <h3 class="h5 mb-3">All-in-One Platform</h3>
                        <p class="text-muted">One dashboard. Infinite possibilities. Access all your marketing needs in one place—saving time, cost, and effort.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4">
                        <div class="service-icon mb-4">
                            <i class="fas fa-rocket fa-2x text-primary"></i>
                        </div>
                        <h3 class="h5 mb-3">Built for Growth</h3>
                        <p class="text-muted">Whether you're growing your presence or scaling your operations, OptiMarket is built to evolve with you.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4">
                        <div class="service-icon mb-4">
                            <i class="fas fa-brain fa-2x text-primary"></i>
                        </div>
                        <h3 class="h5 mb-3">Powered by Insights</h3>
                        <p class="text-muted">We leverage data, trends, and AI-driven tools to help you make smarter, faster decisions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision Section -->
<section class="py-5 bg-light" id="our-vision">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="display-5 fw-bold mb-4">📈 Our Vision for the Future</h2>
                <p class="lead mb-4">As digital marketing continues to evolve, so will OptiMarket. We're committed to staying ahead of the curve—adapting new technologies, expanding our services, and constantly improving the user experience.
                <br><br>We're not just building a product—we're building a community of forward-thinking brands and marketers who are passionate about growth, creativity, and connection.</p>
            </div>
        </div>
    </div>
</section>

<!-- Let's Grow Together Section -->
<section class="grow-together-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card grow-together-card">
                    <div class="card-body text-center py-5">
                        <h2 class="display-4 fw-bold mb-4">Let's Grow Together</h2>
                        <p class="lead mb-4">Let's discuss how we can help you achieve your digital marketing goals.</p>
                        <a href="{{ route('contact') }}" class="btn btn-light btn-lg px-5 rounded-pill">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<style>
    .about-hero {
        background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
        min-height: 50vh;
        padding-top: 80px;
        color: #f8f9fa;
    }

    .about-hero h1 {
        color: #ffffff;
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
        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23ffffff' fill-opacity='1' d='M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
        background-size: cover;
        background-position: center;
    }

    .service-icon {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(79, 70, 229, 0.1);
        border-radius: 15px;
        transition: all 0.3s ease;
        margin: 0 auto;
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

    .bg-primary {
        background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%) !important;
    }

    .lead {
        font-size: 1.2rem;
        line-height: 1.8;
    }

    .grow-together-section {
        background:  #3498db;
        padding: 80px 0;
    }

    .grow-together-card {
        background: #3498db;
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(52, 152, 219, 0.1);
    }

    .grow-together-card h2 {
        color: white;
    }

    .grow-together-card .lead {
        color: rgba(255, 255, 255, 0.9);
    }

    .grow-together-card .btn-light {
        background:  #fff;
        color: #007bff;
        border: none;
        padding: 15px 40px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .grow-together-card .btn-light:hover {
        background: #f8f9fa;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
</style>
@endpush 