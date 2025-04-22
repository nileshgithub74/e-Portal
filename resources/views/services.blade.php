@extends('layouts.app')

@section('title', 'Our Services - OptiMarket')

@section('content')
<!-- Hero Section -->
<div class="services-hero position-relative overflow-hidden">
    <div class="container">
        <div class="row min-vh-50 align-items-center">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold mb-4 animate__animated animate__fadeInUp">Our Services</h1>
                <p class="lead text-muted animate__animated animate__fadeInUp animate__delay-1s">At OptiMarket, we go beyond marketing—we build real connections between<br> your brand and your audience. From startups to established businesses,<br> our tailored strategies boost visibility, engagement, and results.</p>
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
            <div class="col-lg-6 mb-4" id="seo">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="service-icon me-3">
                                <i class="fas fa-search fa-2x text-primary"></i>
                            </div>
                            <h3 class="h4 mb-0">Search Engine Optimization (SEO)</h3>
                        </div>
                        <p class="text-muted">Through careful keyword research and white hat SEO practices, our website marketing service team can help you achieve higher organic rankings and increased visibility in search results. Our internet marketing company performs extensive keyword research, conducts on-page and off-page optimization and tracks your results with Google Search Console. These digital marketing methods allow us to attract high-quality leads and traffic and increase your conversions.</p>
                        <div class="mt-4">
                            <a href="#" class="btn btn-outline-primary learn-more-btn">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Technical SEO -->
            <div class="col-lg-6 mb-4" id="technical-seo">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="service-icon me-3">
                                <i class="fas fa-cogs fa-2x text-primary"></i>
                            </div>
                            <h3 class="h4 mb-0">Technical SEO</h3>
                        </div>
                        <p class="text-muted">Establish a strong online foundation with on-point technical SEO and digital marketing services. Our technical SEO experts run crawl error reports, check your HTTPS status codes, optimize your site speed, audit redirects and eliminate duplicate content. Through these digital marketing tactics, we increase your website's crawlability and indexability. We also add structured data markup to your website and facilitate site migration, depending on your needs and requirements.</p>
                        <div class="mt-4">
                            <a href="#" class="btn btn-outline-primary learn-more-btn">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social Media Marketing -->
            <div class="col-lg-6 mb-4" id="social-media">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="service-icon me-3">
                                <i class="fas fa-share-alt fa-2x text-primary"></i>
                            </div>
                            <h3 class="h4 mb-0">Social Media Marketing</h3>
                        </div>
                        <p class="text-muted">Ready to expand and market to your audiences on social media? Our marketing services include building social media campaigns to help your business grow and engage your followers. Our digital marketing agency identifies your goals, performs competitor benchmarking and evaluates your customers' online behavior. Using data and analytics, our web marketing services team develops custom social media brand management and paid advertising strategies tailored to your business.</p>
                        <div class="mt-4">
                            <a href="#" class="btn btn-outline-primary learn-more-btn">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PPC Management -->
            <div class="col-lg-6 mb-4" id="ppc">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="service-icon me-3">
                                <i class="fas fa-mouse-pointer fa-2x text-primary"></i>
                            </div>
                            <h3 class="h4 mb-0">Pay Per Click (PPC) Management</h3>
                        </div>
                        <p class="text-muted">Reach your customers quickly and with precision with a data-driven PPC campaign. Our PPC Specialists are AdWords certified, so you can rest easy knowing your campaign is in the hands of professionals. Our internet marketing content team creates targeted ad copies, optimizes your bidding strategies and device targeting tactics and monitors your ROI for each keyword. We also take advantage of seasonal trends to promote your products and drive high-volume leads and traffic.</p>
                        <div class="mt-4">
                            <a href="#" class="btn btn-outline-primary learn-more-btn">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Writing -->
            <div class="col-lg-6 mb-4" id="content-writing">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="service-icon me-3">
                                <i class="fas fa-pen-fancy fa-2x text-primary"></i>
                            </div>
                            <h3 class="h4 mb-0">Content Writing</h3>
                        </div>
                        <p class="text-muted">Your website's content is crucial: it's the foundation of your SEO and the reason many people visit your site. Entrust your content creation with our digital marketing expert, and we'll write it with precision. Our content specialists stay abreast of the latest news and market trends to ensure we adhere to Google standards when developing content. We write headlines that pack a punch, utilize high-performing keywords, incorporate imagery and structure your posts to promote easy reading.</p>
                        <div class="mt-4">
                            <a href="#" class="btn btn-outline-primary learn-more-btn">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Email Marketing -->
            <div class="col-lg-6 mb-4" id="email-marketing">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="service-icon me-3">
                                <i class="fas fa-envelope fa-2x text-primary"></i>
                            </div>
                            <h3 class="h4 mb-0">Email Marketing</h3>
                        </div>
                        <p class="text-muted">How many emails from businesses do you delete every day? Choose our internet marketing service and let's make your email marketing campaigns stand out and work for your business. We create personalized email newsletters to keep your emails out of spam folders and encourage customers to take your desired action. Our team builds your subscriber list, tests email campaigns before delivery, utilizes power words on your content and creates a curiosity gap in your emails.</p>
                        <div class="mt-4">
                            <a href="#" class="btn btn-outline-primary learn-more-btn">Learn More <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Get Started Section -->
