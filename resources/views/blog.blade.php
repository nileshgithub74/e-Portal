@extends('layouts.app')

@section('title', 'Blog - OptiMarket')

@section('content')
<!-- Hero Section -->
<div class="blog-hero position-relative overflow-hidden" id="blog">
    <div class="container">
        <div class="row min-vh-50 align-items-center">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold mb-4 animate__animated animate__fadeInUp">Our Blog</h1>
                <p class="lead text-white mb-0 animate__animated animate__fadeInUp animate__delay-1s">Insights, Updates, and Digital Marketing Trends</p>
            </div>
        </div>
    </div>
    <div class="hero-shape"></div>
</div>

<!-- Welcome Section -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 class="h1 fw-bold mb-4">Welcome to the Our Blog</h2>
            <p class="lead text-muted mb-4">Discover expert marketing tips, industry trends, platform updates, and success stories all curated to help you grow your brand with confidence. At OptiMarket, we're here to keep you inspired, informed, and ahead of the game.</p>
        </div>
    </div>
</div>

<!-- Blog Posts Section -->
<div class="container py-5">
    <!-- Featured Post -->
    <div class="row mb-5">
        <div class="col-lg-8 mx-auto">
            <div class="card border-0 shadow-sm featured-post">
                <img src="{{ asset('images/ai.jpg') }}" class="card-img-top" alt="Featured Blog Post">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <span class="badge bg-primary me-2">Featured</span>
                        <small class="text-muted">April 22, 2024</small>
                    </div>
                    <h2 class="card-title h3">The Future of Digital Marketing: AI and Machine Learning</h2>
                    <p class="card-text">Discover how artificial intelligence and machine learning are revolutionizing digital marketing strategies and helping businesses achieve better results.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Posts -->
    <div class="row g-4">
        <div class="col-lg-4">
            <div class="card h-100 border-0 shadow-sm blog-card">
                <img src="{{ asset('images/seo.jpg') }}" class="card-img-top" alt="SEO Strategies">
                <div class="card-body p-4">
                    <small class="text-muted">April 20, 2024</small>
                    <h3 class="card-title h5 mt-2">10 SEO Strategies That Still Work in 2024</h3>
                    <p class="card-text">Learn about the most effective SEO strategies that continue to deliver results in today's digital landscape.</p>
                    <a href="#" class="btn btn-link text-primary p-0">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100 border-0 shadow-sm blog-card">
                <img src="{{ asset('images/sm.png') }}" class="card-img-top" alt="Social Media Marketing">
                <div class="card-body p-4">
                    <small class="text-muted">April 18, 2024</small>
                    <h3 class="card-title h5 mt-2">Mastering Social Media Marketing</h3>
                    <p class="card-text">Tips and tricks to enhance your social media presence and engage with your audience effectively.</p>
                    <a href="#" class="btn btn-link text-primary p-0">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100 border-0 shadow-sm blog-card">
                <img src="{{ asset('images/cm.png') }}" class="card-img-top" alt="Content Marketing">
                <div class="card-body p-4">
                    <small class="text-muted">April 15, 2024</small>
                    <h3 class="card-title h5 mt-2">Content Marketing Essentials</h3>
                    <p class="card-text">A comprehensive guide to creating compelling content that converts visitors into customers.</p>
                    <a href="#" class="btn btn-link text-primary p-0">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container py-4">
    <div class="row g-4">
        Categories
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="h5 mb-3">Categories</h3>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="#" class="btn btn-outline-primary btn-sm">Digital Marketing</a>
                        <a href="#" class="btn btn-outline-primary btn-sm">SEO</a>
                        <a href="#" class="btn btn-outline-primary btn-sm">Social Media</a><br>
                        <a href="#" class="btn btn-outline-primary btn-sm">Content Marketing</a>
                        <a href="#" class="btn btn-outline-primary btn-sm">Email Marketing</a>
                        <a href="#" class="btn btn-outline-primary btn-sm">PPC</a>
                    </div>
                </div>
            </div>
        </div>
        
         Tags -->
        <!-- <div class="col-lg-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="h5 mb-3">Popular Tags</h3>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="#" class="btn btn-outline-secondary btn-sm">#marketing</a>
                        <a href="#" class="btn btn-outline-secondary btn-sm">#seo</a>
                        <a href="#" class="btn btn-outline-secondary btn-sm">#socialmedia</a>
                        <a href="#" class="btn btn-outline-secondary btn-sm">#content</a>
                        <a href="#" class="btn btn-outline-secondary btn-sm">#strategy</a>
                        <a href="#" class="btn btn-outline-secondary btn-sm">#analytics</a>
                        <a href="#" class="btn btn-outline-secondary btn-sm">#growth</a>
                        <a href="#" class="btn btn-outline-secondary btn-sm">#digital</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --> 


    <!-- Newsletter Subscription -->
    <div class="row mt-5">
        <div class="col-lg-8 mx-auto">
            <div class="card border-0 shadow-sm newsletter-card">
                <div class="card-body p-4 text-center">
                    <h3 class="h4 mb-3">Subscribe to Our Newsletter</h3>
                    <p class="text-muted mb-4">Stay updated with the latest digital marketing trends and insights.</p>
                    <form class="d-flex justify-content-center gap-2">
                        <input type="email" class="form-control" placeholder="Enter your email" style="max-width: 300px;">
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .blog-hero {
        background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
        min-height: 50vh;
        padding-top: 80px;
        color: #f8f9fa;
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

    .blog-card {
        transition: all 0.3s ease;
    }

    .blog-card:hover {
        transform: translateY(-5px);
    }

    .blog-card img {
        height: 200px;
        object-fit: cover;
    }

    .featured-post img {
        height: 400px;
        object-fit: cover;
    }

    .newsletter-card {
        background: linear-gradient(135deg,rgba(248, 249, 250, 0.88) 0%,rgb(231, 237, 244) 100%);
    }

    .badge {
        padding: 0.5em 1em;
        font-weight: 500;
    }
</style>
@endpush 