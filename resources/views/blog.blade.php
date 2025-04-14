@extends('layouts.app')

@section('title', 'Blog - E-Portal Marketing Solutions')

@section('content')
<!-- Hero Section -->
<div class="blog-hero position-relative overflow-hidden">
    <div class="container">
        <div class="row min-vh-50 align-items-center">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold mb-4 animate__animated animate__fadeInUp">Our Blog</h1>
                <p class="lead text-muted animate__animated animate__fadeInUp animate__delay-1s">Insights, tips, and strategies for digital marketing success</p>
            </div>
        </div>
    </div>
    <div class="hero-shape"></div>
</div>

<!-- Featured Post -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow-lg featured-post">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&h=600&q=80" 
                         class="card-img-top" 
                         alt="Featured Post">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge bg-primary me-2">Featured</span>
                            <small class="text-muted">May 15, 2024</small>
                        </div>
                        <h2 class="card-title h3 mb-3">The Future of Digital Marketing in 2024</h2>
                        <p class="card-text text-muted mb-4">Explore the latest trends and innovations shaping the digital marketing landscape this year.</p>
                        <div class="d-flex align-items-center">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80" 
                                 alt="Author" 
                                 class="rounded-circle me-3" 
                                 width="40">
                            <div>
                                <h6 class="mb-0">John Doe</h6>
                                <small class="text-muted">Digital Marketing Expert</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Posts -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <!-- Post 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&h=400&q=80" 
                         class="card-img-top" 
                         alt="Blog Post">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge bg-primary me-2">SEO</span>
                            <small class="text-muted">May 10, 2024</small>
                        </div>
                        <h3 class="card-title h5 mb-3">10 Essential SEO Tips for 2024</h3>
                        <p class="card-text text-muted mb-4">Discover the most effective SEO strategies to improve your website's visibility and rankings.</p>
                        <div class="d-flex align-items-center">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80" 
                                 alt="Author" 
                                 class="rounded-circle me-3" 
                                 width="40">
                            <div>
                                <h6 class="mb-0">Jane Smith</h6>
                                <small class="text-muted">SEO Specialist</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Post 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&h=400&q=80" 
                         class="card-img-top" 
                         alt="Blog Post">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge bg-primary me-2">Social Media</span>
                            <small class="text-muted">May 5, 2024</small>
                        </div>
                        <h3 class="card-title h5 mb-3">Social Media Marketing Trends</h3>
                        <p class="card-text text-muted mb-4">Learn about the latest social media trends and how to leverage them for your business.</p>
                        <div class="d-flex align-items-center">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80" 
                                 alt="Author" 
                                 class="rounded-circle me-3" 
                                 width="40">
                            <div>
                                <h6 class="mb-0">Mike Johnson</h6>
                                <small class="text-muted">Social Media Manager</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Post 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&h=400&q=80" 
                         class="card-img-top" 
                         alt="Blog Post">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge bg-primary me-2">Content</span>
                            <small class="text-muted">May 1, 2024</small>
                        </div>
                        <h3 class="card-title h5 mb-3">Content Marketing Strategies</h3>
                        <p class="card-text text-muted mb-4">Master the art of content marketing with these proven strategies and techniques.</p>
                        <div class="d-flex align-items-center">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80" 
                                 alt="Author" 
                                 class="rounded-circle me-3" 
                                 width="40">
                            <div>
                                <h6 class="mb-0">Sarah Wilson</h6>
                                <small class="text-muted">Content Strategist</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="row mt-5">
            <div class="col-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-5" style="background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-4" style="color: #1a365d;">Subscribe to Our Newsletter</h2>
                <p class="lead mb-5" style="color: #2c5282;">Stay updated with the latest digital marketing insights and trends.</p>
                <form class="row g-3 justify-content-center">
                    <div class="col-md-8">
                        <input type="email" class="form-control form-control-lg" placeholder="Enter your email">
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary btn-lg w-100">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<style>
    .blog-hero {
        background: linear-gradient(135deg, #1a237e 0%, #283593 100%);
        min-height: 50vh;
        padding-top: 80px;
        color: #f8f9fa;
    }

    .blog-hero h1 {
        color: #f0f4f8;
    }

    .blog-hero .lead {
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

    .featured-post {
        transition: all 0.3s ease;
    }

    .featured-post:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
    }

    .hover-card {
        transition: all 0.3s ease;
    }

    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }

    .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .featured-post .card-img-top {
        height: 400px;
    }

    .page-link {
        color: var(--primary-color);
        border: none;
        padding: 0.5rem 1rem;
        margin: 0 0.25rem;
        border-radius: 0.5rem;
    }

    .page-item.active .page-link {
        background-color: var(--primary-color);
        color: white;
    }

    .page-link:hover {
        background-color: rgba(79, 70, 229, 0.1);
        color: var(--primary-color);
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