<section class="py-4">
    <div class="container">
        <div class="text-center">
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg px-5 py-3 fw-bold" style="background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%); border: none; box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3); transition: all 0.3s ease;">
                Get Started Now <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-4">Our Process</h2>
                <p class="lead text-muted">At OptiMarket, we follow a clear, strategic workflow that ensures your brand gets the attention it deserves. From research to results, every step is crafted to deliver value, creativity, and measurable impact.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm process-card">
                    <div class="card-body p-4 text-center">
                        <div class="process-icon mb-4">
                            <i class="fas fa-search-location fa-2x text-primary"></i>
                        </div>
                        <div class="step-number mb-3">1</div>
                        <h3 class="h5 mb-3">Discovery</h3>
                        <p class="text-muted mb-0">We analyze your business goals and target audience to create a tailored strategy.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm process-card">
                    <div class="card-body p-4 text-center">
                        <div class="process-icon mb-4">
                            <i class="fas fa-tasks fa-2x text-primary"></i>
                        </div>
                        <div class="step-number mb-3">2</div>
                        <h3 class="h5 mb-3">Planning</h3>
                        <p class="text-muted mb-0">We develop a detailed plan with clear objectives and measurable outcomes.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm process-card">
                    <div class="card-body p-4 text-center">
                        <div class="process-icon mb-4">
                            <i class="fas fa-rocket fa-2x text-primary"></i>
                        </div>
                        <div class="step-number mb-3">3</div>
                        <h3 class="h5 mb-3">Execution</h3>
                        <p class="text-muted mb-0">We implement the strategy with precision and attention to detail.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm process-card">
                    <div class="card-body p-4 text-center">
                        <div class="process-icon mb-4">
                            <i class="fas fa-chart-line fa-2x text-primary"></i>
                        </div>
                        <div class="step-number mb-3">4</div>
                        <h3 class="h5 mb-3">Optimization</h3>
                        <p class="text-muted mb-0">We continuously monitor and optimize for better results.</p>
                    </div>
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

    .process-card {
        transition: all 0.3s ease;
        background: white;
    }

    .process-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }

    .process-icon {
        width: 80px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(79, 70, 229, 0.1);
        border-radius: 50%;
        margin: 0 auto;
        transition: all 0.3s ease;
    }

    .process-card:hover .process-icon {
        background: rgba(79, 70, 229, 0.2);
        transform: scale(1.1) rotate(360deg);
    }

    .step-number {
        width: 40px;
        height: 40px;
        background: var(--primary-color);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        font-size: 1.25rem;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .process-card:hover .step-number {
        transform: scale(1.1);
    }

    .learn-more-btn {
        border-width: 2px;
        padding: 0.5rem 1.5rem;
        transition: all 0.3s ease;
    }

    .learn-more-btn:hover {
        background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
        border-color: transparent;
        transform: translateX(5px);
    }

    .learn-more-btn i {
        transition: all 0.3s ease;
    }

    .learn-more-btn:hover i {
        transform: translateX(5px);
    }
</style>
@endpush 