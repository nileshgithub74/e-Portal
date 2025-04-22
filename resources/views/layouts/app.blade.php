<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'Laravel'))</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #4f46e5;
            --primary-dark: #4338ca;
            --secondary-color: #7c3aed;
            --background-color: #f3f4f6;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
        }
        
        /* Navbar Styles */
        .navbar {
            padding: 1rem 0;
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
        }
        
        .navbar-brand {
            margin-right: 2rem;
        }
        
        .navbar-nav {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            width: 100%;
        }
        
        .nav-item {
            position: relative;
        }
        
        .nav-link {
            color: #374151 !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .nav-link:hover {
            color: var(--primary-color) !important;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .nav-link.active {
            color: var(--primary-color) !important;
        }
        
        .nav-link.active::after {
            width: 100%;
        }
        
        .auth-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        
        .auth-card .card-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border-radius: 15px 15px 0 0;
            padding: 2rem;
        }
        
        .form-floating > .form-control:focus,
        .form-floating > .form-control:not(:placeholder-shown) {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }
        
        .form-floating > .form-control:focus ~ label,
        .form-floating > .form-control:not(:placeholder-shown) ~ label {
            opacity: .65;
            transform: scale(.85) translateY(-0.5rem) translateX(0.15rem);
        }
        
        .btn-auth {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }
        
        .btn-auth:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .auth-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .auth-link:hover {
            color: var(--primary-dark);
        }
        
        .auth-dropdown {
            position: relative;
            display: inline-block;
        }
        
        .auth-dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background: white;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            border-radius: 8px;
            z-index: 1000;
            animation: slideIn 0.3s ease;
            margin-top: 0.5rem;
            padding: 0.5rem 0;
        }
        
        .auth-dropdown-content.show {
            display: block;
        }
        
        .auth-dropdown-content a {
            color: #333;
            padding: 8px 12px;
            text-decoration: none;
            display: block;
            transition: all 0.3s ease;
            font-size: 0.9rem;
            white-space: nowrap;
        }
        
        .auth-dropdown-content a:hover {
            background: var(--background-color);
            color: var(--primary-color);
        }
        
        /* Add a small invisible area to prevent gap between button and dropdown */
        .auth-dropdown::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 100%;
            height: 10px;
            background: transparent;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Dropdown Styles */
        .dropdown-menu {
            border: none;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            border-radius: 8px;
            padding: 0.5rem 0;
            margin-top: 0.5rem;
            background: white;
            animation: slideIn 0.3s ease;
        }

        .dropdown-item {
            color: #374151;
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .dropdown-item:hover {
            background: var(--background-color);
            color: var(--primary-color);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                OptiMarket
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('about') }}#about-us">About Us</a></li>
                            <li><a class="dropdown-item" href="{{ route('about') }}#who-we-are">Who We Are</a></li>
                            <li><a class="dropdown-item" href="{{ route('about') }}#what-we-do">What We Do</a></li>
                            <li><a class="dropdown-item" href="{{ route('about') }}#our-mission">Our Mission</a></li>
                            <li><a class="dropdown-item" href="{{ route('about') }}#our-vision">Our Vision</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('services') }}#seo">Search Engine Optimization</a></li>
                            <li><a class="dropdown-item" href="{{ route('services') }}#technical-seo">Technical SEO</a></li>
                            <li><a class="dropdown-item" href="{{ route('services') }}#social-media">Social Media Marketing</a></li>
                            <li><a class="dropdown-item" href="{{ route('services') }}#ppc">Pay Per Click (PPC)</a></li>
                            <li><a class="dropdown-item" href="{{ route('services') }}#email-marketing">Email Marketing</a></li>
                            <li><a class="dropdown-item" href="{{ route('services') }}#content-writing">Content Writing</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
                
                <!-- Authentication Links -->
                @guest
                    <div class="d-flex align-items-center">
                        <div class="dropdown">
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{ route('login') }}"><i class="fas fa-sign-in-alt me-2"></i>Login</a></li>
                                <li><a class="dropdown-item" href="{{ route('register') }}"><i class="fas fa-user-plus me-2"></i>Register</a></li>
                            </ul>
                        </div>
                    </div>
                @else
                    <div class="dropdown ms-auto">
                        <button class="btn btn-auth dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle me-2"></i>{{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt me-2"></i>Logout
                                </a>
                            </li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                @endguest
            </div>
        </div>
    </nav>

    <main class="py-4" style="margin-top: 76px;">
        @yield('content')
        
        @include('components.footer')
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript for smooth scrolling -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href').split('#')[1]);
                    if (target) {
                        window.scrollTo({
                            top: target.offsetTop - 100,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>

    @stack('styles')
    @stack('scripts')
    
    @include('components.cookie-consent')
</body>
</html>